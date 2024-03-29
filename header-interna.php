<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link id="bootstrap" rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/css/bootstrap.min.css'; ?>" type="text/css" media="all">
    <link id="fancyCss" rel="stylesheet" href="<?= get_template_directory_uri() . '/vendors/fancybox-master/dist/jquery.fancybox.min.css'; ?>" type="text/css" media="all">
    <link id="stylesheet" rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/css/main.css'; ?>" type="text/css" media="all">

</head>

<body <?php body_class(); ?> id="content">
    <header>



   
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_menu.svg" alt="">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="barra-governo container ">
                        <div class=" d-flex justify-content-between row">
                            <nav class="nav justify-content-md-start justify-content-center barra-governo-text col-md-5 col-12">
                                <a href="#site-conteudo" class="nav-link" target="_blank">ir para conteúdo</a>
                                <a href="#menu-do-site" class="nav-link">ir para navegação</a>
                                <a href="#buscarPortal" class="nav-link">ir para busca</a>
                                <a href="#site-mapa" class="nav-link" target="_blank"></i>mapa site</a>
                            </nav>

                            <nav class="nav d-flex justify-content-center col-md-3 col-12 menu_quadradinho">
                                <!-- contraste -->
                                <div class="contrast">
                                    <div class="dropdown color-modes">
                                        <button class="btn btn-link px-0 text-decoration-none  d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                                            <svg class="bi theme-icon-active">
                                                <use href="#circle-half"></use>
                                            </svg>
                                            <span class="" id="bd-theme-text"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme" style="--bs-dropdown-min-width: 8rem;">
                                            <li>
                                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                                                    <svg class="bi opacity-50 theme-icon">
                                                        <use href="#sun-fill"></use>
                                                    </svg>
                                                    Claro
                                                    <svg class="bi ms-auto d-none">
                                                        <use href="#check2"></use>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                                                    <svg class="bi opacity-50 theme-icon">
                                                        <use href="#moon-stars-fill"></use>
                                                    </svg>
                                                    Escuro
                                                    <svg class="bi ms-auto d-none">
                                                        <use href="#check2"></use>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
                                                    <svg class="bi opacity-50 theme-icon">
                                                        <use href="#circle-half"></use>
                                                    </svg>
                                                    Automático
                                                    <svg class="bi ms-auto d-none">
                                                        <use href="#check2"></use>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- maior -->
                                <a href="#" class='nav-link' id="aumentar-fonte">
                                    <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.4502 26H7.47508C3.97744 26 1.14355 23.3395 1.14355 20.0581V6.94197C1.14355 3.66092 3.97744 1.00003 7.47508 1.00003H21.4502C24.9464 1.00003 27.7814 3.66092 27.7814 6.94197V20.0581C27.7814 23.3395 24.9464 26 21.4502 26Z" fill="#FEFEFE" stroke="#0057AF" stroke-width="0.755906" stroke-miterlimit="22.9256" />
                                        <path d="M11.3515 14.2456L9.74838 10.2692L8.11619 14.2456H11.3515ZM8.99745 8.19888H10.6019L15.087 17.9723H12.97L11.9986 15.7369H7.48298L6.54073 17.9723H4.46777L8.99745 8.19888Z" fill="#1F61A6" />
                                        <path d="M19.1078 13.0882V10.0507H20.6086V13.0882H23.8453V14.4953H20.6086V17.5327H19.1078V14.4953H15.8726V13.0882H19.1078Z" fill="#1F61A6" />
                                    </svg>
                                </a>
                                <!-- menor -->
                                <a href="#" class='nav-link' id="diminuir-fonte">
                                    <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5846 26H7.60943C4.11322 26 1.27783 23.3394 1.27783 20.0581V6.94194C1.27783 3.66089 4.11322 1 7.60943 1H21.5846C25.0818 1 27.9161 3.66089 27.9161 6.94194V20.0581C27.9161 23.3394 25.0818 26 21.5846 26Z" fill="#FEFEFE" stroke="#0057AF" stroke-width="0.755906" stroke-miterlimit="22.9256" />
                                        <path d="M20.2463 13L21.7523 13L25 13V14.5045H21.7523H20.2463H17V13H20.2463Z" fill="#1F61A6" />
                                        <path d="M13.122 14.2532L11.4618 10.1415L9.77258 14.2532H13.122ZM10.6869 8H12.3455L16.9865 18.1096H14.7947L13.7903 15.797H9.11897L8.1451 18.1096H6L10.6869 8Z" fill="#1F61A6" />
                                    </svg>

                                </a>
                                <!-- ligras -->
                                <a target='_blank' href="#" class='nav-link'>
                                    <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.7302 26H6.75542C3.25778 26 0.423828 23.3395 0.423828 20.0581V6.94197C0.423828 3.66092 3.25778 1.00003 6.75542 1.00003H20.7302C24.2278 1.00003 27.0618 3.66092 27.0618 6.94197V20.0581C27.0618 23.3395 24.2278 26 20.7302 26Z" fill="#FEFEFE" stroke="#0057AF" stroke-width="0.755906" stroke-miterlimit="22.9256" />
                                        <path d="M15.6737 16.6517C15.589 16.7673 15.4927 16.8764 15.4181 16.9977C14.8962 17.8594 14.3696 18.7174 13.8653 19.5871C13.7148 19.8438 13.5476 20.0055 13.2285 19.9021C12.9905 19.8236 12.9234 19.5205 13.0742 19.2105C13.5135 18.2976 13.9643 17.3888 14.3986 16.4735C14.4693 16.325 14.4884 16.1552 14.5315 15.9948C14.4909 15.9733 14.4478 15.9521 14.4073 15.9292C14.2845 16.0184 14.1477 16.0945 14.039 16.1966C13.3347 16.8538 12.6344 17.5148 11.9381 18.1791C11.7557 18.3536 11.5748 18.5152 11.3138 18.3084C11.0428 18.0935 11.1275 17.8772 11.3163 17.6465C12.0141 16.7932 12.7245 15.946 13.3828 15.0654C13.6894 14.6555 13.9274 14.1906 14.1212 13.7223C14.3 13.2875 14.1097 13.0843 13.6122 13.0857C13.1488 13.0867 12.6829 13.1332 12.223 13.0938C11.9711 13.0749 11.7065 12.9536 11.4936 12.8159C11.2833 12.6804 11.3493 12.4487 11.5988 12.4318C13.0235 12.3429 14.1657 11.5428 15.4507 11.1093C15.9131 10.9523 16.4156 10.8715 16.906 10.8358C17.1274 10.8193 17.3859 10.9678 17.5897 11.0948C18.0467 11.3801 18.4785 11.7045 18.9268 12.003C19.3522 12.288 19.4588 12.7219 19.3547 13.1285C19.1623 13.8854 18.8497 14.615 18.6117 15.3625C18.4911 15.7405 18.3683 16.1303 18.3457 16.5187C18.3012 17.2554 18.3507 17.9958 18.3166 18.7329C18.3037 19.0108 18.4279 19.4696 17.929 19.4635C17.4832 19.4575 17.5833 19.0239 17.5427 18.747C17.454 18.1491 17.401 17.5468 17.3073 16.9502C17.2908 16.8336 17.1504 16.7349 17.0667 16.6268C16.9946 16.7316 16.8819 16.8276 16.8589 16.9418C16.6705 17.8402 16.5007 18.7433 16.3259 19.6441C16.3159 19.6916 16.3219 19.7441 16.3058 19.7879C16.2171 20.0187 16.2006 20.3309 15.8144 20.2777C15.4282 20.2242 15.4788 19.9459 15.5093 19.6859C15.6116 18.8336 15.7142 17.9817 15.8119 17.1284C15.8269 16.9798 15.8144 16.8289 15.8144 16.6793C15.7663 16.6696 15.7207 16.6615 15.6737 16.6517Z" fill="#1F61A6" />
                                        <path d="M9.42901 11.4558C9.38594 11.2884 9.3709 11.1112 9.29875 10.9555C8.94554 10.1784 8.57582 9.40833 8.21615 8.63354C8.14759 8.4897 8.04384 8.33878 8.04887 8.19494C8.05533 8.05582 8.14758 7.85167 8.26424 7.80283C8.37552 7.75533 8.63758 7.82305 8.70865 7.92175C8.92762 8.21752 9.0873 8.55168 9.26714 8.87237C9.55717 9.39653 9.84328 9.92407 10.1394 10.4469C10.2065 10.5634 10.3117 10.6598 10.3993 10.7656C10.4334 10.7534 10.4675 10.743 10.5016 10.7309C10.5016 10.5931 10.512 10.454 10.5005 10.3175C10.4284 9.35241 10.3498 8.38864 10.2737 7.42488C10.2701 7.37637 10.2687 7.32852 10.2611 7.28001C10.222 7.00884 10.3397 6.80942 10.6218 6.76765C10.9108 6.72621 11.0803 6.90678 11.1287 7.15976C11.2666 7.87189 11.3918 8.58705 11.5175 9.30019C11.5781 9.64615 11.6187 9.99413 11.6883 10.3377C11.7109 10.4577 11.7934 10.5671 11.8491 10.6823C11.8857 10.6857 11.9223 10.6908 11.9593 10.6941C12.0135 10.5776 12.0911 10.4637 12.1187 10.3411C12.3265 9.39653 12.5304 8.45063 12.7203 7.50202C12.7684 7.25746 12.8506 7.08262 13.156 7.10991C13.4687 7.13854 13.5584 7.32381 13.5448 7.59128C13.4787 8.77502 13.4217 9.95842 13.3445 11.1411C13.3369 11.2409 13.2242 11.3904 13.1255 11.4191C12.6406 11.5629 12.1478 11.6997 11.6463 11.79C11.1614 11.8765 10.8283 12.0739 10.7461 12.4148C10.6474 12.8154 10.8031 13.2065 11.2439 13.4204C11.5666 13.576 11.9378 13.6676 12.2985 13.7185C12.6492 13.7684 13.0153 13.7293 13.4432 13.7293C13.3079 13.9812 13.2167 14.2069 13.0735 14.3983C12.6467 14.9736 12.1998 15.5355 11.7579 16.1025C11.7213 16.1513 11.6818 16.2069 11.6273 16.2332C11.04 16.5219 9.8824 16.2534 9.59237 15.6629C9.27469 15.0127 9.03422 14.3104 8.89746 13.607C8.76572 12.9282 8.47928 12.3495 8.08049 11.7923C7.6702 11.2217 7.28143 10.6372 6.88515 10.0585C6.771 9.89206 6.71679 9.71958 6.91817 9.57843C7.12959 9.42988 7.30688 9.51275 7.45477 9.67917C7.91962 10.1973 8.37553 10.7228 8.85294 11.2314C8.97319 11.3608 9.15695 11.4393 9.3113 11.5413C9.35079 11.513 9.38845 11.4844 9.42901 11.4558Z" fill="#1F61A6" />
                                        <path d="M7.97754 15.9016C8.01308 15.8531 8.06008 15.7935 8.10675 15.7328C8.16885 15.7807 8.269 15.816 8.2891 15.8757C8.47037 16.382 8.745 16.8169 9.23892 17.1126C9.28953 17.1423 9.28849 17.2494 9.31254 17.3208C9.23141 17.3289 9.13019 17.3693 9.07312 17.3383C8.49448 17.0223 8.18286 16.5231 7.97754 15.9016Z" fill="#1F61A6" />
                                        <path d="M20.5054 12.0406C20.5762 12.208 20.7118 12.3758 20.7068 12.5409C20.6914 12.9902 20.6257 13.4406 20.5586 13.8863C20.551 13.9422 20.4143 13.9799 20.3382 14.0264C20.3141 13.955 20.2509 13.8718 20.2725 13.8162C20.4738 13.3015 20.518 12.7881 20.3156 12.264C20.2951 12.2141 20.3482 12.1393 20.3673 12.075C20.4128 12.0632 20.4599 12.0524 20.5054 12.0406Z" fill="#1F61A6" />
                                        <path d="M8.66148 15.4053C8.7846 15.5464 8.8528 15.6 8.88582 15.6677C9.10478 16.1349 9.41885 16.5176 9.90379 16.7696C9.9684 16.8039 9.98887 16.9131 10.0291 16.9882C9.9379 16.9963 9.82915 17.0404 9.75951 17.0084C9.18985 16.7419 8.82625 16.299 8.59831 15.7533C8.57031 15.6832 8.62738 15.5811 8.66148 15.4053Z" fill="#1F61A6" />
                                        <path d="M20.1046 12.9909C20.0385 13.3153 20.0059 13.541 19.9423 13.7597C19.9287 13.8132 19.8159 13.8405 19.7474 13.8809C19.7183 13.8122 19.6497 13.7337 19.6663 13.6741C19.8095 13.1573 19.802 12.6544 19.5575 12.1602C19.5295 12.1067 19.5906 12.014 19.6107 11.9402C19.6893 11.9854 19.817 12.0154 19.8375 12.077C19.9487 12.4038 20.0335 12.7389 20.1046 12.9909Z" fill="#1F61A6" />
                                    </svg>
                                </a>

                            </nav>

                            <nav class="nav justify-content-md-end justify-content-center barra-governo-text barra-governo-text-3 col-md-4 col-12">
                                <a href="http://www.faleconosco.ms.gov.br/faq/#/home" class="nav-link" target="_blank">ouvidoria</a>
                                <a href="http://www.transparencia.ms.gov.br/" class="nav-link" target="_blank">transparência</a>
                            </nav>
                        </div>
                    </div>
                    </ul>
                </div>
            </div>
        </nav>




        <!-- Img Banner -->
        <section class="banner" style="background:#0057AF;" alt="banner principal">
            <!-- // Img Banner -->

            <div class="topo topo-home">
                <div class="container d-flex topo-home-logo d-flex justify-content-between">
                    <div class="container row">

                        <div class="col-md-6 col-12">
                            <a href="#" class="logo-topo">
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_governo.svg" alt="Governo de MS" class="">
                                </div>
                            </a>
                        </div>

                        <div class="sub-header col-md-6 col-12 d-flex justify-content-md-end justify-content-center">

                            <nav class="nav nav-redes-sociais">
                                <!-- instagran -->
                                <a href="https://www.instagram.com/governoms/" class="nav-link" target="_blank">
                                    <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7573 23.6392C13.0245 23.6392 11.509 23.6918 10.9743 23.632C10.3119 23.5573 9.5551 23.6277 8.83615 23.5889C8.6131 23.5769 8.62411 23.5434 8.38142 23.5363C7.29774 23.5047 6.13749 23.3965 5.19309 22.8187C2.9161 21.4258 2.85045 19.0694 2.85045 16.385C2.85045 14.2224 2.71171 8.04389 3.09895 6.18333C3.52352 4.14089 4.90637 2.9744 6.9962 2.57281C8.53749 2.27699 15.143 2.38419 16.2937 2.38419C19.8105 2.38419 23.0016 2.42346 23.8402 6.30253C24.1916 7.9295 23.958 9.76469 24.0624 10.6962L24.1073 14.9156C24.0997 15.1755 24.0538 15.2276 24.0533 15.5211C24.0528 15.961 24.0552 16.4018 24.0552 16.8417C24.0552 17.0523 24.0666 17.295 24.0552 17.5013C24.0427 17.7378 24.0011 17.8139 24.003 18.1087C24.0183 20.5078 23.0854 22.2668 21.1277 23.0964C19.7783 23.6679 17.824 23.5683 16.3425 23.5865L15.076 23.6392C14.6365 23.6392 14.1967 23.6392 13.7573 23.6392ZM0.466309 9.53684V16.4865C0.466309 19.9908 0.875557 22.04 2.66049 23.8297C4.4301 25.6036 6.62809 25.9726 10.1046 25.9726H16.7503C19.4462 25.9726 21.9189 25.8544 23.8915 24.1351C25.8348 22.4416 26.3886 20.1741 26.3886 17.6535V8.11665C26.3886 5.57161 25.6994 3.35062 23.868 1.81029C21.8595 0.12205 19.5424 0 16.8011 0H10.1046C7.25083 0 4.63066 0.168 2.66049 2.14344C0.87077 3.93746 0.466309 6.02442 0.466309 9.53684Z" fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6041 17.2973C12.3395 17.2973 11.2505 16.8933 10.3946 16.0427C7.74236 13.4081 9.50956 8.67322 13.5026 8.67322C17.4496 8.67322 19.4452 13.8624 15.9816 16.4787C15.3938 16.9225 14.4202 17.2973 13.6041 17.2973ZM6.75586 12.9855C6.75586 18.8496 14.1186 22.2677 18.5625 17.2843C19.5467 16.1801 20.1478 14.4966 20.1478 12.9855C20.1478 7.8456 14.3608 4.33368 9.63643 7.49619C8.02143 8.57701 6.75586 10.6668 6.75586 12.9855Z" fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.832 5.88408V6.13729C18.832 6.91273 19.5275 7.60869 20.303 7.60869C20.8606 7.60869 21.121 7.5455 21.5346 7.11518C22.904 5.69021 20.7951 3.5372 19.351 4.88081C19.1241 5.09238 18.832 5.47099 18.832 5.88408Z" fill="white" />
                                    </svg>
                                </a>
                                <!-- facedook -->
                                <a href="https://www.facebook.com/GovernoMS" class="nav-link" target="_blank">
                                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95662 6.79746V9.4861H0V14.153H3.95662V25.9726H8.77577V14.153H12.7324L13.3412 9.4861H8.77577V6.4423C8.77577 4.50085 9.89101 4.31176 11.5658 4.31176H13.4935V0.152199C13.012 0.152199 12.5716 0.0526303 12.1259 0.048801C11.3998 0.0425784 10.7521 0.00717992 10.1466 0H9.7546C8.36839 0.0186678 7.17178 0.263721 5.69607 1.48574C5.20257 1.89404 4.73442 2.73651 4.46445 3.34871C4.04371 4.30364 3.95662 5.60081 3.95662 6.79746Z" fill="white" />
                                    </svg>
                                </a>
                                <!-- twiter -->
                                <a href="https://twitter.com/GovernoMS" class="nav-link" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="27px" height="26px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 30 30" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                        <defs>
                                            <style type="text/css">
                                                <![CDATA[
                                                .fil0 {
                                                    fill: white
                                                }
                                                ]]>
                                            </style>
                                        </defs>
                                        <g id="Camada_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer" />
                                            <path class="fil0" d="M17.85 12.67l5.3 7.71c0.28,0.42 0.51,0.71 0.78,1.12 0.26,0.4 0.47,0.71 0.74,1.07l5.33 7.77 -8.97 0c-0.09,-0.36 -0.73,-1.16 -0.98,-1.51l-6.14 -8.95c-0.2,-0.3 -0.34,-0.47 -0.53,-0.76 -0.2,-0.3 -0.27,-0.58 -0.62,-0.67 -0.12,0.44 -1.16,1.4 -1.53,1.83 -0.14,0.18 -0.14,0.21 -0.3,0.39l-1.91 2.22c-0.14,0.18 -0.19,0.21 -0.33,0.37l-5.74 6.67c-0.21,0.22 -0.2,0.12 -0.28,0.41l-2.67 0 2.52 -2.91c0.17,-0.19 0.2,-0.27 0.39,-0.47 0.77,-0.81 1.42,-1.73 2.2,-2.54 0.18,-0.19 0.19,-0.24 0.35,-0.43l6.26 -7.27 -2.16 -3.17c-0.27,-0.36 -0.46,-0.7 -0.73,-1.08l-5.11 -7.4c-0.25,-0.38 -0.45,-0.71 -0.73,-1.08 -0.43,-0.58 -2.79,-3.89 -2.9,-4.33l8.88 0c0.11,0.41 4.23,6.21 4.77,7.03 0.79,1.19 2.3,3.13 2.9,4.26 0.29,-0.2 0.47,-0.49 0.71,-0.76l1.34 -1.58c0.13,-0.15 0.21,-0.21 0.34,-0.36l0.66 -0.8c0.86,-1.1 1.85,-2.14 2.75,-3.2l2.41 -2.76c0.15,-0.17 0.15,-0.22 0.3,-0.39 0.16,-0.18 0.22,-0.22 0.37,-0.41 0.13,-0.17 0.16,-0.2 0.32,-0.37 0.63,-0.68 0.42,-0.67 1.57,-0.66 0.52,0 1.04,0 1.56,0 -0.41,0.6 -0.95,1.07 -1.38,1.63 -0.87,1.13 -1.87,2.17 -2.79,3.25 -0.13,0.16 -0.21,0.21 -0.33,0.36l-0.7 0.85c-0.15,0.17 -0.22,0.22 -0.37,0.41l-5.55 6.51zm4.39 15.78l4.14 0c-0.08,-0.3 -0.94,-1.41 -1.14,-1.71l-4.69 -6.69c-0.42,-0.58 -0.75,-1.11 -1.17,-1.67l-11.71 -16.83 -4.05 0c0.03,0.37 1.36,2.16 1.66,2.56l2.95 4.22c2.72,3.75 5.47,7.95 8.2,11.71l5.24 7.51c0.19,0.29 0.49,0.59 0.57,0.9z" />
                                        </g>
                                    </svg>
                                </a>

                                <!-- tiktok -->
                                <a href="https://www.youtube.com/governomatogrossodosul" class="nav-link" target="_blank">
                                    <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3602 18.0589C12.3602 20.9457 8.80524 22.9336 6.22094 20.9515C6.13526 20.8854 5.87728 20.6777 5.80931 20.6025C4.6969 19.3757 4.42168 17.9484 5.04729 16.3769C5.55898 15.0903 7.02562 14.1023 8.50468 14.1023C9.00488 14.1023 9.37489 14.2124 9.77314 14.3053V9.99348C9.31984 9.8877 8.8431 9.892 8.35295 9.892C5.9807 9.892 3.95541 11.0666 2.75972 12.2633C-2.34521 17.3749 1.34823 25.9726 8.55591 25.9726C13.0065 25.9726 16.672 22.3597 16.672 17.9072V11.0078C16.672 10.1184 16.6214 9.40904 16.6214 8.52256C17.8329 9.33341 17.952 9.48228 19.477 10.0801C20.4534 10.4631 21.8789 10.7546 23.2163 10.7546V6.49304C21.6329 6.49304 20.0542 5.92439 18.9418 4.93356L18.1563 4.14664C17.5398 3.45832 17.0191 2.36745 16.8037 1.44124L16.6214 0H12.3602V18.0589Z" fill="white" />
                                    </svg>
                                </a>
                                <!-- you tube -->
                                <a href="https://www.tiktok.com/@governodems" class="nav-link" target="_blank">
                                    <svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.7627 13.9305V6.03594C10.238 6.20586 15.5699 9.36598 16.5655 9.95042C15.5938 10.5306 10.1887 13.7017 9.7627 13.9305ZM0.311099 14.7806C0.455655 16.465 1.4154 17.6885 2.32821 18.2839C3.98151 19.3623 4.76467 19.2264 6.97992 19.2264C10.658 19.2264 14.3354 19.2264 18.0134 19.2264C19.6983 19.2264 21.7585 19.4298 23.205 18.8186C26.7065 17.339 26.144 13.7089 26.144 10.655C26.144 8.97779 26.2599 6.83722 26.1206 5.21504C25.9755 3.52249 25.0278 2.28226 24.1068 1.68059C22.455 0.601204 21.6666 0.740511 19.4528 0.740511C15.7748 0.740511 12.0966 0.740511 8.41908 0.740511C6.75143 0.740511 4.64248 0.557663 3.22804 1.14833C1.91555 1.69688 1.02241 2.72264 0.557629 4.04183C0.141193 5.22556 0.168458 13.1211 0.311099 14.7806Z" fill="white" />
                                    </svg>
                                </a>
                            </nav>


                        </div>
                    </div>


                </div>
            </div>
    </header>
    <!-- desenhos para o modo dark -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display:none;max-width:35px">
        <symbol id="bootstrap" viewBox="0 0 512 408" fill="currentcolor">
            <path d="M106.342 0c-29.214 0-50.827 25.58-49.86 53.32.927 26.647-.278 61.165-8.966 89.31C38.802 170.862 24.07 188.707 0 191v26c24.069 2.293 38.802 20.138 47.516 48.37 8.688 28.145 9.893 62.663 8.965 89.311C55.515 382.42 77.128 408 106.342 408h299.353c29.214 0 50.827-25.58 49.861-53.319-.928-26.648.277-61.166 8.964-89.311 8.715-28.232 23.411-46.077 47.48-48.37v-26c-24.069-2.293-38.765-20.138-47.48-48.37-8.687-28.145-9.892-62.663-8.964-89.31C456.522 25.58 434.909 0 405.695 0H106.342zm236.559 251.102c0 38.197-28.501 61.355-75.798 61.355h-87.202a2 2 0 01-2-2v-213a2 2 0 012-2h86.74c39.439 0 65.322 21.354 65.322 54.138 0 23.008-17.409 43.61-39.594 47.219v1.203c30.196 3.309 50.532 24.212 50.532 53.085zm-84.58-128.125h-45.91v64.814h38.669c29.888 0 46.373-12.03 46.373-33.535 0-20.151-14.174-31.279-39.132-31.279zm-45.91 90.53v71.431h47.605c31.12 0 47.605-12.482 47.605-35.941 0-23.46-16.947-35.49-49.608-35.49h-45.602z" />
        </symbol>
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" fill="#0057AF" stroke="#0057AF" stroke-width="0.755906" stroke-miterlimit="22.9256" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" fill="#0057AF" stroke="#0057AF" stroke-width="0.755906" stroke-miterlimit="22.9256" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" fill="#0057AF" stroke="#0057AF" stroke-width="0.755906" stroke-miterlimit="22.9256" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" fill="#0057AF" stroke="#0057AF" stroke-width="0.755906" stroke-miterlimit="22.9256" />
        </symbol>
    </svg>
    <!-- fim desenhos para o modo dark -->


    <?php wp_body_open(); ?>