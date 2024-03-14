<?php
// Adicionar meta box para postagens regulares
function adicionar_meta_box_postagens()
{
    add_meta_box(
        'meta_box_o_que_e', //key
        'O que é ?', //nome do campo
        'renderizar_meta_box_postagens', //função que renderiza o campo
        'post', // Define para qual tipo de postagem a meta box será adicionada (neste caso, postagens regulares)   
        'normal', //localização
        'high' // prioridade
    );
}
add_action('add_meta_boxes', 'adicionar_meta_box_postagens');

// Renderizar meta box
function renderizar_meta_box_postagens($post)
{
    $texto_custom = get_post_meta($post->ID, '_texto_custom', true);
?>
    <style>
        #meta_box_o_que_e {
            font-weight: bold;
            background-color: #f4f4f4;
        }
    </style>
    <label for="texto_custom">Descreva o que é aqui</label>
    <textarea id="texto_custom" name="texto_custom" style="width: 100%; height: 200px;"><?php echo esc_attr($texto_custom); ?></textarea>

<?php
}


// Salvar dados do campo de meta
function salvar_dados_meta_box_postagens($post_id)
{
    if (isset($_POST['texto_custom'])) {
        update_post_meta($post_id, '_texto_custom', wp_kses_post($_POST['texto_custom']));
    }
}
add_action('save_post', 'salvar_dados_meta_box_postagens');

/**********************************************************************************************************************************************************/


// Adicionar segunda meta box para postagens regulares
function adicionar_segunda_meta_box_postagens()
{
    add_meta_box(
        'meta_box_legislacao',
        'Legislação',
        'renderizar_segunda_meta_box_postagens',
        'post', // Define para qual tipo de postagem a meta box será adicionada (neste caso, postagens regulares)
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'adicionar_segunda_meta_box_postagens');

// Renderizar segunda meta box
function renderizar_segunda_meta_box_postagens($post)
{
    $legislacao = get_post_meta($post->ID, '_legislacao', true);
?>
    <label for="legislacao">Descricao da legislacao:</label>
    <textarea id="legislacao" name="legislacao" style="width: 100%; height: 200px;"><?php echo esc_attr($legislacao); ?></textarea>
<?php
}

// Salvar dados da segunda meta box
function salvar_dados_segunda_meta_box_postagens($post_id)
{
    if (isset($_POST['legislacao'])) {
        update_post_meta($post_id, '_legislacao', wp_kses_post($_POST['legislacao']));
    }
}
add_action('save_post', 'salvar_dados_segunda_meta_box_postagens');


/**********************************************************************************************************************************************************/

// Adicionar terceira meta box para postagens regulares
function adicionar_terceira_meta_box_postagens()
{
    add_meta_box(
        'meta_box_manual',
        'Manual',
        'renderizar_terceira_meta_box_postagens',
        'post', // Define para qual tipo de postagem a meta box será adicionada (neste caso, postagens regulares)
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'adicionar_terceira_meta_box_postagens');

// Renderizar terceira meta box
function renderizar_terceira_meta_box_postagens($post)
{
    $manual = get_post_meta($post->ID, '_manual', true);
    $manual_link = get_post_meta($post->ID, '_manual_link', true);
    $manual_link_title = get_post_meta($post->ID, '_manual_link_title', true);
?>

    <style>
        #meta_box_manual {
            font-weight: bold;
            background-color: #f4f4f4;
        }
    </style>
    <label style="font-weight: bold;" for="manual">Descricao do manual:</label>
    <textarea id="manual" name="manual" style="width: 100%; height: 200px;"><?php echo esc_html($manual); ?></textarea>

    <label style="display: block;font-weight: bold;" for="manual_link_title">titulo do botao</label>
    <input type="text" id="manual_link_title" name="manual_link_title" style="width: 20%;" value="<?php echo esc_html($manual_link_title); ?>" placeholder="<?php echo esc_html($manual_link_title); ?>" />

    <label style="display: block;font-weight: bold;" for="manual_link">link do Download do manual:</label>
    <input type="text" id="manual_link" name="manual_link" style="width: 30%;" value="<?php echo esc_html($manual_link); ?>" placeholder="<?php echo esc_html($manual_link); ?>" />
<?php
}

// Salvar dados da terceira meta box
function salvar_dados_terceira_meta_box_postagens($post_id)
{
    if (isset($_POST['manual'])) {
        update_post_meta($post_id, '_manual', wp_kses_post($_POST['manual']));
    }
    if (isset($_POST['manual_link'])) {
        update_post_meta($post_id, '_manual_link', wp_kses_post($_POST['manual_link']));
    }
    if (isset($_POST['manual_link_title'])) {
        update_post_meta($post_id, '_manual_link_title', wp_kses_post($_POST['manual_link_title']));
    }
}
add_action('save_post', 'salvar_dados_terceira_meta_box_postagens');


/**********************************************************************************************************************************************************/

// Adicionar quarta meta box para postagens regulares
function adicionar_quarta_meta_box_postagens()
{
    add_meta_box(
        'meta_box_cadastrese',
        'Cadastre-se',
        'renderizar_quarta_meta_box_postagens',
        'post', // Define para qual tipo de postagem a meta box será adicionada (neste caso, postagens regulares)
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'adicionar_quarta_meta_box_postagens');

// Renderizar quarta meta box
function renderizar_quarta_meta_box_postagens($post)
{
    $cadastrese = get_post_meta($post->ID, '_cadastrese', true);
    $cadastrese_link = get_post_meta($post->ID, '_cadastrese_link', true);
    $cadastrese_link_title = get_post_meta($post->ID, '_cadastrese_link_title', true);
?>
    <label style="font-weight: bold;" for="cadastrese">informacoes sobre o cadastro:</label>
    <textarea id="cadastrese" name="cadastrese" style="width: 100%; height: 200px;"><?php echo esc_html($cadastrese); ?></textarea>

    <label style="display:block;font-weight: bold;" for="cadastrese_link_title">titulo do botao</label>
    <input type="text" id="cadastrese_link_title" name="cadastrese_link_title" value="<?php echo esc_html($cadastrese_link_title); ?>" placeholder="<?php echo esc_html($cadastrese_link_title); ?>" />

    <label style="display:block;font-weight: bold;" for="cadastrese_link">link do cadastro:</label>
    <input type="text" id="cadastrese_link" style="width: 30%;" name="cadastrese_link" value="<?php echo esc_html($cadastrese_link); ?>" placeholder="<?php echo esc_html($cadastrese_link); ?>" />

<?php
}

// Salvar dados da quarta meta box
function salvar_dados_quarta_meta_box_postagens($post_id)
{
    if (isset($_POST['cadastrese'])) {
        update_post_meta($post_id, '_cadastrese', wp_kses_post($_POST['cadastrese']));
    }
    if (isset($_POST['cadastrese_link'])) {
        update_post_meta($post_id, '_cadastrese_link', wp_kses_post($_POST['cadastrese_link']));
    }
    if (isset($_POST['cadastrese_link_title'])) {
        update_post_meta($post_id, '_cadastrese_link_title', wp_kses_post($_POST['cadastrese_link_title']));
    }
}
add_action('save_post', 'salvar_dados_quarta_meta_box_postagens');

/**********************************************************************************************************************************************************/

// Adicionar quinta meta box para postagens regulares
function adicionar_quinta_meta_box_postagens()
{
    add_meta_box(
        'meta_box_Acessso',
        'Acesso',
        'renderizar_quinta_meta_box_postagens',
        'post', // Define para qual tipo de postagem a meta box será adicionada (neste caso, postagens regulares)
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'adicionar_quinta_meta_box_postagens');

// Renderizar quinta meta box

function renderizar_quinta_meta_box_postagens($post)
{
    $acesso = get_post_meta($post->ID, '_acesso', true);
    $acesso_link = get_post_meta($post->ID, '_acesso_link', true);
    $acesso_link_title = get_post_meta($post->ID, '_acesso_link_title', true);
?>

    <style>
        #meta_box_Acessso {
            font-weight: bold;
            background-color: #f4f4f4;
        }
    </style>
    <label style="font-weight: bold;" for="acesso">informacoes sobre o acesso:</label>
    <textarea id="acesso" name="acesso" style="width: 100%; height: 200px;"><?php echo esc_html($acesso); ?></textarea>

    <label style="display:block;font-weight: bold;" for="acesso_link_title">titulo do botao</label>
    <input type="text" id="acesso_link_title" name="acesso_link_title" value="<?php echo esc_html($acesso_link_title); ?>" placeholder="<?php echo esc_html($acesso_link_title); ?>" />

    <label style="display:block;font-weight: bold;" for="acesso_link">link do acesso:</label>
    <input type="text" id="acesso_link" style="width: 30%;" name="acesso_link" value="<?php echo esc_html($acesso_link); ?>" placeholder="<?php echo esc_html($acesso_link); ?>" />

<?php
}

// Salvar dados da quinta meta box

function salvar_dados_quinta_meta_box_postagens($post_id)
{
    if (isset($_POST['acesso'])) {
        update_post_meta($post_id, '_acesso', wp_kses_post($_POST['acesso']));
    }
    if (isset($_POST['acesso_link'])) {
        update_post_meta($post_id, '_acesso_link', wp_kses_post($_POST['acesso_link']));
    }
    if (isset($_POST['acesso_link_title'])) {
        update_post_meta($post_id, '_acesso_link_title', wp_kses_post($_POST['acesso_link_title']));
    }
}
add_action('save_post', 'salvar_dados_quinta_meta_box_postagens');


/**********************************************************************************************************************************************************/
function adicionar_sexta_meta_box_postagens()
{
    add_meta_box(
        'meta_box_treinamento',
        'Treinamento',
        'renderizar_sexta_meta_box_postagens',
        'post', // Define para qual tipo de postagem a meta box será adicionada (neste caso, postagens regulares)
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'adicionar_sexta_meta_box_postagens');

// Renderizar sexta meta box
function renderizar_sexta_meta_box_postagens($post)
{
    $treinamento = get_post_meta($post->ID, '_treinamento', true);
    $galeria_fotos = get_post_meta($post->ID, '_galeria_fotos', true);
    $galeria_videos = get_post_meta($post->ID, '_galeria_videos', true);
    $galeria_arquivos = get_post_meta($post->ID, '_galeria_arquivos', true);
?>

    <style>
        .galeria-imagem,
        .galeria-video,
        .galeria-arquivo {
            display: inline-block;
            margin-right: 10px;
            border: #A8A8A8 1px solid;
            padding: 5px;
            border-radius: 5px;
            background-color: #f4f4f4;
            box-shadow: 0 0 5px #A8A8A8;
        }

        .galeria-imagem img,
        .galeria-video video {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .remover-imagem-post {
            display: block;
            margin: 5px auto;
            padding: 5px 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
        }

        .adicionar-imagem-post {
            display: block;
            margin: 5px auto;
            padding: 5px 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
        }

        .galeria-de-imagens-bloco-dashboard {
            margin: 20px 0;
            border: 3px solid #006BA1;
            padding: 15px;
            border-radius: 10px;
        }
    </style>

    <label style="font-weight: bold;" for="treinamento">Informações sobre o treinamento:</label>
    <textarea id="treinamento" name="treinamento" style="width: 100%; height: 200px;"><?php echo wp_kses_post($treinamento); ?></textarea>

    <div class="galeria-de-imagens-bloco-dashboard">
        <label style="display:inline-block;font-weight: bold; margin: 10px 0 20px" for="galeria_fotos">Selecione as fotos da galeria:</label>
        <div id="galeria-container">
            <?php
            // Verifica se já existem imagens na galeria
            if (!empty($galeria_fotos)) {
                $galeria_ids = explode(',', $galeria_fotos);
                foreach ($galeria_ids as $id) {
                    $image_url = wp_get_attachment_image_src($id, 'thumbnail');
                    if ($image_url) {
            ?>

                        <div class="galeria-imagem">
                            <img src="<?php echo $image_url[0]; ?>" alt="">
                            <input type="hidden" name="galeria_fotos[]" value="<?php echo $id; ?>">
                            <button type="button" class="remover-imagem-post remover-imagem">Remover</button>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
        <br />
        <button type="button" id="adicionar-imagem" class="adicionar-imagem-post">Adicionar Imagem</button>
    </div>

    <div class="galeria-de-imagens-bloco-dashboard">
        <label style="display:inline-block;font-weight: bold; margin: 10px 0 20px" for="galeria_videos">Selecione os vídeos da galeria:</label>
        <div id="galeria-videos-container">
            <?php
            // Verifica se já existem vídeos na galeria
            if (!empty($galeria_videos)) {
                $galeria_video_ids = explode(',', $galeria_videos);
                foreach ($galeria_video_ids as $video_id) {
                    $video_url = wp_get_attachment_url($video_id);
                    if ($video_url) {
            ?>
                        <div class="galeria-video" style="display:inline-block;">
                            <video src="<?php echo $video_url; ?>" controls></video>
                            <input type="hidden" name="galeria_videos[]" value="<?php echo $video_id; ?>">
                            <button type="button" class="remover-video remover-imagem-post">Remover</button>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
        <button type="button" id="adicionar-video" class="adicionar-imagem-post">Adicionar Vídeo</button>
    </div>

    <div class="galeria-de-imagens-bloco-dashboard">
        <label style="display:inline-block;font-weight: bold; margin: 10px 0 20px" for="galeria_arquivos">Selecione os arquivos:</label>
        <div id="galeria-arquivos-container">
            <?php
            // Verifica se já existem arquivos na galeria
            if (!empty($galeria_arquivos)) {
                $galeria_arquivos_ids = explode(',', $galeria_arquivos);
                foreach ($galeria_arquivos_ids as $arquivo_id) {
                    $arquivo_url = wp_get_attachment_url($arquivo_id);
                    if ($arquivo_url) {
            ?>
                        <div class="galeria-arquivo">
                            <a href="<?php echo $arquivo_url; ?>" target="_blank"><?php echo basename($arquivo_url); ?></a>
                            <input type="hidden" name="galeria_arquivos[]" value="<?php echo $arquivo_id; ?>">
                            <button type="button" class="remover-arquivo remover-imagem-post">Remover</button>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
        <button type="button" id="adicionar-arquivo" class="adicionar-imagem-post">Adicionar Arquivo</button>
    </div>
    <script>
        jQuery(document).ready(function($) {

            // Adicionar imagem
            $('#adicionar-imagem').on('click', function() {
                var frame = wp.media({
                    title: 'Selecione ou faça upload de uma imagem',
                    multiple: true
                });

                frame.on('select', function() {
                    var attachments = frame.state().get('selection').toJSON();
                    attachments.forEach(function(attachment) {
                        var image_url = attachment.sizes.thumbnail ? attachment.sizes.thumbnail.url : attachment.url;
                        var input_html = '<div class="galeria-imagem" style="display:inline-block;"><img src="' + image_url + '" alt=""><input type="hidden" name="galeria_fotos[]" value="' + attachment.id + '"><button type="button" class="remover-imagem-post remover-imagem">Remover</button></div>';
                        $('#galeria-container').append(input_html);
                    });
                });

                frame.open();
            });

            // Adicionar vídeo
            $('#adicionar-video').on('click', function() {
                var frame = wp.media({
                    title: 'Selecione ou faça upload de um vídeo',
                    library: {
                        type: 'video'
                    },
                    multiple: true
                });

                frame.on('select', function() {
                    var attachments = frame.state().get('selection').toJSON();
                    attachments.forEach(function(attachment) {
                        var video_url = attachment.url;
                        var input_html = '<div class="galeria-video" style="display:inline-block;"><video src="' + video_url + '" controls></video><input type="hidden" name="galeria_videos[]" value="' + attachment.id + '"><button type="button" class="remover-video remover-imagem-post">Remover</button></div>';
                        $('#galeria-videos-container').append(input_html);
                    });
                });

                frame.open();
            });

            // Adicionar arquivo
            $('#adicionar-arquivo').on('click', function() {
                var frame = wp.media({
                    title: 'Selecione ou faça upload de um arquivo',
                    library: {
                        type: 'application'
                    },
                    multiple: true
                });

                frame.on('select', function() {
                    var attachments = frame.state().get('selection').toJSON();
                    attachments.forEach(function(attachment) {
                        var arquivo_url = attachment.url;
                        var input_html = '<div class="galeria-arquivo"><a href="' + arquivo_url + '" target="_blank">' + attachment.filename + '</a><input type="hidden" name="galeria_arquivos[]" value="' + attachment.id + '"><button type="button" class="remover-arquivo remover-imagem-post">Remover</button></div>';
                        $('#galeria-arquivos-container').append(input_html);
                    });
                });

                frame.open();
            });

            // Remover imagem
            $('#galeria-container').on('click', '.remover-imagem', function() {
                $(this).parent().remove();
            });

            // Remover vídeo
            $('#galeria-videos-container').on('click', '.remover-video', function() {
                $(this).parent().remove();
            });

            // Remover arquivo
            $('#galeria-arquivos-container').on('click', '.remover-arquivo', function() {
                $(this).parent().remove();
            });
        });
    </script>


<?php
}

// Salvar dados da sexta meta box
function salvar_dados_sexta_meta_box_postagens($post_id)
{
    if (isset($_POST['treinamento'])) {
        update_post_meta($post_id, '_treinamento', wp_kses_post($_POST['treinamento']));
    }

    if (isset($_POST['galeria_fotos']) && is_array($_POST['galeria_fotos'])) {
        $galeria_fotos = implode(',', $_POST['galeria_fotos']);
        update_post_meta($post_id, '_galeria_fotos', $galeria_fotos);
    }

    if (isset($_POST['galeria_videos']) && is_array($_POST['galeria_videos'])) {
        $galeria_videos = implode(',', $_POST['galeria_videos']);
        update_post_meta($post_id, '_galeria_videos', $galeria_videos);
    }
    if (isset($_POST['galeria_arquivos']) && is_array($_POST['galeria_arquivos'])) {
        $galeria_arquivos = implode(',', $_POST['galeria_arquivos']);
        update_post_meta($post_id, '_galeria_arquivos', $galeria_arquivos);
    }
}
add_action('save_post', 'salvar_dados_sexta_meta_box_postagens');



// Adicione esta função ao seu arquivo functions.php ou em algum local onde deseja exibir as fotos da galeria
function exibir_fotos_galeria_postagem($post_id)
{
    $galeria_fotos = get_post_meta($post_id, '_galeria_fotos', true);

    if (!empty($galeria_fotos)) {
        $galeria_ids = explode(',', $galeria_fotos);
        echo '<div style="text-align: center;" class="galeria-container-sistema row">';
        foreach ($galeria_ids as $id) {
            $image_url = wp_get_attachment_image_src($id, 'small'); // 'large' é o tamanho da imagem que queremos recuperar
            if ($image_url) {
                echo '<div class="col-lg-4 col-md-6 col-sm-12 post-fotos-img d-flex justify-content-center">';
                echo '<a href="' . wp_get_attachment_image_url($id, 'full') . '" target="_blank">';
                echo '<img src="' . $image_url[0] . '" alt="">';
                echo '</a>';
                echo '</div>';
            }
        }
        echo '</div>';
    }
}

// Adicione esta função ao seu arquivo functions.php ou em algum local onde deseja exibir os vídeos da galeria

function exibir_videos_galeria_postagem($post_id)
{
    $galeria_videos = get_post_meta($post_id, '_galeria_videos', true);

    if (!empty($galeria_videos)) {
        $galeria_video_ids = explode(',', $galeria_videos);
        echo '<div class="galeria-videos-container row">';
        foreach ($galeria_video_ids as $video_id) {
            $video_url = wp_get_attachment_url($video_id);
            if ($video_url) {
                echo '<div class="galeria-video-post col-lg-6 col-sm-12 d-flex justify-content-center">';
                echo '<video src="' . $video_url . '" controls></video>';
                echo '</div>';
            }
        }
        echo '</div>';
    }
}

// Adicione esta função ao seu arquivo functions.php ou em algum local onde deseja exibir os arquivos da galeria
function exibir_arquivos_galeria_postagem($post_id)
{
    $galeria_arquivos = get_post_meta($post_id, '_galeria_arquivos', true);

    if (!empty($galeria_arquivos)) {
        $galeria_arquivos_ids = explode(',', $galeria_arquivos);
        echo '<div class="galeria-arquivos-container">';
        foreach ($galeria_arquivos_ids as $arquivo_id) {
            $arquivo_url = wp_get_attachment_url($arquivo_id);
            if ($arquivo_url) {
                echo '<div class="galeria-arquivo-post">';
                echo '<a href="' . $arquivo_url . '" target="_blank">' . basename($arquivo_url);
                echo '</a>';
                echo '</div>';
            }
        }
        echo '</div>';
    }
}



/**********************************************************************************************************************************************************/


// Adicionar meta box para postagens de tipo de postagem personalizado 

function adicionar_contato_meta_box_postagens()
{
    add_meta_box(
        'meta_box_contato',
        'Contato',
        'renderizar_contato_meta_box_postagens',
        'post', // Define para qual tipo de postagem a meta box será adicionada (neste caso, postagens regulares)
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'adicionar_contato_meta_box_postagens');

// Renderizar meta box

function renderizar_contato_meta_box_postagens($post)
{
    $contato = get_post_meta($post->ID, '_contato', true);
?>
    <style>
        #meta_box_contato {
            font-weight: bold;
            background-color: #f4f4f4;
        }
    </style>

    <label style="display:block;font-weight: bold;" for="contato">contato:</label>
    <textarea id="contato" name="contato" style="width: 100%; height: 200px;"><?php echo esc_html($contato); ?></textarea>

<?php

}

// Salvar dados da meta box

function salvar_dados_contato_meta_box_postagens($post_id)
{
    if (isset($_POST['contato'])) {
        update_post_meta($post_id, '_contato', wp_kses_post($_POST['contato']));
    }
  
}
add_action('save_post', 'salvar_dados_contato_meta_box_postagens');

/**********************************************************************************************************************************************************/

// Adicionar segunda meta box para postagens de tipo de postagem personalizado

function adicionar_faq_meta_box_postagens()
{
    add_meta_box(
        'meta_box_faq',
        'FAQ',
        'renderizar_faq_meta_box_postagens',
        'post', // Define para qual tipo de postagem a meta box será adicionada (neste caso, postagens regulares)
        'normal',
        'high'
    );
}

add_action('add_meta_boxes', 'adicionar_faq_meta_box_postagens');

// Renderizar segunda meta box

function renderizar_faq_meta_box_postagens($post)
{
    $faq = get_post_meta($post->ID, '_faq', true);

?>

    <label style="display:block;font-weight: bold;" for="faq">faq:</label>
    <textarea id="faq" name="faq" style="width: 100%; height: 200px;"><?php echo esc_html($faq); ?></textarea>

<?php


}

// Salvar dados da segunda meta box

function salvar_dados_faq_meta_box_postagens($post_id)
{
    if (isset($_POST['faq'])) {
        update_post_meta($post_id, '_faq', wp_kses_post($_POST['faq']));
    }
}
add_action('save_post', 'salvar_dados_faq_meta_box_postagens');
/**********************************************************************************************************************************************************/