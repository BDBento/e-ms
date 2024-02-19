<section class="sistema-ordenado">
    <div class="container" id="sistema-ordenado">
        <div class="text-sistem-ordenado">
            <h2>Sistemas por ordem alfabética</h2>
            <p>Encontre o sistema desejado navegando pelas letras abaixo.</p>
        </div>
        <div class="alf-ordenado">
            <ul>
                <?php
                $letra_sel = isset($_POST['letra-sel']) ? $_POST['letra-sel'] : '';
                $letters = range('A', 'Z');
                foreach ($letters as $letter) {
                    $active_class = ($letra_sel == $letter) ? 'active-alfa' : '';
                    echo '<li class="' . $active_class . '"><a href="#" onclick="selectLetter(\'' . $letter . '\')">' . $letter . '</a></li>';
                }
                ?>

            </ul>
        </div>
    </div>



    <div class="container">
        <div class="ordenado-content row">
            <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => -1,

            );


            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $title = get_the_title();
                    $first_letter = strtoupper(substr($title, 0, 1));

                    // Check if the post title starts with the selected letter
                    if ($first_letter == $letra_sel) {
                        // Display the post content or any other desired output
            ?>

                        <div class="item-ordenado col-4">
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                                <?php
                                the_excerpt(5);
                                ?>
                            </a>
                        </div>
                        </a>
                        <script>
                            setTimeout(function() {
                                $('html, body').animate({
                                    scrollTop: $('#sistema-ordenado').offset().top
                                }, 50);
                            }, 50);
                        </script>
            <?php
                    }
                }
            }
            ?>
            <script>
                function selectLetter(letter) {
                    var form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '';
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'letra-sel';
                    input.value = letter;
                    form.appendChild(input);
                    document.body.appendChild(form);
                    form.submit();


                }



                // Check if the form was submitted
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>
            <?php
            wp_reset_postdata();
            ?>
        </div>
    </div>
    </div>
</section>