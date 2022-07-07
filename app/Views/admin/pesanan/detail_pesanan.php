<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/admin/pesanan">Pesanan</a></li>
                        <li class="breadcrumb-item active">Detail Pesanan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <blockquote class="quote-info mt-0 mb-0 ml-0">
                                <h5 id="tip">Detail Pesanan</h5>
                                <p>Berikut adalah informasi terkait detail pesanan</p>
                            </blockquote>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <form action="<?= base_url() ?>/admin/pesanan/insert" enctype="multipart/form-data"
                                    method="post" class="form-horizontal">
                                    <?= csrf_field() ?>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Kode Pesanan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Kode Pesanan"
                                                value="<?= $pesanan['kode_pesanan'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Waktu
                                            Pesanan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Waktu Pesanan"
                                                value="<?= $pesanan['date_pesanan'] ?>" disabled >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Member
                                            Pemesan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama Member Pemesan"
                                                value="<?= $pesanan['nama_member'] ?>" disabled >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Paket Wisata</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama Paket WIsata"
                                                value="<?= $pesanan['nama_paket'] ?>" disabled >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Harga Paket
                                            Wisata</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Harga Paket Wisata"
                                                value="<?= $pesanan['harga'] ?>" disabled >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Kuota Anggota
                                            Rombongan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Jumlah peserta"
                                                value="<?= $pesanan['jumlah_rombongan'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">No Telp
                                            Koordinator</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nomor Telp Koordinator"
                                                value="<?= $pesanan['no_hp'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama - Nama Peserta
                                            Wisata</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama - Nama Peserta Wisata"
                                                value="Agus Nur Hadi, Bagaskoro Anugerah, Nur Wahidah" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Metodee Pembayaran"
                                                name="metode_pembayaran" value="Transfer Bank BRI" disabled required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Status Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Status Pembayaran"
                                                name="status_pembayaran" value="Sudah Melakukan Pembayaran" disabled
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="https://www.jagel.id/api/listimage/v/Bukti-Kirim-Dan-Bukti-Transfer-0-2825bf08e67ee555.jpg"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <label for="inputName" class="col-sm-2 col-form-label">Bagaimana hasil
                                            konfirmasi pembayaran?</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <b>Pembayaran valid</b>, nominal bukti pembayaran sudah sesuai.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios3" value="option3">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    <b>Pembayaran tidak valid</b>, ada ketidaksesuaian pada pembayaran.
                                                </label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-success mt-5">Simpan Konfirmasi
                                                Pembayaran</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>