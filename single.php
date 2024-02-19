<?php
    // Cabecalho
get_header();?>
<section id="post-interno">
    <div>
        <?php // Loop Archives
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                
                <div>
                    <div class="cabecario-post">
                        <div class="container">
                            <div class="row">
                            <div class="col-10">
                                <?php the_category(', '); ?>
                                <h1 class=""><?php the_title(); ?></h1>
                                <ul class="list-inline list-unstyled">
                                    <li class="list-inline-item">
                                    <div class="tags mt-2"><span><i class="bi bi-house-door-fill"></i>  <i class="bi"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Breadcrumb.svg" alt=""></i>  Sistemas </span><?php the_tags(' <i class="bi bi-caret-right"></i> '); ?></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-2">
                                <a id="back" href="javascript: history.go(-1)"><button class="botao-voltar"><i class="bi bi-caret-left-fill"></i> Voltar</button></a>
                            </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="container "> 
                        
                        <div class="row">
                            <div class="menu-flutuante-post col-3">
                                <div class="vertical-menu">
                                    <ul>
                                        <a href="#" onclick="changeColor(event)"><li id="item-menu-inicio">Item 1</li></a>
                                        <a href="#" onclick="changeColor(event)"><li>Item 2</li></a>
                                        <a href="#" onclick="changeColor(event)"><li>Item 3</li></a>
                                        <a href="#" onclick="changeColor(event)"><li>Item 4</li></a>
                                        <a href="#" onclick="changeColor(event)"><li>Item 5</li></a>
                                        <a href="#" onclick="changeColor(event)"><li>Item 6</li></a>
                                        <a href="#" onclick="changeColor(event)"><li>Item 7</li></a>
                                        <a href="#" onclick="changeColor(event)"><li id="item-menu-fim">Item 8</li></a>
                                    </ul>
                                </div>

                                <script>
                                    function changeColor(event) {
                                        event.preventDefault();

                                        var links = document.querySelectorAll('.vertical-menu a li');
                                        links.forEach(function(link) {
                                            link.classList.remove('menu-flutuante-post-selecionado'); // Remove class from all links
                                        });

                                        event.target.classList.add('menu-flutuante-post-selecionado'); // Add class to clicked link
                                        
                                        if (event.target.id === 'item-menu-inicio') {
                                            event.target.style.borderRadius = '8px 8px 0 0 '; 
                                        }
                                        if (event.target.id === 'item-menu-fim') {
                                            event.target.style.borderRadius = '0 0 8px 8px ';
                                        }
                                    }
                                </script>

                            </div>                        
                                                
                            <div id="content" class="col-9">
                                <?php the_content(); ?>
                            </div>
                        </div>

                    </div>   
                  
                   
                </div>
                <?php endwhile;
            endif;
        ?>
    </div>
</section>
<?php
// Template Rodape
get_footer();
