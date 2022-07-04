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
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/admin/jenis_wisata">Jenis Wisata</a></li>
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
                    <span style="color: red;"><?= $validation->listErrors() ?></span>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail jenis wisata</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <form action="<?= base_url() ?>/admin/jenis_wisata/<?= $jenis_wisata['id'] ?>" method="post" class="form-horizontal">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="id" value="<?= $jenis_wisata['id'] ?>">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Jenis Wisata</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Jenis wisata" name="jenis" value="<?= (old('jenis')) ? old('jenis') : $jenis_wisata['jenis'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rombongan" class="col-sm-2 col-form-label">Kode Jenis</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="kode_jenis" value="<?= (old('kode_jenis')) ? old('kode_jenis') : $jenis_wisata['kode_jenis'] ?>" required>
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