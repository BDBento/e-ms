<section class="sistema-ordenado">
    <div class="container">
        <div class="text-sistem-ordenado">
            <h2>Sistemas por ordem alfabética</h2>
            <p>Encontre o sistema desejado navegando pelas letras abaixo.</p>
        </div>
        <div class="alf-ordenado">
            <ul>
                <?php
                $letra_selecionada = isset($_GET['letra-selecionada']) ? $_GET['letra-selecionada'] : '';
                $letras = range('A', 'Z');
                foreach ($letras as $letra) {
                    $active_class = ($letra_selecionada == $letra) ? 'active-alfa' : '';
                    echo '<li><a href="?letra-selecionada=' . $letra . '" class="' . $active_class . '">' . $letra . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</section>

<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => 33
);

$query = new WP_Query($args);

?>
<div class="container">
<?php
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $title = get_the_title();
        $primeira_letra = strtoupper(substr($title, 0, 1));

        // Verifica se o título do post começa com a letra selecionada
        if ($primeira_letra == $letra_selecionada) {
            // Exibe o conteúdo do post ou qualquer outro resultado desejado
            ?>
            <h2><?php the_title(); ?></h2>
            <?php
            the_excerpt();
        }
    }
}

wp_reset_postdata();
?>
</div>