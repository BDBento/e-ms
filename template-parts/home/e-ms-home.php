<section id="post-interno">
    <div>
        <div>
            <div class="cabecario-post-temp">
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="titulo-post">E-ms</h1>
                            <ul class="list-inline list-unstyled">
                                <li class="list-inline-item">
                                    <div class="tags tag-post mt-2">
                                        <span>
                                            <i class="bi bi-house-door-fill"></i>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Breadcrumb.svg">
                                            <p class="internal-breadcrumb-p">Sistemas</p>
                                        </span>
                                        <?php the_tags(' > '); ?>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container ">

                <div class="row">
                    <div class="menu-flutuante-post col-lg-3 col-md-4 col-sm-12">
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

                    <div id="content" class="col-lg-9 col-md-8 col-sm-12 bloco-artigo">
                        <div>
                            <h2 id="ancora-post-1" class="ems-post">O que é o e-ms</h2>

                            <p>O e-MS é o sistema oficial do Estado de Mato Grosso do Sul para a gestão eletrônica de documentos e processos administrativos, que permite a elaboração, edição, assinatura e a tramitação digital de documentos e processos administrativos, que podem ser acessados de qualquer lugar, basta que o usuário possua uma conta gov.br e esteja conectado à internet.</p>

                            <p>O e-MS é uma plataforma inteligente e fundamental à administração pública por facilitar o acesso à informação, reduzir a burocracia e promover inovação e sustentabilidade permitindo a redução do uso de materiais.</p>
                        </div>
                        <hr>
                        <div id="ancora-post-2">
                            <h2 class="ems-post">Legislação</h2>

                            <h3>Resolução Normativa</h3>

                            <p>Documento em pdf encaminhado (a ideia é colocar a resolução da mesma forma que está na página do sei.goias.gov.br, ou seja com possibilidade de interação do usuário e não apenas um arquivo anexado)</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapseTwo">
                                        CAPÍTULO 1 DISPOSIÇÕES GERAIS
                                    </button>
                                </h2>
                                <div id="collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Art. 1º Institui-se, no âmbito dos órgãos da Administração Direta, das autarquias e das
                                            fundações do Poder Executivo Estadual, o Sistema de Processos Eletrônicos, de uso
                                            obrigatório, destinado à gestão processual e de documentos.</p>

                                        <p>Parágrafo único. O sistema a que se refere o caput deste artigo deverá prover mecanismos para
                                            a verificação da autoria e da integridade dos documentos em processo administrativo
                                            eletrônico.</p>

                                        <p>Art. 2º Para efeitos do disposto neste Decreto, consideram-se as seguintes definições:</p>

                                        <p>I - agente administrativo: o agente político, o servidor público e todo aquele que exerce,
                                            ainda que transitoriamente ou sem remuneração, por eleição, nomeação, designação,
                                            contratação ou qualquer outra forma de investidura ou vínculo, mandato, cargo, emprego ou
                                            função nas entidades diretas ou indiretas da administração pública;</p>

                                        <p>II - assinatura eletrônica: os dados em formato eletrônico que se ligam ou estão logicamente
                                            associados a outros dados em formato eletrônico e que são utilizados pelo signatário para
                                            assinar, observados os níveis de assinaturas apropriados para os atos previstos neste
                                            Decreto;</p>

                                        <p>III - documento: unidade de registro de informações, independentemente do formato, do suporte
                                            ou da natureza, com identificação de autoria e a data de criação;</p>

                                        <p>IV - documento digital: informação registrada, codificada em dígitos binários, acessível e
                                            interpretável por meio eletrônico, podendo ser:</p>

                                        <p>a) documento nato-digital: criado originariamente em formato digital no Sistema de Processos
                                            Eletrônicos; ou</p>

                                        <p>b) documento digitalizado: obtido a partir da conversão de um documento não digital, gerando
                                            uma fiel representação em código digital;</p>

                                        <p>V - gestão processual e de documentos: conjunto de procedimentos destinados à formação de
                                            processos administrativos, à comunicação oficial e externa, bem como o tratamento de
                                            documentos, seja por autuação, produção, registro, protocolo, tramitação, consulta,
                                            arquivamento eletrônico, dentre outros;</p>

                                        <p>VI - processo administrativo eletrônico: aquele em que os atos processuais são registrados e
                                            disponibilizados em meio eletrônico;</p>

                                        <p>VII - autenticidade: qualidade da informação que tenha sido produzida, expedida, recebida ou
                                            modificada por determinado indivíduo, equipamento ou sistema;</p>

                                        <p>VIII - preservação digital: conjunto de ações gerenciais e técnicas exigidas para superar as
                                            mudanças tecnológicas e a fragilidade dos suportes, garantindo o acesso e a interpretação de
                                            documentos digitais pelo tempo que for necessário;</p>

                                        <p>IX - integridade: qualidade da informação não modificada, inclusive quanto à origem, trânsito
                                            e destino;</p>

                                        <p>X - sistema eletrônico: um sistema informatizado que permite o gerenciamento,
                                            compartilhamento e processamento de documentos e de informações de forma eletrônica,
                                            acessível de dispositivos conectados à internet;</p>

                                        <p>XI - usuários externos: usuários não vinculados à Administração Pública do Poder Executivo
                                            Estadual do Estado de Mato Grosso do Sul, especialmente:</p>

                                        <p>a) cidadãos, de um modo geral, inclusive na condição de contribuintes;</p>

                                        <p>b) representantes de pessoas físicas e/ou jurídicas;</p>

                                        <p>c) pessoas jurídicas;</p>

                                        <p>d) empresas que figuram em contratos com o Poder Público para o fornecimento de bens ou a
                                            prestação de serviços;</p>

                                        <p>e) órgãos de controle externos, Poderes Legislativo e Judiciário e Ministério Público, no
                                            âmbito de suas relações com o Poder Executivo Estadual;</p>

                                        <p>XII - usuários internos: usuários diretamente vinculados à Administração Pública do Poder
                                            Executivo Estadual do Estado de Mato Grosso do Sul, tais como, servidores, empregados
                                            públicos, estagiários e prestadores de serviço, além de outros aos quais se reconheça acesso
                                            às funcionalidades internas do sistema de processamento em meio eletrônico.</p>

                                        <p>Art. 3º O Sistema de Processos Eletrônicos disporá de todas as normas e procedimentos de
                                            protocolo necessários ao cumprimento da política estadual de gestão processual e de
                                            documentos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapseTwo">
                                        CAPÍTULO 2 DA IMPLANTAÇÃO
                                    </button>
                                </h2>
                                <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <p>Art. 4º A implantação do Sistema de Processos Eletrônicos, objetivando a gestão processual e
                                            de documentos, atenderá aos seguintes objetivos e diretrizes:</p>

                                        <p>I - facilitar o exercício de direitos e o cumprimento de deveres por meio de sistemas
                                            transparentes, seguros e céleres;</p>

                                        <p>II - assegurar o acesso amplo, simples e rápido dos interessados ao procedimento e à
                                            informação;</p>

                                        <p>III - viabilizar ações para a desmaterialização e a desburocratização de processos e de
                                            procedimentos;</p>

                                        <p>IV - simplificar e reduzir a duração dos procedimentos, promovendo a rapidez das decisões,
                                            sem prejuízos às garantias constitucionais e legais;</p>

                                        <p>V - garantir a proteção de dados e o acesso à informação.</p>

                                        Art. 5º Compete à Secretaria de Estado de Administração (SAD) estabelecer as diretrizes para
                                        implementação e o gerenciamento do Sistema de Processos Eletrônicos, assim como a edição de
                                        resoluções complementares necessárias à execução deste Decreto.

                                        <p>Parágrafo único. À Secretaria de Estado de Governo e Gestão Estratégica (SEGOV), por
                                            intermédio da Secretaria-Executiva de Transformação Digital, compete realizar manutenções
                                            preventivas, corretivas e evolutivas no Sistema de Processos Eletrônicos.</p>

                                        Art. 6º Os processos administrativos eletrônicos devem ser protegidos por meio do uso de métodos
                                        de segurança de acesso e de armazenamento, em formato digital, a fim de garantir autenticidade,
                                        preservação digital e integridade dos dados, seguindo as diretrizes da Política de Segurança da
                                        Informação (PSI), aprovada pela Deliberação CETI nº 02, de 24 de fevereiro de 2022, do Comitê
                                        Estratégico de Tecnologia da Informação.


                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapseThree">
                                        CAPÍTULO 3 DO ACESSO
                                    </button>
                                </h2>
                                <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Art. 7º O cadastro no Sistema de Processos Eletrônicos e a sua utilização, por usuários
                                            internos e externos, constituem atos pessoais e intransferíveis.</p>

                                        <p>§ 1º Os usuários internos e externos estão condicionados à aceitação das regras que
                                            disciplinam o uso do sistema, com a consequente responsabilização em caso de uso indevido.
                                        </p>

                                        <p>§ 2º Compete ao órgão da Administração Direta ou à entidade autárquica ou fundacional do
                                            Poder Executivo Estadual interessada gerenciar a identidade e o perfil de acesso dos
                                            usuários no Sistema de Processos Eletrônicos, sob a sua respectiva esfera de atuação.</p>

                                        <p>§ 3º Caberá à SAD e à SEGOV a publicação de normas complementares detalhando a política de
                                            acesso e de gestão de usuários internos e externos, abrangendo os critérios, os parâmetros e
                                            os procedimentos de identificação dentro do sistema.</p>

                                        <p>Art. 8º A classificação da informação quanto ao grau de sigilo e à possibilidade de limitação
                                            do acesso aos servidores autorizados e aos interessados no processo observarão os termos:
                                        </p>

                                        <p>I - da Lei Estadual nº 4.416, de 16 de outubro de 2013;</p>

                                        <p>II - dos Decretos Estaduais nº 15.572, de 28 de dezembro de 2020, e nº 14.471, de 12 de maio
                                            de 2016;</p>

                                        <p>III - das Leis Federais nº 12.527, de 18 de novembro de 2011, e nº 13.709 de 14 de agosto de
                                            2018;</p>

                                        <p>IV - das demais normas vigentes.</p>

                                        <p>Art. 9º A autoria, a autenticidade e a integridade dos documentos e da assinatura, nos
                                            documentos e processos administrativos eletrônicos, poderão ser obtidas por meio de uma das
                                            classificações de assinatura eletrônica de que trata o art. 5º da Lei Federal nº 14.063, de
                                            23 de setembro de 2020, conforme regulamentado pelo Decreto Estadual nº 15.903, de 21 de
                                            março de 2022.</p>

                                        <p>§ 1º A assinatura eletrônica é de uso pessoal e intransferível, sendo de responsabilidade do
                                            usuário titular o sigilo de senhas e a guarda dos respectivos dispositivos físicos de acesso
                                            para utilização do sistema.</p>

                                        <p>§ 2º Para todos os efeitos legais, no âmbito do Sistema de Processos Eletrônicos, a
                                            assinatura cadastrada e assinatura digital têm a mesma validade.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapseThree">
                                        CAPÍTULO 4 DA DIGITALIZAÇÃO
                                    </button>
                                </h2>
                                <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Art. 10. Os processos administrativos físicos em tramitação na Administração Pública deverão
                                            ser digitalizados e inseridos no sistema.</p>

                                        <p>Art. 11. Os documentos físicos recebidos ou produzidos no âmbito dos órgãos da Administração
                                            Direta e das entidades autárquicas e fundacionais do Poder Executivo Estadual a serem
                                            incluídos em processo eletrônico, deverão observar a técnica e os requisitos previstos no
                                            Decreto Estadual nº 15.876, de 21 de fevereiro de 2022, a fim de que produzam os mesmos
                                            efeitos legais dos documentos originais.</p>

                                        <p>§ 1º Na conferência da integridade do documento digitalizado observar-se-á a racionalização
                                            dos atos e dos procedimentos administrativos, nos termos da Lei Federal nº 13.726, de 8 de
                                            outubro de 2018.</p>

                                        <p>§ 2º O documento resultante da digitalização de original, realizado pelo agente
                                            administrativo, será considerado cópia autenticada nos termos da Lei Federal nº 13.726, de
                                            2018.</p>

                                        <p>§ 3º Na digitalização de documentos recebidos ou produzidos no âmbito dos órgãos da
                                            Administração Direta, das autarquias e das fundações do Poder Executivo Estadual, a
                                            Administração Pública poderá:</p>

                                        <p>I - proceder à digitalização imediata do documento apresentado e devolvê-lo imediatamente ao
                                            interessado;</p>

                                        <p>II - receber o documento em meio físico para posterior digitalização, considerando que:</p>

                                        <p>a) os documentos em meio físico recebidos, sejam originais ou cópias autenticadas em
                                            cartório, devem ser devolvidos ao interessado, preferencialmente, ou serem mantidos sob a
                                            guarda do órgão da Administração Direta ou da entidade autárquica ou fundacional do Poder
                                            Executivo Estadual, nos termos da sua tabela de temporalidade e destinação;</p>

                                        <p>b) os documentos em meio físico recebidos, sejam cópias autenticadas administrativamente ou
                                            cópias simples, podem ser descartados após realização de sua digitalização.</p>

                                        <p>§ 4º Na hipótese de ser impossível ou inviável a digitalização do documento recebido,
                                            mediante justificativa, ele deve ser identificado no Sistema de Processos Eletrônicos,
                                            podendo ser mantido nas unidades competentes durante o curso do processo e depois
                                            encaminhado para arquivo.</p>

                                        <p>Art. 12. A Administração Pública Estadual poderá receber documentos físicos do interessado
                                            para juntada aos autos.</p>

                                        <p>§ 1º O teor e a integridade dos documentos digitalizados são de responsabilidade do
                                            interessado, que responderá nos termos das legislações civil, penal e administrativa por
                                            eventuais fraudes.</p>

                                        <p>§ 2º O documento digitalizado enviado pelo interessado terá valor de cópia simples.</p>

                                        <p>§ 3º A apresentação do original do documento digitalizado será necessária quando a lei
                                            expressamente o exigir ou nas hipóteses previstas nos arts. 13 e 14 deste Decreto.</p>

                                        <p>Art. 13. Impugnada a integridade do documento digitalizado, mediante alegação motivada e
                                            fundamentada de adulteração, deverá ser realizada diligência para a verificação do documento
                                            objeto de controvérsia.</p>

                                        <p>Art. 14. A Administração Pública Estadual poderá exigir, a seu critério, até que decaia do
                                            seu direito de rever os atos praticados no processo administrativo eletrônico, que seja
                                            verificada a autenticidade e/ou a integridade dos documentos, mediante:</p>

                                        <p>I - a apresentação de original perante o agente administrativo;</p>

                                        <p>II - a autenticação por cartório competente;</p>

                                        <p>III - a apresentação de declaração de autenticidade por advogado, sob sua responsabilidade
                                            pessoal;</p>

                                        <p>IV - a publicação em Diário Oficial e/ou a disponibilização de documento na internet, no site
                                            oficial do órgão da Administração Direta ou da entidade autárquica ou fundacional do Poder
                                            Executivo Estadual que emitiu a decisão sobre necessidade de verificação de que trata o
                                            caput deste artigo.</p>

                                        <p>Parágrafo único. É ônus do interessado conservar o documento físico original objeto de
                                            digitalização que estiver em seu poder.</p>

                                        <p>Art. 15. Em caso de impossibilidade técnica de produção dos documentos no Sistema de
                                            Processos Eletrônicos, eles poderão ser produzidos em papel, com assinatura manuscrita da
                                            autoridade competente, devendo ser digitalizados posteriormente e inseridos no Sistema de
                                            Processos Eletrônicos, juntamente com o registro da justificativa correspondente.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapseThree">
                                        CAPÍTULO 5 DOS ATOS
                                    </button>
                                </h2>
                                <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Art. 16. Nos processos administrativos, os atos deverão ser constituídos em meio eletrônico e dispensam sua formação física, exceto nas situações em que tal procedimento for inviável ou em caso de indisponibilidade do meio eletrônico, cujo prolongamento cause danos relevantes à celeridade do processo.</p>

                                        <p>§ 1º Os documentos nato-digitais e os assinados eletronicamente na forma do art. 5º deste Decreto são considerados originais para todos os efeitos legais.</p>

                                        <p>§ 2º Após a assinatura e o envio, o documento digital não poderá ser alterado, sendo a retificação realizada por novo documento.</p>

                                        <p>3º Realizada a assinatura ou o envio do documento eletrônico, o sistema irá gerar, automaticamente, o código validador, que será utilizado para verificar a autenticidade do documento.</p>

                                        <p>4º No caso das exceções previstas no caput, os atos processuais poderão ser praticados segundo as regras aplicáveis aos processos em papel, desde que posteriormente os documentos do processo correspondente sejam digitalizados no processo administrativo eletrônico.</p>

                                        <p>§ 5º O acesso à íntegra do processo para vista pessoal do interessado pode ocorrer por intermédio da disponibilização de acesso ao usuário externo ou por acesso à cópia eletrônica, nos termos do regulamento a ser expedido pela SAD.</p>

                                        <p>Art. 17. Excepcionalmente, os documentos digitais produzidos no processo administrativo eletrônico, desde que seja respeitada a forma prevista neste Decreto, poderão ser convertidos em meio físico e terão a validade para todos os fins de direito.</p>

                                        <p>Parágrafo único. Para os fins do disposto no caput deste artigo, os documentos convertidos em meio físico deverão conter o código de verificação de autenticidade e o link para validação de seu conteúdo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapseThree">
                                        CAPÍTULO 6 DISPOSIÇÕES FINAIS
                                    </button>
                                </h2>
                                <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Art. 18. O Sistema de Processos Eletrônicos é de caráter oficial e deverá ser utilizado no âmbito da Administração Pública do Estado de Mato Grosso do Sul para a gestão processual e de documentos.</p>

                                        <p>Parágrafo único. Os órgãos da Administração Direta e as entidades autárquicas e fundacionais do Poder Executivo Estadual deverão encaminhar à SAD, até 31 de junho de 2024, a lista de sistemas informatizados que possuam a mesma finalidade do sistema instituído por este Decreto, para decisão quanto às suas continuidades.</p>

                                        <p>Art. 19. O uso inadequado do Sistema de Processos Eletrônicos sujeitará o usuário à apuração de responsabilidade, na forma da legislação em vigor.</p>

                                        <p>Art. 20. A utilização do Sistema de Comunicação Eletrônica (e-DOCMS) e do Módulo Protocolo no Sistema de Comunicação Eletrônica permanecerão em uso até 31 de dezembro de 2023.</p>

                                        <p>Parágrafo único. O Sistema de Comunicação Eletrônica (e-DOCMS) será mantido ativo para fins de consulta e acervo por tempo indeterminado.</p>

                                        <p>Art. 21. A partir de 1º de janeiro de 2024 não poderão ser autuados processos administrativos em papel e fora do Sistema de Processos Eletrônicos.</p>

                                        <p>Art. 22. Os órgãos da Administração Direta e as entidades autárquicas e fundacionais do Poder Executivo Estadual deverão adotar plano de providências, conforme modelo constante do Anexo deste Decreto, para a realização de digitalização dos processos físicos em tramitação, e posterior encaminhamento à SAD até o dia 31 de junho de 2024.</p>

                                        <p>Art. 23. As empresas públicas, as sociedades de economia mista e os Municípios do Estado de Mato Grosso do Sul poderão utilizar o Sistema de Processos Eletrônicos, caso manifestem interesse, seguindo as mesmas regras estabelecidas neste Decreto.</p>

                                        <P>Art. 24. Revogam-se os Decretos:</P>

                                        <ul>
                                            <li>I - nº 14.259, de 8 de setembro de 2015;</li>
                                            <li>II - nº 15.573, de 28 de dezembro de 2020.</li>
                                        </ul>

                                        <p>Art. 25. Este Decreto entra em vigor na data de sua publicação, com efeitos a partir de 1º de janeiro de 2024.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div>
                            <h2 id="ancora-post-3" class="ems-post">Manual</h2>

                            <p>A OSAS vai atualizar com as mudanças do sistema e encaminhamos posteriormente.</p>
                            <p style="text-align:center"><strong>“em produção”</strong></p>
                        </div>
                        <hr>
                        <div>
                            <h2 id="ancora-post-4" class="ems-post">Cadastre-se</h2>

                            <p>Usuário interno (<a href="link para formulário GSI">link para formulário GSI</a>)</p>
                            <p>Usuário externo (<a href="https://www.ms.gov.br/">Portal de Serviços</a> - acredito que vocês sejam os mais indicados para informar como ficará)</p>
                            <p class="title-botao">Cadastre-se no sistema por aqui</p>
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <button type="button" class="btn btn-primary botao-botao">
                                    Realizar cadastro
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div id="ancora-post-5">
                            <h2 class="ems-post">Acesso</h2>

                            <p>Portal de Serviços</p>
                            <p class="title-botao">Acesse o sistema por aqui</p>
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <a href="https://www.ms.gov.br/"><button type="button" class="btn btn-primary botao-botao">
                                        Acessar sistema
                                    </button></a>
                            </div>

                        </div>
                        <hr>
                        <div id="ancora-post-6">
                            <h2 class="ems-post">Treinamentos</h2>

                            <h3>Imagens</h3>

                            <div class="row post-fotos">
                                <div class=" col-lg-4 col-md-6 col-sm-12 post-fotos-img d-flex justify-content-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto.svg" alt="">
                                </div>
                                <div class=" col-lg-4 col-md-6 col-sm-12 post-fotos-img d-flex justify-content-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto.svg" alt="">
                                </div>
                                <div class=" col-lg-4 col-md-6 col-sm-12 post-fotos-img d-flex justify-content-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto.svg" alt="">
                                </div>
                                <div class=" col-lg-4 col-md-6 col-sm-12 post-fotos-img d-flex justify-content-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto.svg" alt="">
                                </div>
                                <div class=" col-lg-4 col-md-6 col-sm-12 post-fotos-img d-flex justify-content-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto.svg" alt="">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-around">
                                <h3>videos</h3>
                                <div class="col-lg-6 col-sm-12 d-flex justify-content-center" style="margin:20px 0">
                                    <iframe width="424" height="238" src="https://www.youtube.com/embed/qXOPrkEtGvk" title="XVII Prêmio Sul-Mato-Grossense de Inovação na Gestão Pública - AVATAR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-6 col-sm-12 d-flex justify-content-center" style="margin:20px 0">
                                    <iframe width="424" height="238" src="https://www.youtube.com/embed/qXOPrkEtGvk" title="XVII Prêmio Sul-Mato-Grossense de Inovação na Gestão Pública - AVATAR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                            <p>Vídeos constantes na página do curso da escola de governo, talvez um <a href="link para acesso">link para acesso</a></p>
                            <p>Seria interessante anexar também os vídeos que constam no drive <a href="https://drive.google.com/drive/folders/1Jp_la8TwUMJ7Di-xnzujMirUPUaC8dOv?usp=sharing">https://drive.google.com/drive/folders/1Jp_la8TwUMJ7Di-xnzujMirUPUaC8dOv?usp=sharing</a></p>
                        </div>
                        <hr>
                        <div>
                            <h2 id="ancora-post-7" class="ems-post">Contato</h2>

                            <p>Telefone da central de abertura de chamados.</p>

                            <p>Atenciosamente,</p>

                            <p>Cárita Marilhants S. de Castro</p>
                            <p>Superintendente de Patrimônio, Gestão Documental e Frotas</p>
                        </div>

                    </div>

                </div>

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
                        setTimeout(function() {
                            document.getElementById('likeBox').style.display = 'none';

                        }, 3000);
                       
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
                            $('#voteMessage').text(message).fadeIn().delay(5000).fadeOut();

                            document.getElementById('likeBox').style.display = 'none';
                            // Definir um cookie para registrar o voto (com tempo de expiração de 30 segundos)
                            setCookie('vote_' + postId, 'true', 2000);
                         

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
</section>