<?= $this->extend('member/template') ?>

<?= $this->section('content') ?>

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Beragam Wisata Tersedia<span>Jangan terus serius, mental juga perlu diurus
                    :D</span></h1>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="toolbox pt-2">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Menampilkan <span>9 dari 56</span> Wisata Tersedia
                            </div>
                        </div>

                        <div class="toolbox-right">
                            <div class="toolbox-sort">

                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control">
                                        <option value="popularity" selected="selected">Terbaru</option>
                                        <option value="rating">Terdahulu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products mb-3">
                        <div class="row justify-content-center">
                            <div class="product-item gunung col-6 col-md-4 col-lg-4">
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
                                        </div>
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Gunung Panderman</a></h3>
                                        <div class="product-price">
                                            <div class="out-price promo">Rp 150.000 </div>
                                            <span class="text-danger">&nbsp; Rp 120.000,-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item gunung col-6 col-md-4 col-lg-4">
                                <div class="product product-4">
                                    <figure class="product-media">
                                        <span class="product-label">Tersedia</span>
                                        <a href="#">
                                            <img src="assets/images/gunung-butak.jpg" alt="Product image"
                                                class="product-image">
                                        </a>
                                        <div class="product-action">
                                            <a href="detail-wisata.html"
                                                class="btn-product"><span>Selengkapnya</span></a>
                                        </div>
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Gunung Butak</a></h3>
                                        <div class="product-price">
                                            Rp 160.000,-
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item gunung col-6 col-md-4 col-lg-4">
                                <div class="product product-4">
                                    <figure class="product-media">
                                        <span class="product-label bg-dark text-white">Belum Tersedia</span>
                                        <a href="#">
                                            <img src="assets/images/gunung-kawi.jpg" alt="Product image"
                                                class="product-image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick view"><span>Selengkapnya</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Gunung Kawi</a></h3>
                                        <div class="out-price ">
                                            Rp 140.000,-
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="product-item pantai col-6 col-md-4 col-lg-4">
                                <div class="product product-4">
                                    <figure class="product-media">
                                        <span class="product-label bg-danger text-white">Promo</span>
                                        <a href="#">
                                            <img src="assets/images/pantai-gatra.jpg" class="product-image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick view"><span>Selengkapnya</span></a>
                                        </div>
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Pantai Gatra</a></h3>
                                        <div class="product-price">
                                            <div class="out-price promo">Rp 150.000 </div>
                                            <span class="text-danger">&nbsp; Rp 120.000,-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item pantai col-6 col-md-4 col-lg-4">
                                <div class="product product-4">
                                    <figure class="product-media">
                                        <span class="product-label bg-danger text-white">Promo</span>
                                        <a href="#">
                                            <img src="assets/images/pantai-clungup.jpg" class="product-image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick view"><span>Selengkapnya</span></a>
                                        </div>
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Pantai Clungup</a></h3>
                                        <div class="product-price">
                                            <div class="out-price promo">Rp 110.000 </div>
                                            <span class="text-danger">&nbsp; Rp 90.000,-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item pantai col-6 col-md-4 col-lg-4">
                                <div class="product product-4">
                                    <figure class="product-media">
                                        <span class="product-label bg-danger text-white">Promo</span>
                                        <a href="#">
                                            <img src="assets/images/pantai-ngliyep.jpg" class="product-image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick view"><span>Selengkapnya</span></a>
                                        </div>
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Pantai Ngliyep</a></h3>
                                        <div class="product-price">
                                            <div class="out-price promo">Rp 120.000 </div>
                                            <span class="text-danger">&nbsp; Rp 110.000,-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item rekreasi col-6 col-md-4 col-lg-4">
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
                                        </div>
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Hawaii Waterpark</a></h3>
                                        <div class="product-price">
                                            <span class="text-danger">&nbsp; Rp 120.000,-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item rekreasi col-6 col-md-4 col-lg-4">
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
                                        </div>
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Kampung Warna Warni & 3D</a>
                                        </h3>
                                        <div class="product-price">
                                            Rp 60.000,-
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item rekreasi col-6 col-md-4 col-lg-4">
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
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Trip Agro Wonosari</a></h3>
                                        <div class="out-price ">
                                            Rp 70.000,-
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                                    aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Sebelumnya
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">... &emsp; 6</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Selanjutnya<span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop pt-2">
                        <div class="widget widget-clean">
                            <label>Filter :</label>
                            <a href="#" class="sidebar-filter-clear">Hapus filter</a>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                                    aria-controls="widget-1">
                                    Kategori
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-1">
                                                <label class="custom-control-label" for="cat-1">Semua</label>
                                            </div>
                                            <span class="item-count">56</span>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-2">
                                                <label class="custom-control-label" for="cat-2">Gunung</label>
                                            </div>
                                            <span class="item-count">11</span>
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
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true"
                                    aria-controls="widget-4">
                                    Urutkan Berdasarkan
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-4">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-1">
                                                <label class="custom-control-label" for="brand-1">Promo</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-2">
                                                <label class="custom-control-label" for="brand-2">Populer</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-3">
                                                <label class="custom-control-label" for="brand-3">Rating</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-4">
                                                <label class="custom-control-label" for="brand-4">Harga : Murah
                                                    ke Mahal</label>
                                            </div>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-5">
                                                <label class="custom-control-label" for="brand-5">Harga : Mahal
                                                    ke Murah</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true"
                                    aria-controls="widget-5">
                                    Harga
                                </a>
                            </h3>

                            <div class="collapse show" id="widget-5">
                                <div class="widget-body">
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
                </aside>
            </div>
        </div>
    </div>
</main>


<?= $this->endSection() ?>