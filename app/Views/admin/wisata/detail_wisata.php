<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/admin/wisata">Wisata</a></li>
                        <li class="breadcrumb-item active">Detail</li>
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
                    <?php if (session()->getFlashdata('data_edited') !== NULL) { ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('data_edited') ?>
                    </div>
                    <?php } ?>
                    <?php foreach ($validation->getErrors() as $err => $val) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $val ?>
                    </div>
                    <?php } ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail paket wisata</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <form action="<?= base_url() ?>/admin/wisata/<?= $wisata['id'] ?>"
                                    enctype="multipart/form-data" method="post" class="form-horizontal">
                                    <?= csrf_field() ?>

                                    <input type="hidden" name="id" value="<?= $wisata['id'] ?>">
                                    <input type="hidden" name="old_image_paket"
                                        value="<?= $wisata['img_paket_wisata'] ?>">
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <img class="img-fluid pr-5"
                                                src="<?= base_url('img/wisata/' . $wisata['img_paket_wisata']) ?>"
                                                alt="">
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Nama
                                                    paket</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Nama paket"
                                                        name="nama_paket"
                                                        value="<?= (old('nama_paket')) ? old('nama_paket') : $wisata['nama_paket_wisata'] ?>"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="rombongan" class="col-sm-2 col-form-label">Jumlah
                                                    rombongan</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="rombongan"
                                                        value="<?= (old('rombongan')) ? old('rombongan') : $wisata['jumlah_rombongan'] ?>"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                                <div class="col-sm-10">
                                                    <input type="tel" class="form-control" placeholder="Harga"
                                                        pattern="[0-9]*" name="harga"
                                                        value="<?= (old('harga')) ? old('harga') : $wisata['harga'] ?>"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Jenis</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="id_jenis">
                                                        <?php foreach ($list_jenis as $jenis => $value) { ?>
                                                        <option value="<?= $value['id'] ?>"
                                                            <?= (((old('jenis')) ? old('jenis') : $wisata['id_jenis']) == $value['id']) ? 'selected' : '' ?>>
                                                            <?= $value['jenis'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Tanggal</label>
                                                <div class="col-sm-10">
                                                    <input type="text" disabled class="form-control" name="date"
                                                        value="<?= (old('date')) ? old('date') : $wisata['date'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Ubah Gambar Wisata</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="image_paket">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10 mt-4">
                                                    <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jadwal Keberangkatan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="<?= base_url() ?>/admin/jenis_wisata/insert" style="margin-bottom: 10px;"
                                class="btn btn-info" data-toggle="modal" data-target="#jadwal-wisata"><i
                                    class="fa fa-plus"></i> Tambah</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
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

<div class="modal fade" id="gambar-wisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NAMA-WISATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pilih gambar wisata yang ingin digunakan</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="jadwal-wisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tanggal Operasional Wiasta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <!-- <div class="form-group">
                            <label for="exampleFormControlSelect1">Jumlah Hari Per-Operasional</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1 Hari</option>
                                <option>2 hari</option>
                                <option>3 Hari</option>
                                <option>4 Hari</option>
                                <option>5 hari</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="selectDate">Pilih Tanggal Operasional Wisata</label> <br>
                            <input id="selectDate" type="text" class="form-control " name="datefilter" value="" />
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" name="submit" type="submit">Simpan Data</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>