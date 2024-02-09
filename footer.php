<footer class="footer-card">
    
    <div class="container footer-conteudo">
        <div class="footer-gov-widger row ">
            <div>
                <div class="row">
                    <div class=" widgets-rodape  col-7 ">
                        <div class="footer ">
                            <?php get_sidebar('footer'); ?>
                        </div>
                        <div class="text-end row align-items-center align-middle col-5">
                            <div class="row">
                                <div class="col-5 footer_custon_logo"><?php the_custom_logo();?></div>
                                <img class="col-6" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_governo_colorido.svg" alt="Governo de MS" class="d-none d-md-inline">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="barra-rodape">
        <div class="container">
            <div class="row d-flex justify-content-between" style="padding-top: 12px; padding-bottom: 12px;">
                <div class="col">
                    <p style="color: #fff;">SETDIGI | Secretaria-Executiva de Transformação Digital</p>
                </div>
                <div class="col">
                    <p class="text-end" style="color: #fff;">Mapa do Site | Política de Privacidade | Termos de Uso</p>
                </div>

            </div>
        </div>
    </div>
</footer>

<?php
function acessibilidade_menu()
{ ?>
    <!--------------------------------V-libras----------------------------------->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>

    <script async src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <!-------------------------------/V-libras----------------------------------->
    <!--------------------------------Userway------------------------------------>

    <script async data-account="n4LcBHs32d" src="https://cdn.userway.org/widget.js"></script>

    <!--------------------------------/Userway----------------------------------->

<?php }

add_action('wp_footer', 'acessibilidade_menu', 70);



wp_footer(); ?>

</body>
        
</html>