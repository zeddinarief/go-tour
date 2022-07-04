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
                    <h3 class="intro-subtitle text-primary">VITAMIN SEA</h3>
                    <h1 class="intro-title">Promo 30% <br>Trip Pantai Selatan</h1>


                    <a href="category.html" class="btn btn-outline-primary-2">
                        <span>SELENGKAPNYA</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="intro-slide" style="background-image: url(assets/images/slide-2.png);">
                <div class="container intro-content">
                    <h3 class="intro-subtitle text-white">SUNRISE IN JULY</h3>
                    <h1 class="intro-title text-white">Promo 30% <br>Trip Gunung Panderman</h1>

                    <a href="category.html" class="btn btn-primary min-width-sm">
                        <span>SELENGKAPNYA</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <span class="slider-loader"></span>
    </div>

    <div class="container">
        <div class="toolbox toolbox-filter">
            <div class="toolbox-left">
                <a href="#" class="filter-toggler">Filter</a>

            </div>
            <div class="toolbox-right">
                <ul class="nav-filter product-filter">
                    <li class="active"><a href="#" data-filter="*">Semua</a></li>
                    <li><a href="#" data-filter=".gunung">Gunung</a></li>
                    <li><a href="#" data-filter=".pantai">Pantai</a></li>
                    <li><a href="#" data-filter=".rekreasi">Rekreasi</a></li>
                </ul>
            </div>
        </div>

        <div class="widget-filter-area" id="product-filter-area">
            <a href="#" class="widget-filter-clear">Reset filter</a>

            <div class="filter-area-wrapper">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h3 class="widget-title">
                                Kategori :
                            </h3>

                            <div class="filter-items filter-items-count">
                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-1">
                                        <label class="custom-control-label" for="cat-1">Semua</label>
                                    </div>
                                    <span class="item-count">50</span>
                                </div>

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-2">
                                        <label class="custom-control-label" for="cat-2">Gunung</label>
                                    </div>
                                    <span class="item-count">5</span>
                                </div>

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-3">
                                        <label class="custom-control-label" for="cat-3">Pantai</label>
                                    </div>
                                    <span class="item-count">12</span>
                                </div>

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-4">
                                        <label class="custom-control-label" for="cat-4">Rekreasi</label>
                                    </div>
                                    <span class="item-count">32</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h3 class="widget-title">
                                Urutkan berdasarkan :
                            </h3>

                            <div class="filter-items">
                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" checked id="sort-1"
                                            name="sortby">
                                        <label class="custom-control-label" for="sort-1">Promo</label>
                                    </div>
                                </div>

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-2" name="sortby">
                                        <label class="custom-control-label" for="sort-2">Populer</label>
                                    </div>
                                </div>

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-3" name="sortby">
                                        <label class="custom-control-label" for="sort-3">Rating</label>
                                    </div>
                                </div>

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-4" name="sortby">
                                        <label class="custom-control-label" for="sort-4">Terbaru</label>
                                    </div>
                                </div>

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-5" name="sortby">
                                        <label class="custom-control-label" for="sort-5">Harga: Murah ke
                                            Mahal</label>
                                    </div>
                                </div>

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="radio" class="custom-control-input" id="sort-6" name="sortby">
                                        <label class="custom-control-label" for="sort-6">Harga: Mahal ke
                                            Murah</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h3 class="widget-title">
                                Harga :
                            </h3>

                            <div class="filter-price">
                                <div class="filter-price-text">
                                    Rentang Harga:
                                    <span id="filter-price-range"></span>
                                </div>

                                <div id="price-slider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="products-container" data-layout="fitRows">

            <?php 
                foreach ($list_wisata as $wisata => $value) { 
            ?>
            <div class="product-item gunung col-6 col-md-4 col-lg-3">
                <div class="product product-4">
                    <figure class="product-media">
                        <!-- <span class="product-label bg-danger text-white">Promo</span> -->
                        <a href="<?= base_url() ?>/wisata/<?= $value['kode_paket_wisata'] ?>">
                            <img src="<?= base_url('img/wisata/' . $wisata['img_paket_wisata']) ?>" alt="Product image" class="product-image">
                        </a>
                        <div class="product-action">
                            <a href="<?= base_url() ?>/wisata/<?= $value['kode_paket_wisata'] ?>" class="btn-product"
                                title="Quick view"><span>Selengkapnya</span></a>
                        </div>
                    </figure>
                    <div class="product-body">
                        <h3 class="product-title"><a href="<?= base_url() ?>/wisata/<?= $value['kode_paket_wisata'] ?>"><?= $value['nama_paket_wisata'] ?></a>
                        </h3>
                        <div class="product-price">
                            Rp <?= $value['harga'] ?>,-
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>

    <div class="more-container text-center mt-0 mb-7">
        <a href="<?= base_url() ?>/wisata" class="btn btn-outline-dark-3 btn-more"><span>lihat lebih banyak</span><i
                class="la la-refresh"></i></a>
    </div>
</main>

<?= $this->endSection() ?>