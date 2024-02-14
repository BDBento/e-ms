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
                $letters = range('A', 'Z');
                foreach ($letters as $letter) {
                    $active_class = ($letra_selecionada == $letter) ? 'active-alfa' : '';
                    echo '<li><a href="?letra-selecionada=' . $letter . '" class="' . $active_class . '">' . $letter . '</a></li>';
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
    'posts_per_page' => 12
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $title = get_the_title();
        $first_letter = strtoupper(substr($title, 0, 1));

        // Check if the post title starts with the selected letter
        if ($first_letter == $letra_selecionada) {
            // Display the post content or any other desired output
            the_title();
            the_excerpt();
        }
    }
}

wp_reset_postdata();
?>
