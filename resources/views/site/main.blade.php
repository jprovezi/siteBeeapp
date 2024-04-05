<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <title>Beeapp Gestão Inteligente</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- SEO Meta Tags -->
    <meta name="description" content="Beeapp Gestão Inteligente">
    <meta name="keywords"
        content="Beeapp, Negócios, App para empresas, Gestão de documentos, Tarefas, Equipe">
    <meta name="author" content="J6 Softwares para Internet">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme switcher (color modes) -->
    <!--<script src="assets/js/theme-switcher.js"></script>-->

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#052042">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#052042">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>

        [data-bs-theme=dark] .navbar:not([data-bs-theme=light]) {
            --si-navbar-stuck-bg: #052042;
            --si-navbar-brand-color: #fff;
            --si-navbar-brand-hover-color: #fff;
            --si-navbar-toggler-color: rgba(255, 255, 255, 0.85);
            --si-navbar-color: rgba(255, 255, 255, 0.85);
            --si-navbar-hover-color: #ffc800;
            --si-navbar-disabled-color: rgba(255, 255, 255, 0.4);
            --si-navbar-active-color: #ffc800;
        }

        .btn-outline-primary {
            --si-btn-color: #ffc800;
            --si-btn-border-color: #ffc800;
            --si-btn-hover-color: #000;
            --si-btn-hover-bg: #ffc800;
            --si-btn-hover-border-color: #ffc800;
            --si-btn-focus-shadow-rgb: 99, 102, 241;
            --si-btn-active-color: #000;
            --si-btn-active-bg: #052042;
            --si-btn-active-border-color: #ffc800;
            --si-btn-active-shadow: unset;
            --si-btn-disabled-color: #ffc800;
            --si-btn-disabled-bg: transparent;
            --si-btn-disabled-border-color: #ffc800;
            --si-gradient: none;
        }        

        body {
            background-color: #052042;
        }

        .bg-primary {
            background-color: #ffc800; !important;
        }        

        .icone-escolher{
            color: #ffc800;
            font-size: 40px; 
        }

        .bx-check-circle{
            color: #ffc800 !important;
        }

        .texto-destaque{
            color: #ffc800 !important;
        }

        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
            background-color: #ffc800 !important;
        }

        .nav-tabs .nav-link:hover:not(.active), .nav-tabs .nav-link.show:not(.active) {
            color:  #ffc800 !important;
        }
        .text-primary {
            color:  #ffc800 !important;
        }

        .nav-link:hover, .nav-link:focus {
            color:  #052042 !important;
        }        

        .nav-link-rodape:hover, .nav-link-rodape:focus {
            color:  #ffc800 !important;
        }        
        
        .text-gradient-primary {
            background: linear-gradient(to right, #ffc800, #ffe37b, #000);
            -webkit-background-clip: text;
            -webkit-text-fill-color: rgba(0,0,0,0);
        }        

        .btn-primary {
            --si-btn-color: #052042;
            --si-btn-bg: #ffc800;
            --si-btn-border-color: #ffc800;
            --si-btn-hover-color: #052042;
            --si-btn-hover-bg: #ffc800;
            --si-btn-hover-border-color: #ffc800;
            --si-btn-focus-shadow-rgb: 84, 87, 205;
            --si-btn-active-color: #052042;
            --si-btn-active-bg: #ffc800;
            --si-btn-active-border-color: #ffc800;
            --si-btn-active-shadow: unset;
            --si-btn-disabled-color: #052042;
            --si-btn-disabled-bg: #ffc800;
            --si-btn-disabled-border-color: #ffc800;
        }

        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        [data-bs-theme="dark"] .page-loading {
            background-color: #0b0f19;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
        }

        [data-bs-theme="dark"] .page-loading-inner>span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        [data-bs-theme="dark"] .page-spinner {
            border-color: rgba(255, 255, 255, .4);
            border-right-color: transparent;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>

    <!-- Page loading scripts -->
    <script>
        (function() {
            window.onload = function() {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function() {
                    preloader.remove();
                }, 1000);
            };
        })();
    </script>
</head>


<!-- Body -->

<body>

    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Levantando Voo...</span>
        </div>
    </div>


    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">
        @include('site.navbar')
        @include('site.banner-parallax')
        @include('site.conheca-o-beeapp')
        @include('site.planos')
        @include('site.depoimentos')
        @include('site.contato')
    </main>


    <!-- Footer -->
    <footer class="footer pt-5 pb-4 pb-lg-5">
        <div class="container pt-lg-4">
            <div class="row pb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                        <img src="assets/img/logo.png" width="200" alt="Beeapp">
                    </div>
                    <p class="fs-sm pb-lg-3 mb-4">
                        A Beeapp, uma inovadora empresa especializada em tecnologia e consultoria na gestão de processos empresariais, está comprometida com a constante aprimoramento de sua plataforma. Nossa equipe, reconhecida por sua justiça e integridade, trabalha lado a lado com nossos clientes para garantir excelência e inovação contínuas.                        
                    </p>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                    <div id="footer-links" class="row">
                        <div class="col-lg-4">
                            <h6 class="mb-2">Navegação</h6>
                            <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                    <li class="nav-item"><a href="{{config('APP_URL')}}"
                                            class="nav-link nav-link-rodape d-inline-block px-0 pt-1 pb-2">Home</a></li>
                                    <li class="nav-item"><a href="{{config('APP_URL')}}#conheca"
                                            class="nav-link nav-link-rodape d-inline-block px-0 pt-1 pb-2">Conheça o Beeapp</a></li>
                                    <li class="nav-item"><a href="{{config('APP_URL')}}#planos"
                                            class="nav-link nav-link-rodape d-inline-block px-0 pt-1 pb-2">Planos</a></li>
                                    <li class="nav-item"><a href="{{config('APP_URL')}}#depoimentos"
                                            class="nav-link nav-link-rodape d-inline-block px-0 pt-1 pb-2">Depoimentos</a></li>
                                    <li class="nav-item"><a href="{{config('APP_URL')}}#contato"
                                            class="nav-link nav-link-rodape d-inline-block px-0 pt-1 pb-2">Fale Conosco</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3">
                            <h6 class="mb-2">Redes Sociais</h6>
                            <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                                <ul class="nav flex-column mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a href="https://www.instagram.com/beeapp_oficial" class="nav-link nav-link-rodape d-inline-block px-0 pt-1 pb-2">
                                            Instagram
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                            <h6 class="mb-2">Contatos</h6>
                            <a href="mailto:ataliba@beeapp.com.br" class="fw-medium nav-link nav-link-rodape">ataliba@beeapp.com.br</a>
                            <a href="https://api.whatsapp.com/send?phone=5547999227879" class="fw-medium nav-link nav-link-rodape">47 9 9922-7879</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
                Desenvolvido por
                <a class="nav-link nav-link-rodape d-inline-block p-0" href="https:www.j6.net.br" target="_blank"
                    rel="noopener">J6 Softwares para Internet</a>
            </p>
        </div>
    </footer>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="assets/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/vendor/rellax/rellax.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.js"></script>
    <script type="module">
        /*$("#bt-form").click(function(){
            
            //campos do form
            let nome = $("#fn").val();
            let email = $("#email").val();
            let mensagem = $("#message").val();

            if( nome != "" && email != "" && mensagem != ""){
                $("#bt-form").text("Enviando Mensagem ...");
                $("#bt-form").attr("disabled", true);
            }

        });*/
    </script>
</body>

</html>
