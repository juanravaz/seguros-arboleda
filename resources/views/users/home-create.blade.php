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
                        @include('partials.nav');
                    </div>
                </div>
            </header>
            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/subheader6.jpg) top">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="spacer-single"></div>
                                    <h1>Auto Insurance</h1>
                                    <p>Your car covered.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->


            <section aria-label="section">
                <div class="container">
						<div class="row">

							<div class="col-lg-8 mb-sm-30">

							<form name="form" id="form" class="form-border" method="POST" >
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Código postal</label>
                                    <input type="text" name="postalCode" class="form-control" id="postalCode" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Dirección</label>
                                    <input type="text" name="street" class="form-control" id="street" placeholder="Dirección">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Metros cuadrados</label>
                                    <input type="number" name="m2" class="form-control" id="m2" placeholder="Metros cuadrados" min="10">
                                </div>
                                <div class="mb-4">
                                    <input type="button" id="enviar" value="Calcular el seguro de tu hogar" class="btn btn-custom" />
                                </div>
                            </form>
                            <div class="carPrice">

                            </div>
                            <form style="visibility: hidden;" action="{{ url('/paypal/pay') }}" method="GET" name="form2" id="form2">
                                @csrf
                                <input type="hidden" name="precio" id="precio" />
                                <input type="hidden" name="street" id="formStreet" />
                                <input type="hidden" name="m2" id="formM2" />
                                <input type="hidden" name="postalCode" id="formPostalCode" />
                                <input type="hidden" name="type" id="type" />

                            </form>
                                <div class="field-set mb-4" id="resultPrecio">
                                    <p class="h1 text-secondary" >EL PRECIO DE SU SEGURO DE COCHE ES DE </p>
                                    <div id="carPrice">

                                    </div>
                                </div>


                                <div class="carPrice">

                                </div>

                            </div>

						<div class="col-lg-4">

							<div class="padding40 box-rounded mb30" data-bgcolor="#F2F6FE">
								<h3>US Office</h3>
								<address class="s1">
									<span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
									<span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
									<span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
									<span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
								</address>
							</div>


							<div class="padding40 bg-color text-light box-rounded">
								<h3>AU Office</h3>
								<address class="s1">
									<span><i class="fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
									<span><i class="fa fa-phone fa-lg"></i>+61 333 9296</span>
									<span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
									<span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
								</address>
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
        <script src="js/custom.js"></script>
        <script src="js/home.js"></script>

</body>

</html>
