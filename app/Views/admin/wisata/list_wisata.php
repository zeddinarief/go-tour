<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <blockquote class="quote-info mt-0 mb-0 ml-0">
                <h5 id="tip">Wisata</h5>
                <p>Berikut adalah informasi wisata yang erupakan lokasi tertentu yang digunakan sebagai obyek wisata
                    yang akan dikunjungi oleh member</p>
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
                                        foreach ($daftar_wisata as $wisata => $value) { 
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td style="max-width:60px"><img src="<?= base_url('img/wisata/' . $value['img_paket_wisata']) ?>"
                                                class="img-fluid" alt=""></td>
                                        <!-- <td><?= $value['img_paket_wisata'] ?></td> -->
                                        <td><?= $value['kode_paket_wisata'] ?></td>
                                        <td><?= $value['nama_paket_wisata'] ?></td>
                                        <td><?= $value['jumlah_rombongan'] ?></td>
                                        <td><?= $value['harga'] ?></td>
                                        <td><?= $value['id_jenis'] ?></td>
                                        <td><?= $value['date'] ?></td>
                                        <td>
                                            <a href="/admin/wisata/<?= $value['id'] ?>" type="button"
                                                class="btn btn-block btn-primary">Detail</a>
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