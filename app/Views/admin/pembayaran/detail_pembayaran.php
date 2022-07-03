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
                                        <label for="inputName" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Bukti Pembayaran"
                                                name="bukti_pembayaran" value="bukti-transfer.pdf" disabled required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Waktu Konfirmasi
                                            Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                placeholder="Waktu Konfirmasi Pembayaran" name="waktu_pembayaran"
                                                value="2 Juni 2022 14:34" disabled required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Apakah pembayaran sudah
                                            benar?</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="option1">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Pembayaran valid. Nominal bukti pembayaran sudah sesuai, konfirmasi
                                                    pembayaran member.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios2" value="option2">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Pembayaran valid. Nominal pembayaran lebih besar dari harga wisata,
                                                    konfirmasi
                                                    pembayaran dan perlu mengembalikan sebagian uang.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios3" value="option3">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    Pembayaran tidak valid. Nominal pembayaran kurang dari harga wisata
                                                    yang telah ditetapkan.
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                        <label for="rombongan" class="col-sm-2 col-form-label">Jumlah rombongan</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="rombongan" value=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" placeholder="Harga" pattern="[0-9]*"
                                                name="harga" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis</label>
                                        <div class="col-sm-10">
                                            <select name="jenis">
                                                <option value="Pantai">Pantai</option>
                                                <option value="Gunung">Gunung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="datetime-local" class="form-control" name="date" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="image_paket">
                                        </div>
                                    </div> -->

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