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
                                    <div class="tags mt-2"><span><i class="bi bi-house-door-fill"></i>  <i class="bi bi-caret-right"></i>  Sistemas </span><?php the_tags(' <i class="bi bi-caret-right"></i> '); ?></div>
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
                               
<h2>O QUE É O e-MS?</h2>

<p>O e-MS é o sistema oficial do Estado de Mato Grosso do Sul para a gestão eletrônica de documentos e processos administrativos, que permite a elaboração, edição, assinatura e a tramitação digital de documentos e processos administrativos, que podem ser acessados de qualquer lugar, basta que o usuário possua uma conta gov.br e esteja conectado à internet.</p>

<p>O e-MS é uma plataforma inteligente e fundamental à administração pública por facilitar o acesso à informação, reduzir a burocracia e promover inovação e sustentabilidade permitindo a redução do uso de materiais.</p>

<h2>DECRETO DO e-MS</h2>

<p><a href="http://aacpdappls.net.ms.gov.br/appls/legislacao/secoge/govato.nsf/1b758e65922af3e904256b220050342a/c3cbb220bc594a5904258a540046f223?OpenDocument">http://aacpdappls.net.ms.gov.br/appls/legislacao/secoge/govato.nsf/1b758e65922af3e904256b220050342a/c3cbb220bc594a5904258a540046f223?OpenDocument</a></p>

<h2>RESOLUÇÃO NORMATIVA DO e-MS</h2>

<p>Documento em pdf encaminhado (a ideia é colocar a resolução da mesma forma que está na página do sei.goias.gov.br, ou seja com possibilidade de interação do usuário e não apenas um arquivo anexado)</p>

<h2>MANUAL DO e-MS</h2>

<p>A OSAS vai atualizar com as mudanças do sistema e encaminhamos posteriormente - favor colocar algo com “em produção”.</p>

<h2>CADASTRE-SE</h2>

<p>Usuário interno (<a href="link para formulário GSI">link para formulário GSI</a>)</p>
<p>Usuário externo (<a href="Portal de Serviços">Portal de Serviços</a> - acredito que vocês sejam os mais indicados para informar como ficará)</p>

<h2>ACESSO</h2>

<p><a href="Link para o Portal de Serviços">Link para o Portal de Serviços</a></p>

<h2>TREINAMENTOS</h2>

<p>Vídeos constantes na página do curso da escola de governo, talvez um <a href="link para acesso">link para acesso</a></p>
<p>Seria interessante anexar também os vídeos que constam no drive <a href="https://drive.google.com/drive/folders/1Jp_la8TwUMJ7Di-xnzujMirUPUaC8dOv?usp=sharing">https://drive.google.com/drive/folders/1Jp_la8TwUMJ7Di-xnzujMirUPUaC8dOv?usp=sharing</a></p>

<h2>CONTATO</h2>

<p>Telefone da central de abertura de chamados.</p>

<p>Atenciosamente,</p>

<p>Cárita Marilhants S. de Castro</p>
<p>Superintendente de Patrimônio, Gestão Documental e Frotas</p>

 
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
