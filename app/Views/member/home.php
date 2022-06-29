<?= $this->extend('member/template') ?>

<?= $this->section('content') ?>

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
                                        <input type="radio" class="custom-control-input" checked id="sort-1" name="sortby">
                                        <label class="custom-control-label" for="sort-1">Promo</label>
                                    </div><!-- End .custom-checkbox -->
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-2" name="sortby">
                                        <label class="custom-control-label" for="sort-2">Populer</label>
                                    </div><!-- End .custom-checkbox -->
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-3" name="sortby">
                                        <label class="custom-control-label" for="sort-3">Rating</label>
                                    </div><!-- End .custom-checkbox -->
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-4" name="sortby">
                                        <label class="custom-control-label" for="sort-4">Terbaru</label>
                                    </div><!-- End .custom-checkbox -->
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-5" name="sortby">
                                        <label class="custom-control-label" for="sort-5">Harga: Murah ke
                                            Mahal</label>
                                    </div><!-- End .custom-checkbox -->
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-6" name="sortby">
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
                            <img src="assets/images/gunung-panderman.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
                            <img src="assets/images/rekreasi-hawai.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
                            <img src="assets/images/rekreasi-jodipan.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
                            <img src="assets/images/rekreasi-wonosari.jpg" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Selengkapnya</span></a>
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
        <a href="#" class="btn btn-outline-dark-3 btn-more"><span>lihat lebih banyak</span><i class="la la-refresh"></i></a>
    </div><!-- End .more-container -->
</main><!-- End .main -->

<?= $this->endSection() ?>
