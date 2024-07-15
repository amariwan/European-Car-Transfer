<!DOCTYPE HTML>
<html :class="{ 'theme-dark': dark }" x-data="data()" class="text-gray-900 leading-tight" lang="en">

<head>
    <!--=============== basic  ===============-->
    <title>European Car Transfer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="robots" content="index" />
    <meta name="Description" content="Tasio" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="European Car Transfer" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="European Car Transfer" />
    <meta name="theme-color" content="#fff">
    <meta name="author" content="Aland Mariwan">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!--=============== favicons ===============-->
    <link rel="shortcut" href="src/images/logo.png">
    <link rel="icon" href="src/images/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="src/images/logo.png">
    <link rel="apple-touch-startup-image" sizes="180x180" href="src/images/logo.png">
    <!--=============== css  ===============-->
    <!-- <link type="text/css" rel="stylesheet" href="src/css/reset.css"> -->
    <link type="text/css" rel="stylesheet" href="src/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="src/css/style.css">
    <link type="text/css" rel="stylesheet" href="src/css/color.css">
    <!--=============== JS  ===============-->
    <script src="/src/js/jquery.js"></script>
    <script src="/src/js/js.cookie.min.js"></script>
</head>

<body>
    <!-- loader start  -->
    <div class="loader-holder">
        <!-- <span></span>
        <span></span>
        <span></span> -->
    </div>
    <!-- loader end -->
    <!-- main start  -->
    <div id="main">
        <!-- progress-bar  -->
        <div class="progress-bar-wrap">
            <div class="progress-bar color-bg"></div>
        </div>
        <!-- progress-bar end -->
        <!-- header -->
        <header class="main-header">
            <!-- top bar -->
            <div class="top-bar fl-wrap">
                <div class="container">
                    <a href="contact.php" class="tbhc_btn"><i class="fas fa-envelope"></i> Our Contacts</a>
                    <div class="top-bar-header-contact">
                        <ul>
                            <li><i class="fal fa-envelope"></i><a href="mailto:kontakt@european-car-transfer.com">kontakt@european-car-transfer.com</a></li>
                            <li><i class="fal fa-map-marker"></i><a href="//goo.gl/maps/UQ8Vzq7k25eyzAJT8" target="_blank">Chausseestr 33A, 14778 Beetzsee</a></li>
                            <li><i class="fal fa-phone"></i><a href="tel:+48(172)1635880">0172 163 5880</a></li>
                        </ul>
                    </div>
                    <!-- <ul class="topbar-social">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul> -->
                    <!--  login btn -->
                    <!-- <div class="show-reg-form "><i class="fas fa-user"></i><span>Sign In</span></div> -->
                    <!--  login btn  end -->
                </div>
            </div>
            <!-- top bar end -->
            <div class="header-inner fl-wrap">
                <div class="container">
                    <!-- logo holder  -->
                    <a href="index.php" class="logo-holder"><img src="src/images/logo.png" alt=""></a>
                    <!-- logo holder end -->
                    <!-- <a href="cost.php" class="header-btn color-bg"><span>Cost Calculator </span> <i class="fal fa-function"></i></a> -->
                    <!-- <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div> -->
                    <div class="show-share-btn showshare htact"><i class="fal fa-bullhorn"></i> <span class="header-tooltip">Share</span></div>
                    <!-- <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">3</span><span class="header-tooltip">Your Cart</span></div> -->
                    <!-- header-search-wrap -->
                    <div class="header-search-wrap novis_sarch">
                        <div class="widget-inner">
                            <form action="#">
                                <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                                <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                            </form>
                        </div>
                    </div>
                    <!-- header-search-wrap end -->
                    <!-- share-wrapper-->
                    <div class="share-wrapper  isShare">
                        <div class="close-share-btn"><i class="fal fa-long-arrow-up"></i></div>
                        <div class="share-container fl-wrap  isShare"></div>
                    </div>
                    <div class="nav-button-wrap">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->