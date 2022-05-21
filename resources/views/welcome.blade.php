<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>TajiApp</title>
    
    <meta property="og:title" content="TajiApp" />
    <meta name="description" content="Travaillez sur les réseaux sociaux en exécutant les tâches et gagnez de l'argent sans quitter votre maison.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ asset('assets/images/favicon.png') }}">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    
        
    <!-- CSS
    ============================================ -->

    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->

    <link rel="stylesheet" href="{{ asset("assets/css/plugins/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/fontawesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/default.css") }}">


    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/swiper-bundle.min.css") }}">

    <!--====== Main Style CSS ======-->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    
</head>

<body>
    
    <!--====== Header Start ======-->

    <header class="header-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="active"><a  class="page-scroll" href="#home">Accueil</a></li>
                        <li><a  class="page-scroll" href="#features">Fonctionnalités</a></li>
                    </ul>
                    <div class="navbar-btn">
                        <a href="#" class="main-btn">Télécharger</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!--====== Header Ends ======-->
    
    <!--====== Banner Start ======-->

    <section id="home" class="banner-area">
        <div class="banner-shape-1">
            <img src="assets/images/shape/shape-2.png" alt="Shape">
        </div>
        <div class="banner-shape-2">
            <img src="assets/images/shape/shape-1.png" alt="Shape">
        </div>
        <div class="banner-shape-3">
            <img src="assets/images/shape/dots.png" alt="Shape">
        </div>

        <div class="banner-content-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h2 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Travaillez et gagnez de l'argent sans vous deplacer</h2>
                            <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.6s">TajiApp est une 
                                application à télécharger gratuitement, conçue pour les besoins 
                                des particuliers et des propriétaires de petites entreprises. 
                                Créez un système rapide de présentation et de partage de vos produits et 
                                services mais aussi de vos publication fun et individuelles. TajiApp 
                                permet également à ses utilisateurs de travailler et gagner de l'argent 
                                sans se déplacer.</p>

                            <ul class="download-btn">
                                <li>
                                    <a class="google-play wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.9s" href="#">
                                        <i class="fas fa-play"></i>
                                        <span class="text-1">Télécharger sur le</span>
                                        <span class="text-2">Play Store</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="image">
                                <img src="assets/images/banner-app.png" alt="App">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </section>

    <!--====== Banner Ends ======-->
    
    <!--====== Features Start ======-->

    <section id="features" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Changez votre vie aujourd'hui</p>
                        <h2 class="title">Bienvenue sur TajiAPp</h2>
                    </div>
                </div>
            </div>
            <div class="features-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features features-1 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                            <span class="features-number">01</span>
                            <div class="features-icon">
                                <i class="flaticon-smartphone-2"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">Facile à utiliser</a></h4>
                                <p>L'utilisateur détient deux comptes faciles à utiliser. Son compte Employeur 
                                    lui permet de poster et de créer les tâches qui lui permettrons une meilleure 
                                    diffusion de ses publications sur les réseaux sociaux. Son compte Employé lui 
                                    permet d'exécuter les tâches des autres employeurs et gagner de l'argent sans 
                                    se déplacer..</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features features-2 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                            <span class="features-number">02</span>
                            <div class="features-icon">
                                <i class="flaticon-smartphone"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">Retrait d'Argent Facile</a></h4>
                                <p>L'argent gagné est bien réel et vous n'avez pas besoin de plusieurs procédures pour le retirer.
                                    Retirez votre argent en toute sécurité et fiabilité grâce aux moyens de paiement que vous utilisez
                                    au quotidien.
                                </p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features features-3 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                            <span class="features-number">03</span>
                            <div class="features-icon">
                                <i class="flaticon-smartphone-1"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">Aucune Expérience requise</a></h4>
                                <p>Plus besoin de nombreuses années d'expérience pour générer de l'argent.
                                    Avec TajiApp et grâce à son interface simple et ergonomique, téléchargez simplement
                                    votre application et commencez à travailler
                                </p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Features Ends ======-->
    
    <!--====== Powerful Tools Start ======-->

    <section id="powerful" class="powerful-tools-area">
        <div class="powerful-shape shape-1"></div>
        <div class="powerful-shape shape-2">
            <img src="assets/images/shape/shape-5.png" alt="">
        </div>

        <div class="container">
            <div class="powerful-tools-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="powerful-image mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="image">
                                <img src="assets/images/powerful-app.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="powerful-tools-content mt-50">
                            <div class="section-title">
                                <p class="sub-title">Une solution innovante</p>
                                <h2 class="title">Avec TajiApp</h2>
                            </div>
                            <div class="powerful-content-wrapper">
                                <p>Travaillez sur les réseaux sociaux en exécutant les tâches et gagnez de l'argent sans quitter votre maison.
                                    Faites aussi connaître votre business et vos pages sur les médias sociaux en devenant employeur sur TajiApp
                                </p>
                                <ul class="content-list">
                                    <li><i class="fas fa-check"></i> Facile à utiliser </li>
                                    <li><i class="fas fa-check"></i> Travaillez à partir de chez vous</li>
                                    <li><i class="fas fa-check"></i> Faites la promotion de votre business.</li>
                                </ul>
                                <a href="#" class="main-btn main-btn-2">Télécharger</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Powerful Tools Ends ======-->
   
    <section class="container-fluid">
        <div class="row mb-30 pl-30 p120 container-fluid">
            <div class="col-lg-6">
                <div class="discover-content-wrapper">
                    <div class="section-title">
                        <p class="sub-title">Vous désirez entrer en </p>
                        <h2 class="title">Contact avec nous</h2>
                    </div>
                    <div class="discover-content">
                        <p>Ecrivez à notre équipe pour bénéficier d'une assistance en cas de besoin</p>
                        <a href="#" class="main-btn main-btn-2">Télécharger</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="comment-form">
                    <h3 class="comment-title">Laissez-nous un message</h3>
        
                    <div class="comment-form-wrapper">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="Votre nom" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="Votre adresse mail" name="email">
                                    </div>
                                </div>                                
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <textarea placeholder="Votre Message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-left">
                                    <div class="input-box">
                                        <button type="submit" class="main-btn main-btn-2">Submit Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== Footer Start ======-->

    <footer id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg);">
        <div class="footer-shape shape-1"></div>

        <div class="container">
            {{-- <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="footer-widget-wrapper">
                            <div class="footer-about mt-45">
                                <h4 class="footer-title">About</h4>
                                <p>Lorem Ipsum is simply dummy text the printing and setting industry. Lorm Ipsum has been the text ever.</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>

                            <div class="footer-link mt-45">
                                <h4 class="footer-title">Explore</h4>

                                <ul class="link">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>

                            <div class="footer-contact mt-45">
                                <h4 class="footer-title">Contact</h4>

                                <ul class="contact-info">
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-phone-square"></i>
                                            <div class="contact-text">
                                                <p><a href="tell:6668880000">666 888 0000</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-envelope"></i>
                                            <div class="contact-text">
                                                <p><a href="mailto:needhelp@ruxin.com">needhelp@ruxin.com</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="contact-text">
                                                <p>855 road, broklyn street new york 600</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-newsletter mt-45">
                            <h4 class="footer-title">Newsletter</h4>

                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="text" placeholder="Email address">
                                    <button><i class="fas fa-envelope"></i></button>
                                </form>
                            </div>
                            <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="footer-copyright text-center">
                <p>&copy; copyright 2022 TajiApp</p>
            </div>
        </div>
    </footer>

    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{ asset("assets/js/vendor/jquery-3.5.1.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/modernizr-3.7.1.min.js") }}"></script>
    
    <!--====== All Plugins js ======-->
    <script src="{{ asset("assets/js/plugins/popper.min.js") }}"></script>
    <script src="{{ asset("assets/js/plugins/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/plugins/swiper-bundle.min.js") }}"></script>
    <script src="{{ asset("assets/js/plugins/jquery.easing.min.js") }}"></script>
    <script src="{{ asset("assets/js/plugins/scrolling-nav.js") }}"></script>
    <script src="{{ asset("assets/js/plugins/wow.min.js") }}"></script>
    
    
    <!--====== Main Activation  js ======-->
    <script src="{{ asset("assets/js/main.js") }}"></script>

    
</body>

</html>