<!doctype html>
<html lang="en">


<!-- Mirrored from unicoderbd.com/theme/html/uniland/fullwidth/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Feb 2022 10:23:19 GMT -->
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Uniland - Real Estate HTML5 Template">
    <meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
    <meta name="author" content="unicoder">
    <title>Uniland - Real Estate HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Required style of the theme -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/layerslider.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/color.css">
    <link rel="stylesheet" href="assets/css/clock.css">
</head>

<body>

<!--<div class="preloader">
        <div class="loader clock xy-center"></div>
    </div>-->

<div id="page_wrapper" class="bg-light">
    <!--============== Header Section Start ==============-->
    <header class="nav-on-top shadow-sm bg-white">
        <div class="top-header xs-mx-none bg-light border-bottom">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1">
                    <div class="col">
                        <ul class="top-contact list-color-secondary">
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Need Support ? 0729296841</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav py-2 xs-p-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg nav-secondary nav-primary-hover nav-line-active">
                            <a class="navbar-brand" href="#"><img class="nav-logo" src="{{url(asset('assets/images/logo/ELIN.png'))}}" alt="Image not found !"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('about')}}">About Us</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('contact')}}">Contact</a>
                                    </li>
                                </ul>
                                <a href="#" class="ms-2 btn btn-primary md-mx-none rounded-pill">+ Create Listing</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============== Header Section End ==============-->

    <!--============== Page title Start ==============-->
    <div class="full-row py-5">
    </div>
    <!--============== Page title End ==============-->

    <!--============== Contact form Start ==============-->
    <div class="full-row pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <h4 class="down-line mb-5">Get In Touch</h4>
                    <div class="mb-3">
                        <ul>
                            <li class="mb-3">
                                <h6 class="mb-0">Office Address :</h6> Kikuyu
                            </li>
                            <li class="mb-3">
                                <h6>Contact Number :</h6> 0729296841, 0770268722
                            </li>
                            <li class="mb-3">
                                <h6>Email Address :</h6> Info@patron.com, support@patron.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 order-md-1">
                    <h4 class="down-line mb-5">Send Message</h4>
                    <div class="form-simple mb-5">
                        <form id="contact-form" action="#" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <label class="mb-2">Full Name:</label>
                                    <input type="text" class="form-control bg-gray" name="name" required="">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label class="mb-2">Your Email:</label>
                                    <input type="email" class="form-control bg-gray" name="email" required="">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label class="mb-2">Subject:</label>
                                    <input type="text" class="form-control bg-gray" name="subject" required="">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label class="mb-2">Message:</label>
                                    <textarea class="form-control bg-gray" name="message" rows="8" required=""></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Contact form End ==============-->

    <!--============== Footer Section Start ==============-->
@include('footer')
    <!--============== Copyright Section End ==============-->

    <!-- Scroll to top -->
    <a href="#" class="text-general scroll-top-vertical xs-mx-none" id="scroll">Scroll to top</a>
    <!-- End Scroll To top -->
</div>

<!-- Javascript Files -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/range/tmpl.js"></script>
<script src="assets/js/range/jquery.dependClass.js"></script>
<script src="assets/js/range/draggable.js"></script>
<script src="assets/js/range/jquery.slider.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/paraxify.js"></script>
<script src="assets/js/custom.js"></script>

</body>


<!-- Mirrored from unicoderbd.com/theme/html/uniland/fullwidth/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Feb 2022 10:23:19 GMT -->
</html>
