<?php
$nova_consulta = new WP_Query( 
    array(
        'posts_per_page'      => 10,                 // Máximo de 5 artigos
        'no_found_rows'       => true,              // Não conta linhas
        'post_status'         => 'publish',         // Somente posts publicados
        'ignore_sticky_posts' => true,              // Ignora posts fixos
        'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
        'meta_key'            => 'tp_post_counter', // A nossa post meta
        'order'               => 'DESC',             // Ordem decrescente
        'category__not_in'    => ''          //expluindo noticias
    )
);
?>

    <div class="mais-vistos container row" id="mais-vistos" style="border: blue solid 3px">
        <h2 id="tituloMaisVisto">Sistemas Mais Acessados</h2>
        
        <?php if ( $nova_consulta->have_posts() ): ?>
            <?php while ( $nova_consulta->have_posts() ): ?>
            
                <?php $nova_consulta->the_post(); ?>
                <?php $tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );?>
                
                <div class="mais-visto clearfix col-3" style=" border: red solid 3px" >           
                    <?php if( has_post_thumbnail() ): ?>
                        <div class="mais-visto-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('mais-visto-thumbnail'); ?>
                            </a>
                        </div> <!-- .mais-visto-thumbnail -->
                    <?php endif; // has_post_thumbnail ?>
                    
                    <h4 class="mais-visto-titulo">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title();?>
                        </a>
                        <span class="contadorMaisVisto">(<?php echo $tp_post_counter; ?>)</span>
                    </h4> <!-- .mais-visto-titulo -->
                
                </div> <!-- .mais-visto -->
                
            <?php endwhile; ?>
        <?php endif; // have_posts ?>

        <?php wp_reset_postdata(); ?>
    </div> <!-- .mais-vistos -->

