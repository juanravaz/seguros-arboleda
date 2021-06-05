<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <title>Priva - Insurance Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Priva - Insurance Company Website Template" name="description" />
        <meta content="" name="keywords" />
        <meta content="" name="author" />

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- CSS Files
    ================================================== -->
        <link href="css/jpreloader.css" rel="stylesheet" type="text/css">
        <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link id="bootstrap-grid" href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
        <link id="bootstrap-reboot" href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- color scheme -->
        <link id="colors" href="css/colors/scheme-03.css" rel="stylesheet" type="text/css" />
        <link href="css/coloring.css" rel="stylesheet" type="text/css" />


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
                        <span class="topbar-widget"><a href="#">Contrato de privacidad</a></span>
                        <span class="topbar-widget"><a href="#">Soporte al cliente</a></span>
                        <span class="topbar-widget"><a href="#">Preguntas y respuestas</a></span>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- header begin -->
            <header class="transparent header-light scroll-light">
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

                <section aria-label="section" class="no-top no-bottom vh-100" data-bgimage="url(images/background/5.jpg) top left">
                    <div class="v-center">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">

                                </div>

                                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">
                                    <div class="padding30 rounded img-shadow" data-bgcolor="rgba(240, 246, 234, .7)">
                                        <h2>Ninguna preocupación mas.
                                            @if (Route::has('login'))
                                                <span class="id-color">Contrata ahora</span>.</h2>
                                            @else
                                                <span class="id-color">Regístrate ahora</span>.</h2>
                                            @endif


                                        <a href='{{ route('homeinsurance') }}' class="icon-box rounded">
                                            <i class="icofont-home"></i>
                                            <span>Hogar</span>
                                        </a>

                                        <a href='{{ route('carinsurance') }}' class="icon-box rounded">
                                            <i class="icofont-car"></i>
                                            <span>Coche</span>
                                        </a>

                                         <a href='{{ route('lifeinsurance') }}' class="icon-box rounded">
                                            <i class="icofont-heart-beat"></i>
                                            <span>Salud</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-highlight" class="bg-color text-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="p-title invert text-white">Bienvenido/a</span><br>
                                <h2>
                                    Dedícate a vivir la vida<br>nosotros nos ocupamos del resto
                                </h2>
                                <div class="small-border white sm-left"></div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="spacer-double"></div>

                    </div>
                </section>

                <section class="no-top relative z1000">
                    <div class="container">
                        <div class="row mt-100">
                            <div class="col-md-4">
                                <div class="mask rounded img-shadow">
                                    <div class="cover rounded">
                                        <div class="c-inner">
                                            <h3><i class="icofont-check-circled"></i><span>Pago online</span></h3>
                                            <p>Seguros arboleda es totalemente online, así que el pago también! Hazlo todo desde casa</p>
                                            <div class="spacer20"></div>
                                            <a href="#" class="btn-custom invert capsule">Leer mas</a>
                                        </div>
                                    </div>
                                    <img src="images/misc/f1.jpg" alt="" class="img-responsive" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mask rounded img-shadow">
                                    <div class="cover rounded">
                                        <div class="c-inner">
                                            <h3><i class="icofont-check-circled"></i><span>Asistencia inmediata</span></h3>
                                            <p>Estamos disponible las 24 horas para ayudarte en cualquier cosa</p>
                                            <div class="spacer20"></div>
                                            <a href="#" class="btn-custom invert capsule">Leer mas</a>
                                        </div>
                                    </div>
                                    <img src="images/misc/f2.jpg" alt="" class="img-responsive" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mask rounded img-shadow">
                                    <div class="cover rounded">
                                        <div class="c-inner">
                                            <h3><i class="icofont-check-circled"></i><span>Compromiso de satisfacción</span></h3>
                                            <p>Nos comprometemos a que estés satisfecho con el servicio</p>
                                            <div class="spacer20"></div>
                                            <a href="#" class="btn-custom invert capsule">Leer mas</a>
                                        </div>
                                    </div>
                                    <img src="images/misc/f3.jpg" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-fun-facts" class="no-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb30" data-wow-delay="0s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="4500" data-speed="3000">0</span></h3>
                                    <h5 class="id-color">Hogares protegidos</h5>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb30" data-wow-delay=".25s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="16" data-speed="3000">0</span>Mil</h3>
                                    <h5 class="id-color">Personas salvadas</h5>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb30" data-wow-delay=".4s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="4" data-speed="3000">0</span>M</h3>
                                    <h5 class="id-color">Dinero ahorrado</h5>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb-sm-30" data-wow-delay=".6s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="52" data-speed="3000">0</span>Mil</h3>
                                    <h5 class="id-color">Vehículos asegurados</h5>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb-sm-30" data-wow-delay=".8s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="100" data-speed="3000">0</span>+</h3>
                                    <h5 class="id-color">Países</h5>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 text-center wow fadeInUp mb-sm-30" data-wow-delay="1s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="2" data-speed="3000">2</span>Mil</h3>
                                    <h5 class="id-color">Profesionales</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                 <section id="section-testimonial" data-bgcolor="#f5f7f0" data-bgimage="url(images/background/15.jpg) top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <span class="p-title invert text-white">Latest</span><br>
                                    <h2>Valoraciones de nuestros clientes</h2>
                                    <div class="small-border"></div>
                                </div>
                                <div class="owl-carousel owl-theme" id="testimonial-carousel">
                                    <div class="item">
                                        <div class="de_testi opt-2 review no-bg">
                                            <blockquote>
                                                <i class="fa fa-quote-left id-color"></i>
                                                <h3>Compañía de la competencia</h3>
                                                <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review no-bg">
                                            <blockquote>
                                                <i class="fa fa-quote-left id-color"></i>
                                                <h3>Quality insurance service</h3>
                                                <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                <div class="de_testi_by"><span>Sarah, Microsoft</span></div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review no-bg">
                                            <blockquote>
                                                <i class="fa fa-quote-left id-color"></i>
                                                <h3>Top companies listed</h3>
                                                <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                <div class="de_testi_by"><span>Michael, Apple</span></div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review no-bg">
                                            <blockquote>
                                                <i class="fa fa-quote-left id-color"></i>
                                                <h3>Great services</h3>
                                                <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review no-bg">
                                            <blockquote>
                                                <i class="fa fa-quote-left id-color"></i>
                                                <h3>Easy to claim</h3>
                                                <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                <div class="de_testi_by"><span>John, Pixar Studio</span></div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review no-bg">
                                            <blockquote>
                                                <i class="fa fa-quote-left id-color"></i>
                                                <h3>Excellent support</h3>
                                                <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                <div class="de_testi_by"><span>Sarah, Microsoft</span></div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review no-bg">
                                            <blockquote>
                                                <i class="fa fa-quote-left id-color"></i>
                                                <h3>Reliable insurance</h3>
                                                <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                <div class="de_testi_by"><span>Michael, Apple</span></div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="de_testi opt-2 review no-bg">
                                            <blockquote>
                                                <i class="fa fa-quote-left id-color"></i>
                                                <h3>Five-star services</h3>
                                                <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                                                <div class="de_testi_by"><span>Thomas, Samsung</span></div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section aria-label="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <span class="p-title invert text-white">Frecuente</span><br>
                                <h2>Preguntas y respuestas</h2>
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
                    </div>
                </section>

                <section class="no-padding bg-color text-light">
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.2)">
                                    <i class="bg-color-secondary i-boxed fa fa-comments"></i>
                                    <div class="text">
                                        <h4>Free Consultation</h4>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                    </div>
                                    <i class="wm fa fa-comments"></i>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.15)">
                                    <i class="bg-color-secondary i-boxed fa fa-address-card"></i>
                                    <div class="text">
                                        <h4>Find an Agent</h4>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                    </div>
                                    <i class="wm fa fa-address-card"></i>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.1)">
                                    <i class="bg-color-secondary i-boxed fa fa-file-text"></i>
                                    <div class="text">
                                        <h4>Get a Quote</h4>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                    </div>
                                    <i class="wm fa fa-file-text"></i>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(255,255,255,.05)">
                                    <i class="bg-color-secondary i-boxed fa fa-clock-o"></i>
                                    <div class="text">
                                        <h4>Free Trial</h4>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                                    </div>
                                    <i class="wm fa fa-clock-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!-- content close -->

            <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
            <footer class="footer-light">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="widget">
                                <h5>Nuestra empresa</h5>
                                <ul>
                                    <li><a href="about.html">Sobre nosotros</a></li>
                                    <li><a href="why-choose-us.html">Por qué elegirnos?</a></li>
                                    <li><a href="jobs.html">Trabajo</a></li>
                                    <li><a href="contact.html">Contactanos</a></li>
                                    <li><a href="contact.html">Noticias</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget">
                                <h5>Seguros</h5>
                                <ul>
                                   <li><a href="{{ route('lifeinsurance') }}">Seguros de vida</a></li>
                                   <li><a href="{{ route('carinsurance') }}">Seguros de coche</a></li>
                                   <li><a href="{{ route('homeinsurance') }}">Seguros de hogar</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget">
                                <h5>Contacto:</h5>
                                <address class="s1">
                                    <span><i class="fa fa-map-marker fa-lg"></i>Av de la Arboleda, s/n, Av. Arboleda, 21440 Lepe, Huelva</span>
                                    <span><i class="fa fa-phone fa-lg"></i>+34 959 48 99 04</span>
                                    <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">ieslaarboleda@ieslaarboleda.com</a></span>
                                </address>
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
                                        &copy; Copyright {{ date('Y') }} - Seguros arboleda
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


        </div>



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
        <script src="js/typed.js"></script>
        <script src="js/designesia.js"></script>

        <script>
        $(function () {
            // jquery typed plugin
            $(".typed").typed({
                stringsElement: $('.typed-strings'),
                typeSpeed: 100,
                backDelay: 1500,
                loop: true,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function () { null; },
                resetCallback: function () { newTyped(); }
            });
        });
    </script>

    </body>
</html>
