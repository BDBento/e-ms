<?php get_header(); ?>
    
    
    <section class="lista-noticias">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h1 class="green">Notícias</h1>
                </div>
                <?php // Loop Archives
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <?php // Template Looping
                                    get_template_part( 'template-parts/loop/post');
                                ?>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
                <div class="col-12">
                    <?php // Paginação
                        paginacao();
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>