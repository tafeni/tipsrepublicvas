<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    {{--<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">--}}
    <!-- #title -->
    <title>Welcome to Tips Republic</title>
    <!-- #keywords -->
    <meta name="keywords" content="Gaming">
    <!-- #description -->
    <meta name="description" content="Tips Republic">

    <!--  css dependencies start  -->

    <!-- bootstrap five css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- line awesome css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/css/line-awesome.min.css') }}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="https://pixner.net/nftlotty3/main/nftlotty-one/assets/vendor/slick/css/slick.css">
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/odometer/css/odometer.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <!--  / css dependencies end  -->

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

<!--  Preloader  -->
<div id="pre_loader"></div>

<!--header-section start-->
<form action="/secured" method="post" enctype="multipart/form-data">
    @csrf
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xxl nav-shadow" id="#navbar">
                    <a class="navbar-brand px-0 section__content-sub-title headingFour" href="/" >{{--<img src="assets/images/logo.png" class="logo" alt="logo">--}}TIPS REPUBLIC</a>
                    <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="material-symbols-outlined"> apps </span>
                    </a>

                    <div class="collapse navbar-collapse ms-auto" id="navbar-content">
                        <div class="main-menu">
                            <ul class="navbar-nav  mb-lg-0 mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link about" href="#about">About</a>
                                </li>
                                {{--<li class="nav-item">
                                    <a class="nav-link utility" href="index.html#utility">Utility</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rarity" href="index.html#rarity">Rarity</a>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link roadmap" href="index.html#roadmap">Roadmap</a>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link team" href="index.html#team">Team</a>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link faqa" href="index.html#faqa">FAQ</a>
                                </li>--}}
                            </ul>

                            <div class="nav-right">
                                {{--<div class="social">
                                    <a href="index.html#" class="social_icon">
                                        <i class="lab la-discord"></i>
                                    </a>
                                    <a href="index.html#" class="social_icon">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                    <a href="index.html#" class="social_icon">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </div>--}}
                                <button type="submit" class="btn_theme">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
</form>
<!--header section end-->

<!-- Offcanvas More info-->
<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-body custom-nevbar">
        <div class="row">
            <div class="col-md-7">
                <div class="custom-nevbar__left">
                    <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                        <span class="material-symbols-outlined">close </span>
                    </button>
                    <ul class="custom-nevbar__nav mb-lg-0">
                        <li class="menu_item">
                            <a class="menu_link" href="/">Home</a>
                        </li>
                        <li class="menu_item">
                            <a class="menu_link about" href="#about">About</a>
                        </li>
                        {{--<li class="menu_item">
                            <a class="menu_link utility" href="index.html#utility">Utility</a>
                        </li>
                        <li class="menu_item">
                            <a class="menu_link" href="index.html#rarity">Rarity</a>
                        </li>
                        <li class="menu_item">
                            <a class="menu_link" href="index.html#roadmap">Roadmap</a>
                        </li>
                        <li class="menu_item">
                            <a class="menu_link" href="index.html#team">Team</a>
                        </li>
                        <li class="menu_item">
                            <a class="menu_link" href="index.html#faqa">FAQ</a>
                        </li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="custom-nevbar__right">
                    <div class="custom-nevbar__top d-none d-md-block">
                        <button type="button" class="close-icon ms-auto"
                                data-bs-dismiss="offcanvas" aria-label="Close"><span
                                class="material-symbols-outlined">close </span></button>
                        <div class="custom-nevbar__right-thumb mb-auto">
                            <img src="assets/images/logo.png" alt="logo">
                        </div>
                    </div>
                    {{--<ul class="custom-nevbar__right-location">
                        <li>
                            <p class="mb-2">Phone: </p>
                            <a href="tel:+123456789" class="fs-5 contact">+123 456 789</a>
                        </li>
                        <li class="location">
                            <p class="mb-2">Email: </p>
                            <a href="../../../cdn-cgi/l/email-protection.htm#6b22050d042b0c060a020745080406" class="fs-5 contact"><span class="__cf_email__" data-cfemail="91d8fff7fed1f6fcf0f8fdbff2fefc">[email&#160;protected]</span></a>
                        </li>
                        <li class="location">
                            <p class="mb-2">Location: </p>
                            <p class="fs-5 contact">6391 Celina, Delaware 10299</p>
                        </li>
                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-section end -->

<!-- Hero Section Start -->
<form action="/secured" method="post" enctype="multipart/form-data">
    @csrf
<section class="hero">
    <div class="hero__animation">
        <img src="{{ asset('assets/images/hero_animation_rotated.png') }}" alt="Image">
        <img src="{{ asset('assets/images/subway-surfer-jake.fw.png') }}" alt="Image">
        <img src="{{ asset('assets/images/hero_vector.png') }}" alt="Image">
        <img src="{{ asset('assets/images/mushroombanditnsmbu.fw.png') }}" alt="Image">
        <img src="{{ asset('assets/images/gaming-in-turkey-media-hub-for-gaming-gaming.fw.png') }}" alt="Image">
        <img src="{{ asset('assets/images/mario.fw.png') }}" alt="Image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12  col-lg-7">
                <div class="section__content">
                    <p class="section__content-sub-title headingFour">Welcome to Tips Republic</p>
                    <h1 class="section__content-title wow fadeInUp" data-wow-duration="1s">Premium AI generated tips for all sports!
                    </h1>
                    <p class="section__content-text">Get Sports predictions &amp; on the go on your mobile phone</p>
                    <button type="submit" class="btn_theme mt_40"> {{--<i class="lab la-discord"></i>--}}SUBSCRIBE NOW!</button>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<!--Hero Section End -->

<!-- NFTPO Play start -->
{{--<section class="section nftpo-play" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 col-xxl-6">
                <div class="section__header">
                    <p class="section__header-sub-title headingFour wow fadeInUp" data-wow-duration="0.8s">
                        NFTLOTTY In 3 Steps
                    </p>
                    <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">How to Play the NFTPO</h2>
                    <p class="section__header-text wow fadeInDown" data-wow-duration="0.8s">Decentra-Lotto is a decentralised cryptocurrency lottery</p>
                </div>
            </div>
        </div>
        <div class="row gy-4 gy-lg-0 g-3 g-xl-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="nftpo-play__card">
                    <h4 class="nftpo-play__card-title mb_32"><span class="number">01</span> Connet Wallet</h4>
                    <div class="nftpo-play__thumb">
                        <img src="assets/images/nftpo-play.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="nftpo-play__card">
                    <h4 class="nftpo-play__card-title mb_32"><span class="number">02</span> Buy NFT Ticket</h4>
                    <div class="nftpo-play__thumb">
                        <img src="assets/images/nftpo-play2.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="nftpo-play__card">
                    <h4 class="nftpo-play__card-title mb_32"><span class="number">03</span> Wait for the draw</h4>
                    <div class="nftpo-play__thumb">
                        <img src="assets/images/nftpo-play3.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--}}
<!--  NFTPO Play end -->


<!-- scroll to top -->
<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>

<!--  js dependencies start  -->

<!-- jquery -->
<script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery-3.6.3.min.js') }}"></script>
<!-- bootstrap five js -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
<!-- circular-progress-bar -->
<script src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js"></script>
<!-- slick js -->
<script src="{{ asset('assets/vendor/slick/js/slick.min.js') }}"></script>
<!-- odometer js -->
<script src="{{ asset('assets/vendor/odometer/js/odometer.min.js') }}"></script>
<!-- viewport js -->
<script src="{{ asset('assets/vendor/viewport/viewport.jquery.js') }}"></script>
<!-- jquery ui js -->
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('assets/vendor/jquery-validate/jquery.validate.min.js') }}"></script>

<!--  / js dependencies end  -->

<!-- plugins js -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
