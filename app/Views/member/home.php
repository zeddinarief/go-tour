<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Go Tour & Travel Malang</title>
    <meta name="description" content="Go Tour & Travel Malang">
    <base href="<?= base_url('assets') ?>/member/">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Go Tour & Travel Malang">
    <meta name="application-name" content="Go Tour & Travel Malang">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
    <link rel="stylesheet" href="assets/css/demos/demo-11.css">
    <style>
    .promo {
        text-decoration: line-through;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-7">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="Logo" width="82" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.html" class="sf-with-ul">Beranda</a>
                                </li>
                                <li>
                                    <a href="category.html" class="sf-with-ul">Promo</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Promo Trip Gunung</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#"><span>Trip Gunung Panderman<span
                                                                                class="tip tip-new">New</span></span></a>
                                                                </li>

                                                            </ul>

                                                            <div class="menu-title">Promo Trip Pantai</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#"><span>Trip Pantai
                                                                            Selatan<span
                                                                                class="tip tip-hot">Hot</span></span></a>
                                                                </li>
                                                                <li><a href="#">Trip Pantai
                                                                        Ngliyep</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">

                                                            <div class="menu-title">Promo Trip Rekreasi</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#" class="text-muted">Belum Tersedia</a>
                                                                </li>

                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="assets/images/menu-promo.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Ambil
                                                                <br> Promonya<br><span><strong>segera</strong></span>
                                                            </div>
                                                            <!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul">Kontak</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Kontak Kami</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">WhatsApp</a></li>
                                                        <li><a href="#">Telegram</a></li>
                                                        <li><a href="#">Facebook</a></li>
                                                        <li><a href="#">Instagram</a></li>
                                                        <li><a href="#">Email</a></li>

                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="assets/images/menu-kontak.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">Ingin
                                                                Bertanya?<br><span><strong>Hubungi Kami</strong></span>
                                                            </div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>

                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Cari..."
                                        required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">1</span>
                                <!-- <span class="cart-txt">Rp 350.000,-</span> -->
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Trip Gunung Panderman</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <!-- <span class="cart-product-qty">1</span> -->
                                                Rp 350.000,-
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/gunung-panderman.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">Rp 350.000,-</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-primary">Pesanan Saya</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Bayar</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->

                        <a href="login.html" class="wishlist-link">
                            <i class="icon-user"></i>
                            <span class="wishlist-count bg-danger"></span>
                        </a>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <div class="intro-slider-container mb-4">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "responsive": {
                            "992": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(assets/images/slide-1.png);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle text-primary">VITAMIN SEA</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Promo 30% <br>Trip Pantai Selatan</h1>
                            <!-- End .intro-title -->

                            <a href="category.html" class="btn btn-outline-primary-2">
                                <span>SELENGKAPNYA</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(assets/images/slide-2.png);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle text-white">SUNRISE IN JULY</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Promo 30% <br>Trip Gunung Panderman</h1>
                            <!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary min-width-sm">
                                <span>SELENGKAPNYA</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <div class="toolbox toolbox-filter">
                    <div class="toolbox-left">
                        <a href="#" class="filter-toggler">Filter</a>

                    </div><!-- End .toolbox-left -->
                    <div class="toolbox-right">
                        <ul class="nav-filter product-filter">
                            <li class="active"><a href="#" data-filter="*">Semua</a></li>
                            <li><a href="#" data-filter=".gunung">Gunung</a></li>
                            <li><a href="#" data-filter=".pantai">Pantai</a></li>
                            <li><a href="#" data-filter=".rekreasi">Rekreasi</a></li>
                            <!-- <li><a href="#" data-filter=".sale">Sale</a></li> -->
                        </ul>
                    </div><!-- End .toolbox-right -->
                </div><!-- End .filter-toolbox -->

                <div class="widget-filter-area" id="product-filter-area">
                    <a href="#" class="widget-filter-clear">Reset filter</a>

                    <div class="filter-area-wrapper">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Kategori :
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-items filter-items-count">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-1">
                                                <label class="custom-control-label" for="cat-1">Semua</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">50</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-2">
                                                <label class="custom-control-label" for="cat-2">Gunung</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">5</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-3">
                                                <label class="custom-control-label" for="cat-3">Pantai</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">12</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-4">
                                                <label class="custom-control-label" for="cat-4">Rekreasi</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">32</span>
                                        </div><!-- End .filter-item -->

                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Urutkan berdasarkan :
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" checked id="sort-1"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-1">Promo</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-2"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-2">Populer</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-3"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-3">Rating</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-4"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-4">Terbaru</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-5"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-5">Harga: Murah ke
                                                    Mahal</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-6"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-6">Harga: Mahal ke
                                                    Murah</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Harga :
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            Rentang Harga:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->

                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .filter-price -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .filter-area-wrapper -->
                </div><!-- End #product-filter-area.widget-filter-area -->

                <div class="products-container" data-layout="fitRows">

                    <div class="product-item gunung col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label bg-danger text-white">Promo</span>
                                <a href="#">
                                    <img src="assets/images/gunung-panderman.jpg" alt="Product image"
                                        class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Gunung Panderman</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <div class="out-price promo">Rp 150.000 </div>
                                    <span class="text-danger">&nbsp; Rp 120.000,-</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                    <div class="product-item gunung col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label">Tersedia</span>
                                <a href="#">
                                    <img src="assets/images/gunung-butak.jpg" alt="Product image" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Gunung Butak</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    Rp 160.000,-
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                    <div class="product-item gunung col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label bg-dark text-white">Belum Tersedia</span>
                                <a href="#">
                                    <img src="assets/images/gunung-kawi.jpg" alt="Product image" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Gunung Kawi</a></h3>
                                <!-- End .product-title -->
                                <div class="out-price ">
                                    Rp 140.000,-
                                </div><!-- End .product-price -->

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                    <div class="product-item pantai col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label bg-danger text-white">Promo</span>
                                <a href="#">
                                    <img src="assets/images/pantai-gatra.jpg" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Pantai Gatra</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <div class="out-price promo">Rp 150.000 </div>
                                    <span class="text-danger">&nbsp; Rp 120.000,-</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                    <div class="product-item pantai col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label bg-danger text-white">Promo</span>
                                <a href="#">
                                    <img src="assets/images/pantai-clungup.jpg" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Pantai Clungup</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <div class="out-price promo">Rp 110.000 </div>
                                    <span class="text-danger">&nbsp; Rp 90.000,-</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                    <div class="product-item pantai col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label bg-danger text-white">Promo</span>
                                <a href="#">
                                    <img src="assets/images/pantai-ngliyep.jpg" class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Pantai Ngliyep</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <div class="out-price promo">Rp 120.000 </div>
                                    <span class="text-danger">&nbsp; Rp 110.000,-</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                    <div class="product-item rekreasi col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label">Tersedia</span>
                                <a href="#">
                                    <img src="assets/images/rekreasi-hawai.jpg" alt="Product image"
                                        class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Hawaii Waterpark</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="text-danger">&nbsp; Rp 120.000,-</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                    <div class="product-item rekreasi col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label">Tersedia</span>
                                <a href="#">
                                    <img src="assets/images/rekreasi-jodipan.jpg" alt="Product image"
                                        class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Kampung Warna Warni & 3D</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    Rp 60.000,-
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                    <div class="product-item rekreasi col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label bg-dark text-white">Belum Tersedia</span>
                                <a href="#">
                                    <img src="assets/images/rekreasi-wonosari.jpg" alt="Product image"
                                        class="product-image">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview"
                                        title="Quick view"><span>Selengkapnya</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Trip Agro Wonosari</a></h3>
                                <!-- End .product-title -->
                                <div class="out-price ">
                                    Rp 70.000,-
                                </div><!-- End .product-price -->

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->

                </div><!-- End .products-container -->
            </div><!-- End .container -->

            <div class="more-container text-center mt-0 mb-7">
                <a href="#" class="btn btn-outline-dark-3 btn-more"><span>lihat lebih banyak</span><i
                        class="la la-refresh"></i></a>
            </div><!-- End .more-container -->
        </main><!-- End .main -->

        <footer class="footer footer-2">
            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2022 Go Tour & Travel Malang. All Rights Reserved.</p>
                    <!-- End .footer-copyright -->
                    <!-- <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul> -->

                    <div class="social-icons social-icons-color">
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                                class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                                class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                                class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Cari..."
                    required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.html">Beranda</a>
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">Promo</a>
                        <ul>
                            <li><a href="#">Trip Gunung Panderman</a></li>
                            <li><a href="#">Trip Pantai Selatan</a></li>
                            <li><a href="#">Trip Pantai Ngliyep</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">Kontak</a>
                        <ul>
                            <li><a href="#">WhatsApp</a></li>
                            <li><a href="#">Telegram</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Email</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="assets/images/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">Dapatkan Promo <span>30<light>%</light></span></h2>
                            <p><b>untuk trip pertama kamu</b></p>
                            <p>Segera Daftar, untuk mendapatkan update informasi dari kami</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white"
                                        placeholder="Masukkan alamat email kamu..." aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>Klaim</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Jangan tampilkan
                                    lagi</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="assets/images/gambar-pop-up.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-11.js"></script>
</body>

</html>