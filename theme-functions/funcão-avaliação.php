<?php

/*    
Function Name: função avaliação
Author: Bdbento/ucqi
Description:Função Avaliação: Esta função é responsavel para permitir com que o usuario avalie o post ou pagina com like e desk permitindo o maior controle e eficácia do conteudo
Version: 1.0
*/


function criar_tabela_votos()
{
    global $wpdb;
    $nome_tabela = $wpdb->prefix . 'votos_like'; // Adicione um prefixo ao nome da tabela

    // Verificar se a tabela já existe
    if ($wpdb->get_var("SHOW TABLES LIKE '$nome_tabela'") != $nome_tabela) {
        // Criar a tabela
        $sql = "CREATE TABLE $nome_tabela (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            post_id mediumint(9) NOT NULL,
            voto_like int NOT NULL,
            voto_dislike int NOT NULL,
            date_created datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            PRIMARY KEY  (id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
add_action('after_setup_theme', 'criar_tabela_votos');

// Função de callback para salvar o voto
function salvar_voto()
{
    global $wpdb;

    // Verificar a validade do nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'like_deslike_vote_nonce')) {
        die('Ação não autorizada.');
    }

    // Obter os dados do voto
    $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
    $vote = isset($_POST['vote']) ? $_POST['vote'] : '';

    // Verificar se o voto é válido (like ou dislike)
    if (!in_array($vote, array('like', 'dislike'))) {
        die('Voto inválido.');
    }

    // Verificar se o post existe
    if (!get_post($post_id)) {
        die('Post não encontrado.');
    }

    // Verificar se o usuário já votou neste post
    $voto_anterior = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM {$wpdb->prefix}votos_like WHERE post_id = %d",
        $post_id
    ));

    // Se o usuário já votou neste post, atualizar o registro existente
    if ($voto_anterior) {
        $wpdb->update(
            $wpdb->prefix . 'votos_like',
            array(
                'voto_' . $vote => $voto_anterior->{'voto_' . $vote} + 1,
                'date_created' => current_time('mysql')
            ),
            array('id' => $voto_anterior->id),
            array('%d', '%s'),
            array('%d')
        );
    } else {
        // Se o usuário ainda não votou neste post, criar um novo registro
        $result = $wpdb->insert(
            $wpdb->prefix . 'votos_like',
            array(
                'post_id' => $post_id,
                'voto_' . $vote => 1, // Incrementar o contador de likes ou dislikes
                'date_created' => current_time('mysql')
            ),
            array('%d', '%d', '%s')
        );

        if ($result === false) {
            die('Erro ao salvar o voto.');
        }
    }

    // Retornar a quantidade total de votos para atualização do front-end
    $likes_count = $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(*) FROM {$wpdb->prefix}votos_like WHERE post_id = %d AND voto_like = 1",
        $post_id
    ));
    $dislikes_count = $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(*) FROM {$wpdb->prefix}votos_like WHERE post_id = %d AND voto_dislike = 1",
        $post_id
    ));

    echo json_encode(array('likes_count' => $likes_count, 'dislikes_count' => $dislikes_count));

    // É importante terminar a execução do script depois de enviar a resposta AJAX
    exit();
}
add_action('wp_ajax_salvar_voto', 'salvar_voto');
add_action('wp_ajax_nopriv_salvar_voto', 'salvar_voto');






function mostrar_pagina_likes_admin()
{
    global $wpdb;

    // Consultar os likes, dislikes e data do último voto agrupados pelo ID do post
    $query = "SELECT v.post_id,
                     v.voto_like AS likes,
                     v.voto_dislike AS dislikes,
                     MAX(v.date_created) AS last_vote_date
              FROM {$wpdb->prefix}votos_like v
              GROUP BY v.post_id";

    // Aplicar filtros se houver
    if (isset($_POST['buscar'])) {
        $search_term = sanitize_text_field($_POST['buscar']);
        $query = $wpdb->prepare("SELECT v.post_id,
                                        v.voto_like AS likes,
                                        v.voto_dislike AS dislikes,
                                        MAX(v.date_created) AS last_vote_date
                                 FROM {$wpdb->prefix}votos_like v
                                 WHERE v.post_id IN (SELECT ID FROM {$wpdb->posts} WHERE post_title LIKE %s)
                                 GROUP BY v.post_id", '%' . $wpdb->esc_like($search_term) . '%');
    }

    // Obter os resultados da consulta
    $likes_dislikes = $wpdb->get_results($query);

    // Verificar se o formulário foi submetido para baixar o CSV
    if (isset($_POST['baixar_csv'])) {
        // Definir o cabeçalho do arquivo CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="likes_dislikes.csv"');

        // Abrir o arquivo CSV para escrever
        $file = fopen('php://output', 'w');

        // Escrever o cabeçalho do CSV
        fputcsv($file, array('Serviço', 'Likes', 'Dislikes', 'Último Voto'));

        // Escrever os dados do CSV
        foreach ($likes_dislikes as $ld) {
            fputcsv($file, array(get_the_title($ld->post_id), $ld->likes, $ld->dislikes, $ld->last_vote_date));
        }

        // Fechar o arquivo CSV
        fclose($file);

        exit;
    }

    // Exibir os resultados
?>
<style>
.desh-likes-menu{
    display: grid;
    grid-auto-flow: column;
    justify-content: space-between;
    font-weight: 500;
}
.desh-likes-download{
    border: none !important;
    background: #00a000 !important;
    color: white !important;
    transition: ease .3s;
}
.desh-likes-download:hover{
    background: #018101 !important;
}
.desh-likes-buscar{
    transition: ease .3s;
    border: none !important;
    background: #2271b1 !important;
    color: white !important;
}
.desh-likes-buscar:hover{
    background: #185280 !important; 
}
.desh-likes-search{
    width: 200px;
}
</style>
    <div class="wrap">
        <h1>Avaliação de Serviços</h1>

        <!-- Formulário de busca -->
        <form method="post" action="" class="desh-likes-menu">
            <div>
                <input type="text" name="buscar" class="desh-likes-search" placeholder="Buscar por título do serviço" />
                <button type="submit" class="button desh-likes-buscar">Buscar</button>
            </div>
            <div>
                <button type="submit" name="baixar_csv" class="button desh-likes-download">Baixar CSV</button><!-- Botão para baixar o CSV -->
            </div>
        </form>

        <hr>

        <!-- Tabela de likes e dislikes -->
        <table class="wp-list-table widefat striped">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Likes</th>
                    <th>Dislikes</th>
                    <th>Último Voto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($likes_dislikes as $ld) : ?>
                    <tr>
                        <td><?php echo get_the_title($ld->post_id); ?></td>
                        <td><?php echo $ld->likes; ?></td>
                        <td><?php echo $ld->dislikes; ?></td>
                        <td><?php echo $ld->last_vote_date; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php
}

function criar_pagina_likes_admin()
{
    add_menu_page(
        'Likes e Dislikes', // Título da página
        'Likes e Dislikes', // Texto do menu
        'manage_options', // Capacidade necessária para acessar a página
        'likes-dislikes', // Slug da página
        'mostrar_pagina_likes_admin', // Função de callback para exibir o conteúdo da página
        'dashicons-thumbs-up', // Ícone
        20 // Posição do menu
    );
}
add_action('admin_menu', 'criar_pagina_likes_admin');



function baixar_csv_likes_dislikes() {
    if (isset($_POST['baixar_csv'])) {
        global $wpdb;


        $query = "SELECT v.post_id,
                         v.voto_like AS likes,
                         v.voto_dislike AS dislikes,
                         MAX(v.date_created) AS last_vote_date
                  FROM {$wpdb->prefix}votos_like v
                  GROUP BY v.post_id";

        // Obter os resultados da consulta
        $likes_dislikes = $wpdb->get_results($query);

        // Definir o cabeçalho do arquivo CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="likes_dislikes.csv"');

        // Abrir o arquivo CSV para escrever
        $file = fopen('php://output', 'w');

        // Escrever o cabeçalho do CSV
        fputcsv($file, array('Serviço', 'Likes', 'Dislikes', 'Último Voto'));

        // Escrever os dados do CSV
        foreach ($likes_dislikes as $ld) {
            fputcsv($file, array(get_the_title($ld->post_id), $ld->likes, $ld->dislikes, $ld->last_vote_date));
        }

        // Fechar o arquivo CSV
        fclose($file);

        exit;
    }
}
add_action('init', 'baixar_csv_likes_dislikes');