<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Priva - Insurance Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Priva - Insurance Company Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link href="css/jpreloader.css" rel="stylesheet" type="text/css">
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="css/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">
        <div id="topbar" class="text-light">
                <div class="container">
                    <div class="topbar-left sm-hide">
                        <span class="topbar-widget tb-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </span>
                    </div>

                    <div class="topbar-right">
                        <div class="topbar-right">
                        <span class="topbar-widget"><a href="#">Privacy policy</a></span>
                        <span class="topbar-widget"><a href="#">Customer Support</a></span>
                        <span class="topbar-widget"><a href="#">FAQ</a></span>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        <!-- header begin -->
        <header class="transparent">
            <div class="container">
                <div class="row">
                    @include('partials.nav')
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader5.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="spacer-single"></div>
                                    <h1>Seguro del hogar</h1>
                                    <p>Tu hogar protegido</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section class="no-top relative z1000">
                    <div class="container">
                        <div class="row mt-30">
                            <div class="col-lg-4 col-md-6">
                            <div class="feature-box f-boxed style-3">
                                <i class="bg-color i-boxed fa fa-comments"></i>
                                <div class="text">
                                    <h4>Consulta gratuita</h4>
                                    Consulta el precio para su seguro del hogar sin compromiso.
                                </div>
                                <i class="wm fa fa-comments"></i>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="feature-box f-boxed style-3">
                                <i class="bg-color i-boxed fa fa-address-card"></i>
                                <div class="text">
                                    <h4>Encuentra a un agente</h4>
                                    Si ocurre algo, nosotros estaremos ahí para ayudarte las 24 horas del día.
                                </div>
                                <i class="wm fa fa-address-card"></i>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="feature-box f-boxed style-3">
                                <i class="bg-color i-boxed fa fa-file-text"></i>
                                <div class="text">
                                    <h4>Obten la mejor póliza</h4>
                                    Te garantizamos el mejor precio del mercado con las mejores coberturas.
                                </div>
                                <i class="wm fa fa-file-text"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>

                <section id="section-about-us-2" class="no-padding" data-bgcolor="#F2F6FE">
                <div class="image-container col-md-6 pull-left" data-bgimage="url(images/background/12.jpg) center"></div>

                <div class="container">
                    <div class="row">
                        <div class="inner-padding">
                            <div class="col-md-6 offset-md-7" data-animation="fadeInRight" data-delay="200">
                                <span class="p-title invert">Seguros arboleda</span><br>
                                <h2>
                                    Planifica el futuro <br> y vive tu vida ahora
                                </h2>
                                <div class="small-border sm-left"></div>

                               <p>Siéntete seguro de salir de casa, con seguros arboleda le garantizamos tranqulidad absoluta. Protección contra todo tipo de situaciones
                                   están controladas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </section>

            <section aria-label="section" data-bgcolor="#ffffff">
                    <div class="container">
                        <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h2>FAQ</h2>
                                            <div class="small-border"></div>
                                        </div>

                        <div class="col-md-6">
                            <!-- Accordion -->
                            <div id="accordion-1" class="accordion">

                                <!-- Accordion item 1 -->
                                <div class="card">
                                    <div id="heading-a1" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a1" aria-expanded="false" aria-controls="collapse-a1" class="d-block position-relative text-dark collapsible-link py-2">When is time to update my coverage?</a></h6>
                                    </div>
                                    <div id="collapse-a1" aria-labelledby="heading-a1" data-parent="#accordion-1" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 2 -->
                                <div class="card">
                                    <div id="heading-a2" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a2" aria-expanded="false" aria-controls="collapse-a2" class="d-block position-relative collapsed text-dark collapsible-link py-2">How often should I review my life insurance needs?</a></h6>
                                    </div>
                                    <div id="collapse-a2" aria-labelledby="heading-a2" data-parent="#accordion-1" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 3 -->
                                <div class="card">
                                    <div id="heading-a3" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a3" aria-expanded="false" aria-controls="collapse-a3" class="d-block position-relative collapsed text-dark collapsible-link py-2">What happen to my insurance if I stop paying?</a></h6>
                                    </div>
                                    <div id="collapse-a3" aria-labelledby="heading-a3" data-parent="#accordion-1" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-6">
                            <!-- Accordion -->
                            <div id="accordion-2" class="accordion">

                                <!-- Accordion item 1 -->
                                <div class="card">
                                    <div id="heading-b1" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b1" aria-expanded="false" aria-controls="collapse-b1" class="d-block position-relative text-dark collapsible-link py-2">How much life insurance do i need?</a></h6>
                                    </div>
                                    <div id="collapse-b1" aria-labelledby="heading-b1" data-parent="#accordion-2" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 2 -->
                                <div class="card">
                                    <div id="heading-b2" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b2" aria-expanded="false" aria-controls="collapse-b2" class="d-block position-relative collapsed text-dark collapsible-link py-2">What makes this company different form other?</a></h6>
                                    </div>
                                    <div id="collapse-b2" aria-labelledby="heading-b2" data-parent="#accordion-2" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 3 -->
                                <div class="card">
                                    <div id="heading-b3" class="card-header bg-white shadow-sm border-0">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b3" aria-expanded="false" aria-controls="collapse-b3" class="d-block position-relative collapsed text-dark collapsible-link py-2">Do I need a life insurance policy?</a></h6>
                                    </div>
                                    <div id="collapse-b3" aria-labelledby="heading-b3" data-parent="#accordion-2" class="collapse">
                                        <div class="card-body p-4">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </div>
                </section>

            <section class="bg-color text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2><span class="id-color-secondary">Llámanos </span> para mas información, nuestro servicio telefónico estará encantado de <span class="id-color-secondary">atenderte</span>.</h2>
                            <p class="lead">Estamos las 24 horas los 365 días del año</p>
                        </div>

                        <div class="col-md-6 text-lg-center text-sm-center">
                            <div class="phone-num-big">
                                <i class="fa fa-phone id-color-secondary"></i>
                                <span class="pnb-text">
                                    Llámanos ahora
                                </span>
                                <span class="pnb-num">
                                    +34 959 48 99 04
                                </span>
                            </div>
                            <a href="#" class="btn-custom capsule med">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-fun-facts" class="pt60 pb60" data-bgcolor="#F2F6FE">
                    <div class="container">
                        <div class="row text-center">
                                    <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay="0s">
                                        <div class="de_count">
                                            <h3><span class="timer" data-to="4500" data-speed="3000">0</span></h3>
                                            <h5 class="id-color">Hogares protegidos</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay=".25s">
                                        <div class="de_count">
                                            <h3><span class="timer" data-to="16" data-speed="3000">0</span>k</h3>
                                            <h5 class="id-color">Gente a salvo</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay=".4s">
                                        <div class="de_count">
                                            <h3><span class="timer" data-to="4" data-speed="3000">0</span>m</h3>
                                            <h5 class="id-color">Dinero a salvo</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay=".6s">
                                        <div class="de_count">
                                            <h3><span class="timer" data-to="52" data-speed="3000">0</span>k</h3>
                                            <h5 class="id-color">Contract Signed</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay=".8s">
                                        <div class="de_count">
                                            <h3><span class="timer" data-to="100" data-speed="3000">0</span>+</h3>
                                            <h5 class="id-color">Countries</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay="1s">
                                        <div class="de_count">
                                            <h3><span class="timer" data-to="2" data-speed="3000">2</span>k</h3>
                                            <h5 class="id-color">Staff Member</h5>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </section>
            <section class="text-light text-center">
                <a href="{{ route('homecreate') }}" class="btn btn-lg btn-primary">
                    Cree su seguro de Hogar Ahora
                </a>
            </section>
        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
            <footer class="footer-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="widget">
                                <a href="index.html"><img alt="" class="logo" src="images/logo.png"></a>
                            </div>
                        </div>

                        <div class="col-lg-2">
                                    <div class="widget">
                                        <h5>Company</h5>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="jobs.html">Jobs</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="widget">
                                        <h5>Product</h5>
                                        <ul>
                                           <li><a href="features.html">Features</a></li>
                                           <li><a href="pricing.html">Pricing</a></li>
                                           <li><a href="reviews.html">Reviews</a></li>
                                           <li><a href="download.html">Download</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="widget">
                                        <h5>Resources</h5>
                                        <ul>
                                            <li><a href="news.html">Blog</a></li>
                                            <li><a href="video-tutorial.html">Video Tutorial</a></li>
                                        </ul>
                                    </div>
                                </div>


                        <div class="col-lg-4">
                            <div class="widget">
                                <h5>Newsletter</h5>

                                <p>Signup for our newsletter to get the latest news, updates and special offers in your inbox.</p>
                                <form action="blank.php" class="row" id="form_subscribe" method="post" name="form_subscribe">
                                    <div class="col text-center">
                                        <input class="form-control" id="name_1" name="name_1" placeholder="enter your email" type="text" /> <a href="#" id="btn-submit"><i class="arrow_right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                                <div class="spacer-10"></div>
                                <small>Your email is safe with us. We don't spam.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="subfooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="de-flex">
                                    <div class="de-flex-col">
                                        &copy; Copyright 2021 - Priva by Designesia
                                    </div>

                                    <div class="de-flex-col">
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer close -->







        <!-- Javascript Files
    ================================================== -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jpreLoader.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/easing.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/enquire.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.countdown.js"></script>
        <script src="js/designesia.js"></script>


</body>

</html>
