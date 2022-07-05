<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <!-- <blockquote class="quote-info mt-0 mb-0 ml-0">
                <h5 id="tip">Wisata</h5>
                <p>Berikut adalah informasi wisata yang erupakan lokasi tertentu yang digunakan sebagai obyek wisata
                    yang akan dikunjungi oleh member</p>
            </blockquote> -->
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
                            <h3 class="card-title">Daftar paket wisata</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="<?= base_url() ?>/admin/wisata/insert" style="margin-bottom: 10px;"
                                class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Kode</th>
                                        <th>Nama paket</th>
                                        <th>Jumlah rombongan</th>
                                        <th>Harga</th>
                                        <th>Jenis</th>
                                        <th>Tanggal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach ($list_pesanan as $pesanan => $value) { 
                                    ?>
                                    <tr>
                                        
                                    </tr>
                                    <?php
                                            $no++; 
                                        } 
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Kode</th>
                                        <th>Nama paket</th>
                                        <th>Jumlah rombongan</th>
                                        <th>Harga</th>
                                        <th>Jenis</th>
                                        <th>Tanggal</th>
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