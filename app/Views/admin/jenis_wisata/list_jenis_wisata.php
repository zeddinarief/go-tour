<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <blockquote class="quote-info mt-0 mb-0 ml-0">
                <h5 id="tip">Jenis Wisata</h5>
                <p>Berikut adalah informasi jenis wisata yang merupakan induk atau klasifikasi dari data wisata</p>
            </blockquote>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php if (session()->getFlashdata('data_added') !== NULL) { ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('data_added') ?>
                    </div>
                    <?php } ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar jenis wisata</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="<?= base_url() ?>/admin/jenis_wisata/insert" style="margin-bottom: 10px;"
                                class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis wisata</th>
                                        <th>Kode</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach ($daftar_jenis_wisata as $jenis => $value) { 
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $value['jenis'] ?></td>
                                        <td><?= $value['kode_jenis'] ?></td>
                                        <td>
                                            <a href="/admin/jenis_wisata/<?= $value['id'] ?>" type="button"
                                                class="btn btn-block btn-primary">Detail</a>
                                            <a href="#hapus-data" data-toggle="modal" type="button"
                                                class="btn btn-block btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                            $no++; 
                                        } 
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis wisata</th>
                                        <th>Kode</th>
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