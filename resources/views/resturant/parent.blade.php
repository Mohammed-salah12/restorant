<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurant | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{  asset('resturant/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{  asset('resturant/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  asset('resturant/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{  asset('resturant/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{  asset('resturant/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{  asset('resturant/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{  asset('resturant/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{  asset('resturant/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{  asset('resturant/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{  asset('resturant/css/slicknav.css') }}">
    <!-- Library Fontawesme -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css" />

    <link rel="stylesheet" href="{{  asset('resturant/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    @yield('styles')
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="header_bottom_border">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('resturant/img/logo.png') }}" alt="LOGO" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="Menu.html">Menu</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="say_hello">
                                    <a href="#Reservation">Book a Table</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->


    @yield('content')

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{  asset('resturant/img/footer_logo.png') }}" alt="FOOTER" loading="lazy">
                                </a>
                            </div>
                            <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                                <a href="#">+10 367 826 2567</a> <br>
                                <a href="#">contact@carpenter.com</a>
                            </p>
                            <p>



                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://ar-ar.facebook.com/">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiYXIifQ%3D%3D%22%7D">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="menu.html">Menu</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html"> Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="{{ asset('resturant/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('resturant/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('resturant/js/popper.min.js') }}"></script>
    <script src="{{ asset('resturant/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resturant/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('resturant/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('resturant/js/ajax-form.js') }}"></script>
    <script src="{{ asset('resturant/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('resturant/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('resturant/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('resturant/js/scrollIt.js') }}"></script>
    <script src="{{ asset('resturant/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('resturant/js/wow.min.js') }}"></script>
    <script src="{{ asset('resturant/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('resturant/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('resturant/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('resturant/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('resturant/js/plugins.js') }}"></script>



    <!--contact js-->
    <script src="{{ asset('resturant/js/contact.js') }}"></script>
    <script src="{{ asset('resturant/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('resturant/js/jquery.form.js') }}"></script>
    <script src="{{ asset('resturant/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('resturant/js/mail-script.js') }}"></script>


    <script src="{{ asset('resturant/js/main.js') }}"></script>

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }

        });
    </script>
</body>

</html>
