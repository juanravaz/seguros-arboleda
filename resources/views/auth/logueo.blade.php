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

			<section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/subheader.jpg) top" data-stellar-background-ratio=".5">
                <div class="overlay-gradient t50">
					<div class="center-y relative">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                                <div class="spacer-10"></div>
                                <h2>Con seguros arboleda no tendrás preocupaciones</h2>
                                <p class="lead">Nos encanta tenerte aquí</p>
                            </div>

								<div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
									<div class="box-rounded padding40" data-bgcolor="#ffffff">
										<h3 class="mb10">Login</h3>
										<p>No tienes cuenta? Regístrate <a href="{{ route('registro')  }}">aquí<span></span></a>.</p>
										<form name="contactForm" id='contact_form' class="form-border" method="post" action='{{ route('login') }}'>
                                            @csrf
                                                <div class="field-set">
                                                    <input type='text' name='email' id='email' class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                 <div class="field-set">
                                                    <input type='password' name='password' id='password' class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                                     @error('password')
                                                     <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                                </div>

                                                <div class="field-set">
                                                    <button type="submit" class="btn btn-custom btn-fullwidth color-2">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>

                                                <div class="clearfix"></div>

                                                <div class="spacer-single"></div>

                                            <!-- social icons -->
                                            <ul class="list s3">
                                                <li>Login con:</li>
                                                <li>
                                                    <a class="btn btn-primary" href="{{ route('social.auth', 'facebook') }}">
                                                        Facebook
                                                    </a>
                                                </li>
                                                <li><a href="#">Google</a></li>
                                            </ul>
                                            <!-- social icons close -->
                                </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

            </div>
            <!-- content close -->

            <!-- footer begin -->
            <footer>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="widget">
                                <h5>Our Company</h5>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                    <li><a href="jobs.html">Careers</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="contact.html">News</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <h5>Insurance</h5>
                                <ul>
                                   <li><a href="features.html">Life Insurance</a></li>
                                   <li><a href="pricing.html">Home Insurance</a></li>
                                   <li><a href="reviews.html">Auto Insurance</a></li>
                                   <li><a href="download.html">Health Insurance</a></li>
                                   <li><a href="download.html">Business Insurance</a></li>
                                   <li><a href="download.html">Condo Insurance</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <h5>Get In Touch</h5>
                                We're here to listen:
                                <address class="s1">
                                    <span><i class="fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                                    <span><i class="fa fa-phone fa-lg"></i>+1 200 300 9000</span>
                                    <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                                    <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                                </address>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <h5>Newsletter</h5>

                                <p>Signup for our newsletter to get the latest news, updates and special offers in your inbox.</p>
                                <form action="blank.php" class="row" id="form_subscribe" method="post" name="form_subscribe">
                                    <div class="col text-center">
                                        <input class="form-control" id="name_1" name="name_1" placeholder="enter your email" type="text" /> <a href="#" id="btn-submit"><i class="arrow_right bg-color-secondary"></i></a>
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
