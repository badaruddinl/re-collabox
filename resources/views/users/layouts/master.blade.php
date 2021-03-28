<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('judul')</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="icon" type="image/png" href="assets/img/favicon-96x96.png">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="body-bg">
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Header Start -->
<header>
<div class="header-area">
    <div class="main-header ">
        <div class="header-top d-none d-lg-block" style="background-color: #6C845C;">
            <div class="container-fluid pl-5 pr-5">
                <div class="col-xl-12">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="header-info-left">
                            <ul>     
                                <li><i class="far fa-clock text-light"></i> Mon - SAT: 6.00 am - 10.00 pm</li>
                                <li>Sun:  Closed</li>
                            </ul>
                        </div>
                        <div class="header-info-right">
                            <ul class="header-social">    
                                <li><a href="#">ID</a></li>
                                <li><a href="#">EN</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom  header-sticky">
            <div class="container-fluid pl-5 pr-5">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="index.html"><img src="https://static.wixstatic.com/media/4e38c6_c72a18144f1e4020930a0070f87d967f~mv2_d_2089_2027_s_2.png/v1/crop/x_31,y_0,w_2027,h_2027/fill/w_50,h_50,al_c,q_85,usm_0.66_1.00_0.01/FINAL%20LOGO-03_edited.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block text-darkt">
                                <nav> 
                                    <ul id="navigation">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Skill Development</a>
                                            <ul class="submenu" style="opacity: 70%; background-color: #6C845C;">
                                                <li><a href="blog.html">Kelasrum</a></li>
                                                <li><a href="blog.html">Creative Incubator</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Space</a>
                                            <ul class="submenu" style="opacity: 70%; background-color: #6C845C;">
                                                <li><a href="blog.html">CoWork Box</a></li>
                                                <li><a href="blog.html">Office Box</a></li>
                                                <li><a href="blog_details.html">Meeting Box</a></li>
                                                <li><a href="elements.html">Event Box</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Service</a>
                                            <ul class="submenu text-dark" style="opacity: 70%; background-color: #6C845C;" >
                                                <li><a href="blog.html">Virtual Office</a></li>
                                                <li><a href="blog.html">Instant Office</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Blog</a></li>
                                        <li><a href="contact.html">Events</a></li>
                                        <li><a href="contact.html">Blanj Art Market</a></li>
                                        <li><a href="contact.html"><i class="fas fa-bell"></i></a></li>
                                        <li><a href="contact.html"><i class="fas fa-user"></i> <i class="fas fa-chevron-down"></i></a>
                                            <ul class="submenu text-dark" style="opacity: 70%; background-color: #6C845C;" >
                                                <li><a href="blog.html">Profile</a></li>
                                                <li><a href="blog.html">My Bookings</a></li>
                                                <li><a href="blog.html">My Orders</a></li>
                                                <li><a href="blog.html">My Adreesses</a></li>
                                                <li><a href="blog.html">My wallet</a></li>
                                                <li><a href="blog.html">My Wisshlist</a></li>
                                                <li><a href="blog.html">My Subcriptions</a></li>
                                                <li><a href="blog.html">My Account</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a href="blog.html">Logout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> 
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
    
    <!-- Header End -->


<main>
<!--begin conten-->
@yield('content')
<!--end conten-->
</main>

<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" style="background-color: brown; color: white;">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>KONTAK </h4>
                                <ul>
                                    <li style="color: white;">Email       :  collabox.id@gmail.com</li>
                                    <li style="color: white;">Telepon   :  024 3547858</li>
                                    <li style="color: white;">Jl. Indraprasta no. 74, Pendrikan Kidul,

                                        Kec. Semarang Tengah, Kota Semarang, 
                                        
                                        Jawa Tengah 50131</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Jam Buka </h4>
                                <ul>
                                    <li style="color: white;">Senin-Jumat  : 09.00-17.00</li>
                                    <li style="color: white;">Sabtu             : 09.00-14.00</li>
                                    <br>
                                    <li>
                                        <a class="text-light" href="#" style="padding-right:2em"><i class="fab fa-whatsapp"></i></a>
                                        <a class="text-light" href="https://www.facebook.com/sai4ull" style="padding-right:2em"><i class="fab fa-facebook-f"></i></a>
                                        <a class="text-light" href="#" style="padding-right:2em"><i class="fab fa-linkedin"></i></a>
                                        <a class="text-light" href="#" ><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right" >
                            <p style="color: white;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; 2019 - <script>document.write(new Date().getFullYear());</script> All rights reserved | Collabox
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
        
    </body>
</html>