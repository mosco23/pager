<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Business Bootstrap Responsive Template</title>
    @php
        $favIcon = config('site.fav_icon') ?? "img/favicon.ico" ;
    @endphp
    <link rel="shortcut icon" href="{{ asset("storage/".config('kanieservice.logo-30')) }}">
    <!-- Global Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/var.css') }}?d={{ date('Ymd') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="{{ asset("css/bootstrap/bootstrap.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?d={{ date('Ymd') }}">
    <link rel="stylesheet" href="{{ asset('css/vz.css') }}?d={{ date('Ymd') }}">
</head>

<body id="page-top">
    <header>
        <!-- Top Navbar  -->
        <div class="top-menubar">
            <div class="topmenu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            @include("layout.top-info")
                        </div>
                        <div class="col-md-5">
                            @include("layout.social-media")
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
            <div class="container">
                <a class="navbar-brand smooth-scroll" href="{{ route('home') }}">
                    <img src="{{ asset("storage/".config('kanieservice.logo-50')) }}" alt="{{ config('kanieservice.raisonSociale') }}">
                    {{ config('kanieservice.raisonSociale') }}
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="index.html">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="about.html">About Us</a>
                                <a class="dropdown-item" href="careers.html">Career Oprtunity</a>
                                <a class="dropdown-item" href="team.html">Meet Our Team</a>
                                <a class="dropdown-item" href="faq.html">FAQ</a>
                                <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="services.html">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin Panel</a>
                            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" target="_empty" href="admin/index.html">Dashboard</a>
                                <a class="dropdown-item" target="_empty" href="admin/chart.html">Charts</a>
                                <a class="dropdown-item" target="_empty" href="admin/email.html">Email</a>
                                <a class="dropdown-item" target="_empty" href="admin/faq.html">FAQ</a>
                                <a class="dropdown-item" target="_empty" href="admin/profile.html">Profile</a>
                                <a class="dropdown-item" target="_empty" href="admin/tables.html">Tables</a>
                                <a class="dropdown-item" target="_empty" href="admin/invoice.html">Invoice</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="news-list.html">News list layouts</a>
                                <a class="dropdown-item" href="news-grid.html">News grid layouts</a>
                                <a class="dropdown-item" href="news-details.html">News Details</a>
                                <a class="dropdown-item" href="project.html">Project</a>
                                <a class="dropdown-item" href="contact.html">Contact Us</a>
                                <a class="dropdown-item" href="comming-soon.html">Comming Soon</a>
                                <a class="dropdown-item" href="pricing.html">Pricing Tables</a>
                                <a class="dropdown-item" href="admin/404.html">404</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <div class="dropdown-menu dropdown-cust mega-menu" aria-labelledby="navbarDropdownMenuLink">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="dropdown-item" href="shop.html">Shop Detail</a>
                                        <a class="dropdown-item" href="single-product.html">Single Product</a>
                                        <a class="dropdown-item" href="cart.html">Cart</a>
                                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                                        <a class="dropdown-item" href="myaccount.html">Myaccount</a>
                                    </div>
                                    <div class="col-md-7 mega-menu-img m-auto text-center pl-0">
                                        <a href="#"><img src="img/offer_icon.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="search fa fa-search search-btn"></i>
                            <div class="search-open">
                                <div class="input-group animated fadeInUp">
                                    <input type="text" class="form-control" placeholder="Search"
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-addon" id="basic-addon2">Go</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="top-menubar-nav">
                                <div class="topmenu ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-9">
                                                @include("layout.top-info")
                                            </div>
                                            <div class="col-md-3">
                                                @include("layout.social-media")
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--====================================================
                    LOGIN OR REGISTER
    ======================================================-->
    {{-- <section id="login">
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="fa fa-times" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div id="div-forms">
                        <form id="login-form" action="{{ route('auth.login') }}" method="POST">
                            {{ csrf_field() }}
                            <h3 class="text-center">{{ __('voyager::generic.email') }}</h3>
                            <div class="modal-body">
                                <label for="email">{{ __('voyager::generic.email') }}</label>
                                <input id="email" name="email" class="form-control" type="text"
                                    placeholder="Enter email " value="{{ old('email') }}" required>
                                <label for="password">{{ __('voyager::generic.password') }}</label>
                                <input id="password" name="password" class="form-control" type="password"
                                    placeholder="{{ __('voyager::generic.password') }}" required>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer text-center">
                                <div>
                                    <button type="submit" class="btn btn-general btn-white">Login</button>
                                </div>
                                <div>
                                    <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                                </div>
                            </div>
                        </form>
                        <form id="register-form" style="display:none;">
                            <h3 class="text-center">Register</h3>
                            <div class="modal-body">
                                <label for="username">Username</label>
                                <input id="register_username" class="form-control" type="text"
                                    placeholder="Enter username" required>
                                <label for="register_email">E-mailId</label>
                                <input id="register_email" class="form-control" type="text" placeholder="Enter eMail"
                                    required>
                                <label for="register_password">Password</label>
                                <input id="register_password" class="form-control" type="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="modal-footer">
                                <div>
                                    <button type="submit" class="btn btn-general btn-white">Register</button>
                                </div>
                                <div>
                                    <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@yield('contenu')
<!--====================================================
                      FOOTER
======================================================-->
<footer>
    <div id="footer-s1" class="footer-s1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About Us -->
                    <div class="col-md-3 col-sm-6 ">
                        <div><img src="{{ asset("storage/".config('kanieservice.logo-150')) }}" alt="{{ config('kanieservice.raisonSociale') }}" class="img-fluid"></div>
                        <ul class="list-unstyled comp-desc-f">
                            <li>
                                <p>Businessbox is a corporate business theme. You can customize what ever you think to
                                    make your website much better from your great ideas. </p>
                            </li>
                        </ul><br>
                    </div>
                    <!-- End About Us -->

                    <!-- Recent News -->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="heading-footer">
                            <h2>Useful Links</h2>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li><a href="about.html">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="project.html">Project</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="careers.html">Career</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="faq.html">FAQ</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="contact.html">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div>
                    <!-- End Recent list -->

                    <!-- Recent Blog Entries -->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="heading-footer">
                            <h2>Recent Post Entries</h2>
                        </div>
                        <ul class="list-unstyled thumb-list">
                            <li>
                                <div class="overflow-h">
                                    <a href="#">Praesent ut consectetur diam.</a>
                                    <small>02 OCT, 2017</small>
                                </div>
                            </li>
                            <li>
                                <div class="overflow-h">
                                    <a href="#">Maecenas pharetra tellus et fringilla.</a>
                                    <small>02 OCT, 2017</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Recent Blog Entries -->

                    <!-- Latest Tweets -->
                    <div class="col-md-3 col-sm-6">
                        <div class="heading-footer">
                            <h2>Get In Touch</h2>
                        </div>
                        <address class="address-details-f">
                            {!! nl2br(config('kanieservice.adresse')) !!} <br>
                            Tel: {{ config('kanieservice.phone-ci') }} <br>
                            Tel: {{ config('kanieservice.phone-ca') }} <br>
                            Email: <a href="{{ config('kanieservice.email') }}" class="">{{ config('kanieservice.email') }}</a>
                        </address>
                        <ul class="list-inline social-icon-f top-data">
                            <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                            <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                            <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Latest Tweets -->
                </div>
            </div>
            <!--/container -->
        </div>
    </div>

    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="footer-copyrights">
                        <p>Copyrights &copy; {{ config('kanieservice.raisonSociale') }} <a href="#">Privacy Policy</a> <a
                                href="#">Terms of Services</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs"
        title="home" role="button">
        <i class="fa fa-angle-up"></i>
    </a>
</footer>

<!--Global JavaScript -->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/wow/wow.min.js') }}"></script>
<script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
