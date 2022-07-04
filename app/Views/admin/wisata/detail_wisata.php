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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail paket wisata</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <form action="<?= base_url() ?>/admin/wisata/insert" enctype="multipart/form-data" method="post" class="form-horizontal">
                                    <?= csrf_field() ?>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama paket</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama paket" name="nama_paket" value="<?= (old('nama_paket')) ? old('nama_paket') : $wisata['nama_paket_wisata'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rombongan" class="col-sm-2 col-form-label">Jumlah rombongan</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="rombongan" value="<?= (old('rombongan')) ? old('rombongan') : $wisata['jumlah_rombongan'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" placeholder="Harga" pattern="[0-9]*" name="harga" value="<?= (old('harga')) ? old('harga') : $wisata['harga'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="id_jenis">
                                                <?php foreach ($list_jenis as $jenis => $value) { ?>
                                                    <option value="<?= $value['id'] ?>" <?= (((old('jenis')) ? old('jenis') : $wisata['id_jenis']) == $value['id']) ? 'selected' : '' ?> ><?= $value['jenis'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input type="text" disabled class="form-control" name="date" value="<?= (old('date')) ? old('date') : $wisata['date'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="image_paket">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-info">Submit</button>
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
                                class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
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

<?= $this->endSection() ?>