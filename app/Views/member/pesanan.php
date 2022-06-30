<?= $this->extend('member/template') ?>

<?= $this->section('content') ?>

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Pesanan Saya<span>Data Pemesanan & Pembayaran</span></h1>
        </div>
    </div>


    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row mt-4">
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cara Pemesanan & Pembayaran</h3>
                            <ol class="mt-1" style="margin-left: 15px; list-style-type: decimal;">
                                <li>
                                    Pilih salah satu paket wisata.
                                </li>
                                <li> Unggah bukti pembayaran yang sesuai dengan nominal tertera pada paket wisata.</li>
                                <li> Tunggu konfirmasi dari sistem bahwa pembayar Anda berhasil divalidasi.</li>
                            </ol>
                            <a href="#opsi-pembayaran" data-toggle="modal"
                                class="btn btn-outline-primary-2 btn-order btn-block"><i class="fa-solid fa-coins"></i>
                                Pilih Opsi
                                Pembayaran</a>

                        </div>
                    </aside>
                    <div class="col-lg-9">
                        <div class="">
                            <ul class="nav nav-tabs nav-tabs-bg" id="tabs-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-1-tab" data-toggle="tab" href="#tab-1" role="tab"
                                        aria-controls="tab-1" aria-selected="true">PEMESANAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-2-tab" data-toggle="tab" href="#tab-2" role="tab"
                                        aria-controls="tab-2" aria-selected="false">RIWAYAT PEMBAYARAN</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-border" id="tab-content-1">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                                    aria-labelledby="tab-1-tab">
                                    <table class="table table-cart table-mobile">
                                        <thead>
                                            <tr>
                                                <th>Nama Wisata</th>
                                                <th>Harga</th>
                                                <th>Status Pembayaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-col">
                                                    <div class="product">
                                                        <figure class="product-media">
                                                            <a href="<?= base_url() ?>/wisata/detail"><img
                                                                    src="assets/images/gunung-panderman.jpg"
                                                                    alt="Product image"> </a>
                                                        </figure>
                                                        <h2 class="product-title w-100">
                                                            <a href="<?= base_url() ?>/wisata/detail">Trip Gunung
                                                                Panderman</a>
                                                        </h2>
                                                    </div>
                                                </td>
                                                <td class="text-left">Rp 350.000,-</td>
                                                <td class="text-left">
                                                    <span class="text-danger"><i class="fa-regular fa-clock"></i> Belum
                                                        Lunas</span>
                                                </td>
                                                <td class="price-col">
                                                    <div class="tagcloud">
                                                        <a href="#"
                                                            class="btn btn-outline-primary btn-rounded btn-shadow"><i
                                                                class="fa-solid fa-trash-can"></i><span>Hapus</span></a>
                                                        <a href="#unggah-bukti-pembayaran" data-toggle="modal"
                                                            class="btn bg-primary text-white btn-rounded btn-shadow"><i
                                                                class="fa-solid fa-arrow-up-from-bracket"></i><span>Bukti
                                                                Pembayaran</span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
                                    <table class="table table-cart table-mobile">
                                        <thead>
                                            <tr>
                                                <th>Nama Wisata</th>
                                                <th>Harga</th>
                                                <th>Status Pembayaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-col">
                                                    <div class="product">
                                                        <figure class="product-media">
                                                            <a href="#"><img src="assets/images/gunung-panderman.jpg"
                                                                    alt="Product image"> </a>
                                                        </figure>
                                                        <h2 class="product-title w-100">
                                                            <a href="#">Trip Gunung Panderman</a>
                                                        </h2>
                                                    </div>
                                                </td>
                                                <td class="text-left">Rp 350.000,-</td>
                                                <td class="text-left">
                                                    <span class="text-success"><i
                                                            class="fa-regular fa-circle-check"></i> Sudah
                                                        Lunas</span>
                                                </td>
                                                <td class="price-col">
                                                    <div class="tagcloud">
                                                        <a href="#detail-riwayat-pesanan" data-toggle="modal"
                                                            class="btn btn-outline-primary btn-rounded btn-shadow"><i
                                                                class="fa-regular fa-eye"></i>Lihat
                                                            Detail</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</main>

<!-- Opsi Pembayaran-->
<div class="modal fade" id="opsi-pembayaran" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-box">
                    <h5 class="mb-4 mt-2">Opsi Pembayaran</h5>
                    <div class="col-12">
                        <ul class="nav nav-pills justify-content-center" id="tabs-6" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-21-tab" data-toggle="tab" href="#tab-21" role="tab"
                                    aria-controls="tab-21" aria-selected="true">QRIS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-22-tab" data-toggle="tab" href="#tab-22" role="tab"
                                    aria-controls="tab-22" aria-selected="false">Rekening Bank</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-23-tab" data-toggle="tab" href="#tab-23" role="tab"
                                    aria-controls="tab-23" aria-selected="false">E-Wallet</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-6">
                            <div class="tab-pane fade show active" id="tab-21" role="tabpanel"
                                aria-labelledby="tab-21-tab">
                                <img class="img-fluid"
                                    src="https://baitulmal.acehprov.go.id/assets/img/news/paperless_-bayar-zakat-ke-bma-bisa-via-qris.jpeg"
                                    alt="">
                            </div>
                            <div class="tab-pane fade" id="tab-22" role="tabpanel" aria-labelledby="tab-22-tab">
                                <div class="row mt-3">
                                    <div class="col-md-2 col-12">
                                        <b>BCA</b>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        1029830128
                                    </div>
                                    <div class="col-md-6 col-12">
                                        A/N : Nur Hamidah
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-2 col-12">
                                        <b>BRI</b>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        1238719273012730
                                    </div>
                                    <div class="col-md-6 col-12">
                                        A/N : Nur Hamidah
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-2 col-12">
                                        <b>MANDIRI</b>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        1823701927301
                                    </div>
                                    <div class="col-md-6 col-12">
                                        A/N : Nur Hamidah
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab-23" role="tabpanel" aria-labelledby="tab-23-tab">
                                <div class="row mt-3">
                                    <div class="col-md-2 col-12">
                                        <b>GOPAY</b>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        0867712931823
                                    </div>
                                    <div class="col-md-6 col-12">
                                        A/N : Nur Hamidah
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-2 col-12">
                                        <b>OVO</b>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        0867712931823
                                    </div>
                                    <div class="col-md-6 col-12">
                                        A/N : Nur Hamidah
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-2 col-12">
                                        <b>DANA</b>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        0867712931823
                                    </div>
                                    <div class="col-md-6 col-12">
                                        A/N : Nur Hamidah
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">

                        <div class="col-sm-6 mx-auto">
                            <a href="#" class="btn btn-primary btn-block ">
                                <i class="fa-solid fa-xmark ml-0"></i>
                                Tutup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Unggah Bukti Pembayaran Pesanan-->
<div class="modal fade" id="unggah-bukti-pembayaran" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-box">
                    <h5 class="mb-4 mt-2">Unggah Bukti Pembayaran</h5>
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
                                <span class="bg-gray ml-1 px-3">12 Jan 2022</span>
                                <span class="bg-gray ml-1 px-3">ID : GN12120122</span>
                                <h3 class="mt-2">Trip Gunung Butak</h3>
                                <div class="product-price mb-2">
                                    Rp 360.000,-
                                </div>

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Pastikan nominal pembayaran sudah benar. (format jpg, jpeg, png,
                                            atau pdf)</span>

                                    </div>
                                    <div class="custom-file mt-2">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <a href="#" data-dismiss="modal" class="btn btn-outline-primary-2 btn-block ">
                                <i class="fa-solid fa-xmark"></i>
                                Batal
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary btn-block ">
                                <i class="fa-solid fa-paper-plane"></i>
                                Kirim Bukti
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lihat Detail Riwayat Pesanan-->
<div class="modal fade" id="detail-riwayat-pesanan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-box">
                    <h5 class="mb-4 mt-2">Riwayat Pemesanan</h5>
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
                                <span class="bg-gray ml-1 px-3">12 Jan 2022</span>
                                <span class="bg-gray ml-1 px-3">ID : GN12120122</span>
                                <h3 class="mt-2">Trip Gunung Butak</h3>
                                <div class="product-price mb-2">
                                    Rp 360.000,-
                                </div>

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Status Pembayaran :</span>
                                        <span class="text-success"><i class="fa-regular fa-circle-check"></i>
                                            Sudah
                                            Lunas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <a href="#" data-dismiss="modal" class="btn btn-outline-primary-2 btn-block ">
                                <i class="fa-regular fa-eye"></i>
                                Bukti Pembayaran
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary btn-block ">
                                <i class="icon-close ml-0"></i>
                                Tutup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>