<?= $this->extend('member/template') ?>

<?= $this->section('content') ?>

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/wisata">Paket Wisata</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $wisata['nama_paket_wisata'] ?></li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-gallery">

                            <figure class="product-main-image">
                                <img id="product-zoom"
                                    src="<?= base_url('img/wisata/' . $wisata['img_paket_wisata']) ?>"
                                    data-zoom-image="<?= base_url('img/wisata/' . $wisata['img_paket_wisata']) ?>"
                                    alt="product image">
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-8 pl-4">
                        <div class="product-details">
                            <span class="bg-gray ml-1 px-3">Kategori : <?= $jenis_wisata['jenis'] ?></span>
                            <span class="bg-gray ml-1 px-3"><i class="fa-solid fa-user-group fa-xs"></i>
                                <?= $wisata['jumlah_rombongan'] ?>
                                Orang</span>
                            <h2 class="mt-2"><?= $wisata['nama_paket_wisata'] ?></h2>

                            <!-- <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                </div>
                                <a class="ratings-text" href="#product-review-link" id="review-link">( 5
                                    Ulasan
                                    )</a>
                            </div> -->

                            <div class="product-price">
                                Rp <?= $wisata['harga'] ?>,-
                            </div>

                            <!-- <div class="product-content">
                                <p>Gunung Butak adalah gunung stratovolcano yang terletak di perbatasan
                                    Kabupaten Malang dan Kabupaten Blitar, Jawa Timur, Indonesia. Gunung Butak
                                    terletak berdekatan dengan Gunung Kawi. Tidak diketemukan catatan sejarah
                                    atas erupsi dari Gunung Butak sampai saat ini.
                                </p>
                            </div> -->

                            <div class="product-details-action mt-5">
                                <a href="#pesan-wisata" data-toggle="modal" class="btn-product btn-cart"><span>Pesan
                                        Paket
                                        Wisata</span></a>
                            </div>

                            <!-- <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Kategori :</span>
                                    <a class="text-uppercase" href="#"><?= $jenis_wisata['jenis'] ?></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                            role="tab" aria-controls="product-desc-tab" aria-selected="true">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab"
                            aria-controls="product-info-tab" aria-selected="false">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab"
                            role="tab" aria-controls="product-shipping-tab" aria-selected="false">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab"
                            role="tab" aria-controls="product-review-tab" aria-selected="false">Review (5)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                        aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Deskripsi Wisata Gunung Butak</h3>
                            <p>Gunung Butak adalah gunung stratovolcano yang terletak di perbatasan Kabupaten
                                Malang dan Kabupaten Blitar, Jawa Timur, Indonesia. Gunung Butak terletak
                                berdekatan dengan Gunung Kawi. Tidak diketemukan catatan sejarah atas erupsi
                                dari Gunung Butak sampai saat ini.[1] Gunung ini berada pada posisi -7,922566˚
                                dan 112,451688˚ dengan ketinggial 2.868 mdpl(9,409 ft).</p> <br>
                            <h3>Informasi Tambahan</h3>
                            <ul>
                                <li>Ketinggian : 2.868 m (9.409 kaki)</li>
                                <li>Koordinat : 7.92°S 112.45°E </li>
                                <li>Letak : diantara Kabupaten Malang dan Kabupaten Blitar Jawa Timur, Indonesia
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-info-tab" role="tabpanel"
                        aria-labelledby="product-info-link">
                        <div class="product-desc-content">
                            <h3>Lokasi Wisata Gunung Butak</h3>
                            <p>Gunung yang masuk gugusan Gunung Putri ini berada di perbatasan Kabupaten Blitar
                                dan Malang. Meskipun tergolong cukup rendah di antara gunung lainnya di Jawa
                                Timur, Gunung Butak juga menawarkan trek yang menantang. Tersedia beberapa jalur
                                resmi pendakian Gunung Butak, yaitu jalur pendakian via Panderman dan Sirah
                                Kencong.</p> <br>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15807.044726629247!2d112.44996619999999!3d-7.91999585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78861262728a81%3A0xe6b4902a08057403!2sMt.%20Butak!5e0!3m2!1sen!2sid!4v1656376665324!5m2!1sen!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel"
                        aria-labelledby="product-shipping-link">
                        <div class="product-desc-content">
                            <h3>Fasilitas</h3>
                            <ul>
                                <li>Bisa digunakan untuk 3 orang.</li>
                                <li>Akomodasi perjalanan</li>
                                <li>Tiket masuk </li>
                                <li>Pelaksanaan berdasarkan jadwal yang tersedia
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel"
                        aria-labelledby="product-review-link">
                        <div class="reviews">
                            <h3>Ulasan (5)</h3>
                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Nur Hidayah</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 90%;"></div>
                                            </div>
                                        </div>
                                        <span class="review-date">4 hari lalu</span>
                                    </div>
                                    <div class="col">
                                        <h4>Sangat Menarik dan Menantang</h4>
                                        <div class="review-content">
                                            <p>Ekspektasi dan realita sudah terealisasikan di tempat ini,
                                                persiapan harus bener2 matang dan jangan sampe ada yang
                                                kelupaan. jangan lupa taati semua peraturan disana, jangan aneh2
                                                :D</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Bagaskoro</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 90%;"></div>
                                            </div>
                                        </div>
                                        <span class="review-date">5 hari lalu</span>
                                    </div>
                                    <div class="col">
                                        <h4>Recomended untuk dicoba guys</h4>

                                        <div class="review-content">
                                            <p>Untuk yang pengen lihat sunrise, SANGAT DIANJURKAN KESINI YA.
                                                kalian gak bakal nyesel, salam pendakian #salampendaakian
                                                #travelindonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Intan Pratiwi</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                        <span class="review-date">6 hari lalu</span>
                                    </div>
                                    <div class="col">
                                        <h4>Tempat yang bersahabat dan tidak ada gangguan mistis</h4>

                                        <div class="review-content">
                                            <p>Pokoknya kalian gak melanggar aturan2 yang udah disediain pasti
                                                akan aman, tapi kalo aneh2 ya ditanggung sendiri ya ges ya
                                                wkwkwk</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Maulana Hakim</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 90%;"></div>
                                            </div>
                                        </div>
                                        <span class="review-date">7 hari lalu</span>
                                    </div>
                                    <div class="col">
                                        <h4>Sering Kesini dan Selalu Takjub</h4>
                                        <div class="review-content">
                                            <p>udah 10x lebih kesini dan gak pernah nyesel buat main ke tempat
                                                ini. Sunrise nya yang paling berkesan. dan tambahannya ketemu
                                                jodoh disini, wkwkwk bisa dicoba buat yang nyari jodoh, siapa
                                                tahu ketemu juga :D</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Galih Fatih</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <span class="review-date">8 hari lalu</span>
                                    </div>
                                    <div class="col">
                                        <h4>Kekayaan Alam Indonesia</h4>
                                        <div class="review-content">
                                            <p>Kata orang-orang sih bagus, akhirnya nyoba main sama temen2 dan
                                                akhirnya... TAKJUB & HERAN, SUMPAH BAGUS BANGET. Tapi ya tetep
                                                pengunjungnya yang gak bisa jaga lingkungan alam yang udah
                                                bagus. sampah masih dimana-mana</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</main>

<!-- Pesan Wisata-->
<div class="modal fade" id="pesan-wisata" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-box pb-3">
                    <h5 class="mb-4 mt-2">Pemesanan Paket Wisata</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-gallery">
                                <figure class="product-main-image">
                                    <img id="product-zoom" src="assets/images/gunung-butak.jpg"
                                        data-zoom-image="assets/images/gunung-butak.jpg" alt="product image">
                                </figure>

                            </div>
                        </div>

                        <div class="col-md-8 pl-4">
                            <div class="product-details">
                                <span class="bg-gray ml-1 px-3">Kategori : <?= $jenis_wisata['jenis'] ?></span>
                                <span class="bg-gray ml-1 px-3"><i class="fa-solid fa-user-group fa-xs"></i>
                                    <?= $wisata['jumlah_rombongan'] ?>
                                    Orang</span>
                                <h3 class="mt-2"><?= $wisata['nama_paket_wisata'] ?></h3>
                                <div class="product-price mb-2">
                                    Rp <?= $wisata['harga'] ?>,-
                                </div>


                                <div class="product-cat">
                                    <p class="mb-1">Pilih tanggal wisata Anda :</p>
                                    <div class="w-100">
                                        <label class="sr-only" for="inlineFormInputGroup">Pilih tanggal wisata Anda
                                            :</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <p class="fa-solid fa-calendar-days text-primary px-1"></p>
                                                </div>
                                            </div>
                                            <select class="form-control" required>
                                                <option disabled="disabled" selected="selected">Silahkan pilih</option>
                                                <option>Senin, 10 Juli 2022</option>
                                                <option>Selasa, 11 Juli 2022</option>
                                                <option>Rabu, 12 Juli 2022</option>
                                                <option>Kamis, 13 Juli 2022</option>
                                                <option>Jum'at, 14 Juli 2022</option>
                                                <option>Sabtu, 15 Juli 2022</option>
                                                <option>Minggu, 16 Juli 2022</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <a href="#" data-dismiss="modal" class="btn btn-outline-primary-2 btn-block  mb-2">
                                <i class="icon-close ml-0"></i>
                                Batal
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= base_url() ?>/pesanan" class="btn btn-primary btn-block mb-2 ">
                                <i class="icon-shopping-cart"></i>
                                Lakukan Pemesanan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>