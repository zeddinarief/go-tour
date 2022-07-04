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
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/admin/pembayaran">Pembayaran</a></li>
                        <li class="breadcrumb-item active">Detail Pembayaran</li>
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
                                <h5 id="tip">Detail Pembayaran</h5>
                                <p>Berikut adalah informasi terkait detail pembayaran</p>
                            </blockquote>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <form action="<?= base_url() ?>/admin/pembayaran/insert" enctype="multipart/form-data"
                                    method="post" class="form-horizontal">
                                    <?= csrf_field() ?>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Kode Pesanan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Kode Pesanan"
                                                name="kode_pesanan" value="GN-0722P051" disabled required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Kode Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Kode Pembayaran"
                                                name="kode_pembayaran" value="GN-0722B051" disabled required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Paket Wisata</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama Paket WIsata"
                                                name="nama_wisata" value="Trip Gunung Butak" disabled required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Harga Paket
                                            Wisata</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Harga Paket Wisata"
                                                name="harga_wisata" value="GN-0722B051" disabled required>
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
                                        <label for="inputName" class="col-sm-2 col-form-label">Waktu
                                            Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Waktu Pembayaran"
                                                name="waktu_pembayaran" value="2 Juni 2022 14:34" disabled required>
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


                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-success mt-5 px-5">Kembali</button>
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