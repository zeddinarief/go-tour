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

    <link href="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
    <link rel="stylesheet" href="assets/css/demos/demo-11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="<?= base_url() ?>/" class="sf-with-ul">Beranda</a>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Promo</a>
                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Promo Trip Gunung</div>
                                                            <ul>
                                                                <li><a href="#"><span>Trip Gunung Panderman<span
                                                                                class="tip tip-new">New</span></span></a>
                                                                </li>
                                                            </ul>
                                                            <div class="menu-title">Promo Trip Pantai</div>
                                                            <ul>
                                                                <li><a href="#"><span>Trip Pantai
                                                                            Selatan<span
                                                                                class="tip tip-hot">Hot</span></span></a>
                                                                </li>
                                                                <li><a href="#">Trip Pantai
                                                                        Ngliyep</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Promo Trip Rekreasi</div>
                                                            <ul>
                                                                <li><a href="#" class="text-muted">Belum Tersedia</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="assets/images/menu-promo.jpg" alt="Banner">
                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Ambil
                                                                <br> Promonya<br><span><strong>segera</strong></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Kontak</a>
                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Kontak Kami</div>
                                                    <ul>
                                                        <li><a href="#">WhatsApp</a></li>
                                                        <li><a href="#">Telegram</a></li>
                                                        <li><a href="#">Facebook</a></li>
                                                        <li><a href="#">Instagram</a></li>
                                                        <li><a href="#">Email</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="#">
                                                        <img src="assets/images/menu-kontak.jpg" alt="Banner">
                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">Ingin
                                                                Bertanya?<br><span><strong>Hubungi Kami</strong></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Cari..."
                                        required>
                                </div>
                            </form>
                        </div>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">1</span>
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
                                        </div>

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/gunung-panderman.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div>
                                </div>

                                <div class="dropdown-cart-total">
                                    <span>Total</span>
                                    <span class="cart-total-price">Rp 350.000,-</span>
                                </div>

                                <div class="dropdown-cart-action">
                                    <a href="<?= base_url() ?>/pesanan" class="btn btn-block btn-primary"><i
                                            class="fa-regular fa-eye"></i> Lihat
                                        Pesanan</a>
                                    <!-- <a href="#" class="btn btn-outline-primary-2"><span>Bayar</span><i
                                            class="icon-long-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <a href="login.html" class="wishlist-link">
                            <i class="icon-user"></i>
                            <span class="wishlist-count bg-danger"></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <?= $this->renderSection('content') ?>

        <footer class="footer footer-2">
            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2022 Go Tour & Travel Malang. All Rights Reserved.</p>
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
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>

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
            </nav>

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
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

    <script src="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-11.js"></script>

    <script>
    const datePicker = MCDatepicker.create({
        el: '#datepicker',
        selectedDate: new date(), // today
    })
    </script>
</body>

</html>