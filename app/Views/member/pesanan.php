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
                                <li> Isikan Data Tambahan</li>
                                <li> Pilih opsi pembayaran dan lakukan pembayaran sesuai dengan nominal
                                    tertera (bukti pembayaran mohon
                                    disimpan)</li>
                                <li> Unggah bukti pembayaran yang sebelumnya telah dilakukan.</li>
                                <li> Tunggu konfirmasi dari sistem bahwa pembayar Anda berhasil divalidasi dan
                                    setelahnya Anda akan dihubungi oleh admin kami.</li>
                            </ol>
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
                                                            <a href="<?= base_url() ?>/wisata/<?= $wisata['id'] ?>"><img
                                                                    src="<?= base_url('img/wisata/' . $wisata['img_paket_wisata']) ?>"
                                                                    alt="Product image"> </a>
                                                        </figure>
                                                        <h2 class="product-title w-100">
                                                            <a
                                                                href="<?= base_url() ?>/wisata/<?= $wisata['id'] ?>"><?= $wisata['nama_paket_wisata'] ?></a>
                                                            <br>
                                                            <span class="small text-muted pr-3"><i
                                                                    class="fa-solid fa-user-group fa-xs"></i>
                                                                <?= $wisata['jumlah_rombongan'] ?>
                                                                Orang</span><br> <span class="small text-muted"><i
                                                                    class="fa-solid fa-calendar-check"></i>
                                                                <?= $jadwal['date'] ?></span>
                                                        </h2>
                                                    </div>
                                                </td>
                                                <td class="text-left">Rp <?= $wisata['harga'] ?>,- </td>
                                                <td class="text-left">
                                                    <?php if ($pesanan['bayar'] == NULL) { ?>
                                                    <span class="text-danger"><i class="fa-regular fa-clock"></i>
                                                        Menunggu pembayaran</span>
                                                    <?php } else { ?>
                                                    <?php if ($pembayaran['status_bayar'] != 'Pembayaran berhasil') { ?>
                                                    <span class="text-danger"><i class="fa-regular fa-clock"></i>
                                                        <?= $pembayaran['status_bayar'] ?></span>
                                                    <?php } else { ?>
                                                    <span class="text-success"><i
                                                            class="fa-regular fa-circle-check"></i>
                                                        <?= $pembayaran['status_bayar'] ?></span>
                                                    <?php } ?>
                                                    <?php } ?>
                                                    <br><i class="fas fa-money-check text-info"></i><span class="small">
                                                        Kode Pesanan
                                                        : P00012</span>
                                                </td>
                                                <td class="price-col">
                                                    <div class="tagcloud">
                                                        <form action="" id="hapus-pesan" method="POST">
                                                            <input type="hidden" name="id"
                                                                value="<?= $pesanan['id'] ?>">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                        </form>
                                                        <?php if ($pesanan['bayar'] == NULL) { ?>
                                                        <a onclick="hapus_pesanan()"
                                                            class="btn btn-outline-primary btn-rounded btn-shadow"><i
                                                                class="fa-solid fa-trash-can"></i><span>Hapus</span></a>
                                                        <?php } ?>
                                                        <!-- <a href="#data-tambahan" data-toggle="modal"
                                                            class="btn btn-outline-primary text-dark btn-rounded btn-shadow"><i
                                                                class="fa-solid fa-pen-to-square"></i><span>Data
                                                                Tambahan</span></a> -->
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="#data-tambahan" data-toggle="modal"
                                        class="btn bg-primary text-white btn-rounded btn-shadow mb-2 mr-2"><i
                                            class="fa-solid fa-pen-to-square"></i><span>1. Data Tambahan</span></a>
                                    <a href="#opsi-pembayaran" data-toggle="modal"
                                        class="btn bg-primary text-white btn-rounded btn-shadow mb-2 mr-2"><i
                                            class="fa-solid fa-coins"></i><span>2. Pilih Opsi
                                            Pembayaran</span></a>
                                    <a href="#unggah-bukti-pembayaran" data-toggle="modal"
                                        class="btn bg-primary text-white btn-rounded btn-shadow mb-2"><i
                                            class="fa-solid fa-arrow-up-from-bracket "></i><span>3. Unggah Bukti
                                            Pembayaran</span></a>
                                </div>

                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
                                    <table class="table table-cart table-mobile">
                                        <thead>
                                            <tr>
                                                <th>Nama Wisata</th>
                                                <th>Harga</th>
                                                <th>Status Pembayaran</th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($history as $his => $val) { ?>
                                            <tr>
                                                <td class="product-col">
                                                    <div class="product">
                                                        <figure class="product-media">
                                                            <a href="#"><img
                                                                    src="<?= base_url('img/wisata/' . $val['img']) ?>"
                                                                    alt="Product image"> </a>
                                                        </figure>
                                                        <h2 class="product-title w-100">
                                                            <a href="#"><?= $val['nama_paket'] ?></a><br>
                                                            <span class="small text-muted pr-3"><i
                                                                    class="fa-solid fa-user-group fa-xs"></i>
                                                                <?= $val['jumlah_rombongan'] ?>
                                                                Orang</span><br> <span class="small text-muted"><i
                                                                    class="fa-solid fa-calendar-check"></i>
                                                                <?= $val['tgl_wisata'] ?></span>
                                                        </h2>
                                                    </div>
                                                </td>
                                                <td class="text-left">Rp <?= $val['total_biaya'] ?>,-</td>
                                                <td class="text-left">
                                                    <?php if ($val['status_bayar'] != 'Pembayaran berhasil') { ?>
                                                    <span class="text-danger"><i class="fa-regular fa-clock"></i>
                                                        <?= $val['status_bayar'] ?></span>
                                                    <?php } else { ?>
                                                    <span class="text-success"><i
                                                            class="fa-regular fa-circle-check"></i>
                                                        <?= $val['status_bayar'] ?></span>
                                                    <?php } ?>
                                                    <br><i class="fas fa-money-check text-info"></i><span class="small">
                                                        Kode Pembayaran
                                                        : B00012</span>
                                                </td>
                                                <!-- <td class="price-col">
                                                        <div class="tagcloud">
                                                            <a href="#detail-riwayat-pesanan" data-toggle="modal"
                                                                class="btn btn-outline-primary btn-rounded btn-shadow"><i
                                                                    class="fa-regular fa-eye"></i>Lihat
                                                                Detail</a>
                                                        </div>
                                                    </td> -->
                                            </tr>
                                            <?php } ?>
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
                    <h5 class="mt-2">Opsi Pembayaran</h5>
                    <h5 class="product-price mb-2 text-danger bg-gray p-2"> Nominal Pembayaran : <b>&nbsp;
                            Rp <?= $wisata['harga'] ?>,-</b>
                    </h5>
                    <div class="col-12">
                        <ul class="nav nav-pills justify-content-center" id="tabs-6" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="tab-21-tab" data-toggle="tab" href="#tab-21" role="tab"
                                    aria-controls="tab-22" aria-selected="false">Rekening Bank</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="tab-22-tab" data-toggle="tab" href="#tab-22" role="tab"
                                    aria-controls="tab-21" aria-selected="true">QRIS</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="tab-23-tab" data-toggle="tab" href="#tab-23" role="tab"
                                    aria-controls="tab-23" aria-selected="false">E-Wallet</a>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="tab-content-6">
                            <div class="tab-pane fade show active" id="tab-21" role="tabpanel"
                                aria-labelledby="tab-21-tab">
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
                            <div class="tab-pane fade " id="tab-22" role="tabpanel" aria-labelledby="tab-22-tab">
                                <img class="img-fluid" src="assets/images/qr-code.jpg" alt="">
                            </div>

                            <!-- <div class="tab-pane fade" id="tab-23" role="tabpanel" aria-labelledby="tab-23-tab">
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
                            </div> -->
                        </div>
                    </div>
                    <div class="row mt-5">

                        <div class="col-sm-6 mx-auto">
                            <a href="#" data-dismiss="modal" class="btn btn-primary btn-block ">
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
                    <form action="<?= base_url() ?>/pembayaran/upload" enctype="multipart/form-data" method="post"
                        id="uploadBukti">
                        <input type="hidden" name="id" value="<?= $pesanan['id'] ?>">
                        <input type="hidden" name="nama_paket" value="<?= $wisata['nama_paket_wisata'] ?>">
                        <input type="hidden" name="harga" value="<?= $wisata['harga'] ?>">
                        <h5 class="mb-4 mt-2">Unggah Bukti Pembayaran</h5>
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
                                    <span class="bg-gray ml-1 px-3">Kategori : <?= $jenis['jenis'] ?></span>
                                    <span class="bg-gray ml-1 px-3"><i class="fa-solid fa-user-group fa-xs"></i>
                                        <?= $wisata['jumlah_rombongan'] ?>
                                        Orang</span>
                                    <h3 class="mt-2"><?= $wisata['nama_paket_wisata'] ?></h3>
                                    <div class="product-price mb-2">
                                        Rp <?= $wisata['harga'] ?>,-
                                    </div>

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Pilih pembayaran yang sudah digunakan</span>

                                            <div class="w-100">

                                                <div class="input-group mb-2 mt-1">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <p class="fa-solid fa-coins text-primary px-1"></p>
                                                        </div>
                                                    </div>
                                                    <select class="form-control" name="metode_bayar" required>
                                                        <option disabled="disabled" selected="selected">Silahkan pilih
                                                        </option>
                                                        <option value="Bank BCA">Bank BCA</option>
                                                        <option value="Bank BRI">Bank BRI</option>
                                                        <option value="Bank Mandiri">Bank Mandiri</option>
                                                        <!-- <option value="GOPAY">GOPAY</option>
                                                        <option value="OVO">OVO</option>
                                                        <option value="DANA">DANA</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-cat">
                                            <span>Pastikan nominal pembayaran sudah benar. (format jpg, jpeg,
                                                png)</span>

                                        </div>
                                        <div class="custom-file mt-1">
                                            <input type="file" name="bukti_bayar" class="custom-file-input"
                                                id="customFile">
                                            <label class="custom-file-label" for="customFile" data-browse="Unggah">Pilih
                                                berkas</label>
                                        </div>

                                        <span id="validations"></span>
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
                                <a onclick="bukti_pembayaran()" class="btn btn-primary btn-block text-white ">
                                    <i class="fa-solid fa-paper-plane"></i>
                                    Kirim Bukti
                                </a>
                            </div>
                        </div>
                    </form>
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
                                <span class="bg-gray ml-1 px-3">Kategori : Gunung</span>
                                <span class="bg-gray ml-1 px-3"><i class="fa-solid fa-user-group fa-xs"></i> 3
                                    Orang</span>
                                <h3 class="mt-2">Trip Gunung Butak</h3>
                                <div class="product-price mb-2">
                                    Rp 360.000,-
                                </div>

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <p class="mb-1">Pembayaran Melalui :
                                            <i class="fa-solid fa-coins"></i>
                                            Bank Mandiri
                                        </p>
                                        <p>Status Pembayaran :
                                            <span class="text-success"><i class="fa-regular fa-circle-check"></i>
                                                Sudah
                                                Lunas</span>
                                        </p>
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
                            <a data-dismiss="modal" class="btn btn-primary text-white btn-block ">
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

<!-- Lengkapi Data -->
<div class="modal fade" id="data-tambahan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-box">
                    <form action="<?= base_url() ?>/pesanan/data" id="updateDataPesanan" method="post">
                        <input type="hidden" name="id" value="<?= $pesanan['id'] ?>">
                        <h3 class="mb-4 mt-2">Data Tambahan</h3>

                        <label class="text-primary">Nama Wisata</label>
                        <input type="text" class="form-control" required value="<?= $wisata['nama_paket_wisata'] ?>"
                            disabled>

                        <div class="row">
                            <div class="col-sm-6">
                                <label class="text-primary">Jumlah Peserta yang Ikut</label>
                                <div class="input-group mb-2">
                                    <!-- <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <p class="fa-solid fa-user-group fa-xs text-primary px-1"></p>
                                        </div>
                                    </div> -->
                                    <input id="jumlahPeserta" class="form-control" name="jumlah_rombongan" type="number"
                                        onchange="setName()" min="1" max="<?= $wisata['jumlah_rombongan'] ?>"
                                        value="<?= $pesanan['jumlah_rombongan'] ?>">
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <label class="text-primary">Tanggal Keberangkatan</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <p class="fa-solid fa-calendar-days text-primary px-1"></p>
                                        </div>
                                    </div>
                                    <select class="form-control" required>
                                        <option>Senin, 10 Juli 2022</option>
                                        <option>Selasa, 11 Juli 2022</option>
                                        <option>Rabu, 12 Juli 2022</option>
                                        <option>Kamis, 13 Juli 2022</option>
                                        <option>Jum'at, 14 Juli 2022</option>
                                        <option>Sabtu, 15 Juli 2022</option>
                                        <option>Minggu, 16 Juli 2022</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-sm-6">
                                <label class="text-primary">No HP Koordinator</label>
                                <input type="text" id="koordinator" class="form-control" name="no_hp" required
                                    value="<?= $pesanan['no_hp'] ?>">
                            </div>
                            <!-- <div class="col-sm-6">
                                <label class="text-primary">Nama Peserta ke-1</label>
                                <input type="text" class="form-control" name="nama_peserta" required value="Agus Faesal">
                            </div>
                            <div class="col-sm-6">
                                <label class="text-primary">Nama Peserta ke-2</label>
                                <input type="text" class="form-control" name="nama_peserta" required value="Nur Tahfid">
                            </div> -->

                        </div>
                        <div class="row" id="peserta">
                            <!-- <div class="col-sm-6">
                                <label class="text-primary">Nama Peserta ke-3</label>
                                <input type="text" class="form-control" name="nama_peserta" required value="Febrian Firdaus">
                            </div> -->
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <a href="#" data-dismiss="modal" class="btn btn-outline-primary-2 btn-block ">
                                    <i class="fa-solid fa-xmark"></i>
                                    Batal
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" onclick="simpanDataPesanan()" data-dismiss="modal"
                                    class="btn btn-primary btn-block ">
                                    <i class="fa-solid fa-check"></i>
                                    Simpan Perubahan
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).on('change', '.custom-file-input', function(event) {
    $(this).next('.custom-file-label').html(event.target.files[0].name);
})
</script>

<script>
console.log('test')
// console.log(document.getElementsByName('nama_peserta'))
function setName() {
    let jumlah = document.getElementById('jumlahPeserta').value
    console.log((jumlah))
    let arr = []
    let peserta = document.getElementsByName('nama_peserta[]')
    for (let index = 0; index < peserta.length; index++) {
        arr.push(peserta[index].value)
        console.log(arr)
    }
    document.getElementById('peserta').innerHTML = ''
    <?php $no = 0; ?>
    for (let index = 0; index < jumlah; index++) {
        document.getElementById('peserta').innerHTML += `<div class="col-sm-6">
                                <label class="text-primary">Nama Peserta ke-${index+1}</label>
                                <input type="text" class="form-control" name="nama_peserta[]" value="${(arr[index]) ? arr[index] : ''}">
                            </div>`
    }
}
</script>

<?= $this->endSection() ?>