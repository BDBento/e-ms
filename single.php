<?php
// Cabecalho
get_header(); ?>
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
                                            <div class="tags mt-2"><span><i class="bi bi-house-door-fill"></i> <i class="bi bi-caret-right"></i> Sistemas </span><?php the_tags(' <i class="bi bi-caret-right"></i> '); ?></div>
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
                                        <a href="#ancora-post-1" onclick="changeColor(event)">
                                            <li id="item-menu-inicio">O que é?</li>
                                        </a>
                                        <a href="#ancora-post-2" onclick="changeColor(event)">
                                            <li>Legislação</li>
                                        </a>
                                        <a href="#ancora-post-3" onclick="changeColor(event)">
                                            <li>Manual</li>
                                        </a>
                                        <a href="#ancora-post-4" onclick="changeColor(event)">
                                            <li>Cadastre-se</li>
                                        </a>
                                        <a href="#ancora-post-5" onclick="changeColor(event)">
                                            <li>Acesso</li>
                                        </a>
                                        <a href="#ancora-post-6" onclick="changeColor(event)">
                                            <li>Treinamento</li>
                                        </a>
                                        <a href="#ancora-post-7" onclick="changeColor(event)">
                                            <li id="item-menu-fim">Contato</li>
                                        </a>
                                    </ul>
                                </div>

                                <script>
                                    function changeColor(event) {

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

                                <?php if (get_post_meta(get_the_ID(), '_texto_custom', true)) : ?>
                                    <div id="ancora-post-1" class="ancora-post">
                                        <h2>O que é <?php the_title(); ?> ?</h2>
                                        <p><?php echo get_post_meta(get_the_ID(), '_texto_custom', true); ?></p>
                                    </div>
                                    <hr>
                                <?php endif; ?>

                                <?php if (get_post_meta(get_the_ID(), '_legislacao', true)) : ?>
                                    <div id="ancora-post-2" class="ancora-post">
                                        <h2>Legislação do <?php the_title(); ?></h2>
                                        <p><?php echo get_post_meta(get_the_ID(), '_legislacao', true); ?></p>
                                    </div>
                                    <hr>
                                <?php endif; ?>

                                <?php if (get_post_meta(get_the_ID(), '_manual', true)) : ?>
                                    <div id="ancora-post-3" class="ancora-post">
                                        <h2>Manual do <?php the_title(); ?></h2>
                                        <p><?php echo get_post_meta(get_the_ID(), '_manual', true); ?></p>



                                        <?php if (get_post_meta(get_the_ID(), '_manual_link', true)) : ?>
                                            <a href="<?php echo get_post_meta(get_the_ID(), '_manual_link', true); ?>">
                                                <button type="button" class="btn btn-primary">
                                                    <?php echo get_post_meta(get_the_ID(), '_manual_link_title', true); ?>
                                                </button>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <hr>
                                <?php endif; ?>

                                <?php if (get_post_meta(get_the_ID(), '_cadastrese', true)) : ?>
                                    <div id="ancora-post-4" class="ancora-post">
                                        <h2>Cadastre-se no <?php the_title(); ?></h2>
                                        <p><?php echo get_post_meta(get_the_ID(), '_cadastrese', true); ?></p>


                                        <p class="title-botao">Cadastre-se no sistema por aqui</p>

                                        <div class="d-grid gap-2 col-3 mx-auto">
                                            <a href="<?php echo get_post_meta(get_the_ID(), '_cadastrese_link', true); ?>">
                                                <button type="button" class="btn btn-primary botao-botao">
                                                    <?php if (get_post_meta(get_the_ID(), '_cadastrese_link_title', true)) : ?>
                                                        <?php echo get_post_meta(get_the_ID(), '_cadastrese_link_title', true); ?>
                                                    <?php else : ?>
                                                        Realizar cadastro
                                                    <?php endif; ?>
                                                </button>

                                            </a>
                                        </div>


                                    </div>
                                    <hr>
                                <?php endif; ?>

                                <?php if (get_post_meta(get_the_ID(), '_acesso', true)) : ?>
                                    <div id="ancora-post-5" class="ancora-post">
                                        <h2>Acesso no <?php the_title(); ?></h2>
                                        <p><?php echo get_post_meta(get_the_ID(), '_acesso', true); ?></p>


                                        <p class="title-botao">Acesse o sistema por aqui</p>

                                        <div class="d-grid gap-2 col-3 mx-auto">
                                            <a href="<?php echo get_post_meta(get_the_ID(), '_acesso_link', true); ?>">
                                                <button type="button" class="btn btn-primary botao-botao">
                                                    <?php if (get_post_meta(get_the_ID(), '_acesso_link_title', true)) : ?>
                                                        <?php echo get_post_meta(get_the_ID(), '_acesso_link_title', true); ?>
                                                    <?php else : ?>
                                                        Acessar sistema
                                                    <?php endif; ?>
                                                </button>

                                            </a>
                                        </div>


                                    </div>
                                    <hr>
                                <?php endif; ?>

                                <?php if (get_post_meta(get_the_ID(), '_treinamento', true)) : ?>
                                    <div id="ancora-post-6" class="ancora-post">
                                        <h2>Treinamento no <?php the_title(); ?></h2>
                                        <p><?php echo get_post_meta(get_the_ID(), '_treinamento', true); ?></p>

                                        <h2>Imagens</h2>
                                        <?php
                                        exibir_fotos_galeria_postagem(get_the_ID());
                                        ?>

                                        <h2>Vídeos</h2>
                                        <?php
                                        exibir_videos_galeria_postagem(get_the_ID());
                                        ?>
                                    </div>

                                    <h2>arquivos para baixar</h2>

                                    <?php
                                    exibir_arquivos_galeria_postagem(get_the_ID());
                                    ?>
                                    <hr>
                                <?php endif; ?>

                                <?php if (get_post_meta(get_the_ID(), '_contato', true)) : ?>
                                    <div id="ancora-post-7" class="ancora-post">
                                        <h2>Contato <?php the_title(); ?></h2>
                                        <p><?php echo get_post_meta(get_the_ID(), '_contato', true); ?></p>
                                    </div>
                                    <hr>
                                <?php endif; ?>

                                <?php if (get_post_meta(get_the_ID(), '_faq', true)) : ?>
                                    <div id="ancora-post-8" class="ancora-post">
                                        <h2>FAQ <?php the_title(); ?></h2>
                                        <?php echo get_post_meta(get_the_ID(), '_faq', true); ?>
                                    </div>
                                    <hr>
                                <?php endif; ?>


                            </div>

                        </div>


                        <div id="likeBox">
                            <p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/info.svg" alt="SVG" />
                                Essa informação foi útil?
                            </p>
                            <div>
                                <?php
                                $nonce = wp_create_nonce("like_deslike_vote_nonce");
                                $link = admin_url('admin-ajax.php?action=like_deslike_vote&post_id=' . $post->ID . '&nonce=' . $nonce); ?>
                                <button id="like" data-vote="like" data-nonce="<?php echo $nonce; ?>" data-post_id="<?php echo $post->ID; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/like.svg" alt="SVG" />
                                    Gostei
                                </button>
                                <button id="dislike" data-vote="dislike" data-nonce="<?php echo $nonce; ?>" data-post_id="<?php echo $post->ID; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/deslike.svg" alt="SVG" />
                                    Não Gostei
                                </button>
                            </div>
                            <div id="voteMessage" style="display: none;"></div>
                        </div>



                        <script>
                            jQuery(document).ready(function($) {
                                $('#like, #dislike').click(function() {

                                    console.log('Botão clicado!');

                                    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

                                    var button = $(this);
                                    var vote = button.data('vote');
                                    var postId = button.data('post_id');
                                    var nonce = button.data('nonce');


                                    console.log(vote);

                                    // Verificar se o cookie de voto está presente
                                    if (getCookie('vote_' + postId)) {
                                        
                                        document.getElementById('likeBox').style.display = 'none';
                                        return;
                                    }

                                    // Enviar o voto por AJAX
                                    $.ajax({
                                        type: 'POST',
                                        url: ajaxurl,
                                        data: {
                                            action: 'salvar_voto',
                                            post_id: postId,
                                            vote: vote,
                                            nonce: nonce
                                        },
                                        success: function(response) {
                                            // Exibir a mensagem após o voto ter sido computado
                                            var message = (vote === 'like') ? 'Obrigado!! Seu voto positivo foi computado.' : 'Obrigado!! Seu voto negativo foi computado.';
                                            $('#voteMessage').text(message).fadeIn().delay(8000).fadeOut();

                                            
                                            
                                            // Definir um cookie para registrar o voto (com tempo de expiração de 30 segundos)
                                            setCookie('vote_' + postId, 'true', 30);
                                        }
                                    });
                                });

                                // Função para verificar se um cookie existe
                                function getCookie(name) {
                                    var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
                                    return match ? true : false;
                                }

                                // Função para definir um cookie com tempo de expiração
                                function setCookie(name, value, seconds) {
                                    var expires = '';
                                    if (seconds) {
                                        var date = new Date();
                                        date.setTime(date.getTime() + (seconds * 1000));
                                        expires = '; expires=' + date.toUTCString();
                                    }
                                    document.cookie = name + '=' + value + expires + '; path=/';
                                }
                            });
                        </script>


                    </div>
            <?php endwhile;
        endif;
            ?>



                </div>
</section>




<?php




// Template Rodape
get_footer();
