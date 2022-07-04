<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <blockquote class="quote-info mt-0 mb-0 ml-0">
                <h5 id="tip">Pembayaran</h5>
                <p>Berikut adalah informasi terkait pembayaran wisata yang dilakukan oleh seluruh member</p>
            </blockquote>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar pembayaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Pembayaran</th>
                                        <th>Kode Pesanan</th>
                                        <th>Nama Paket</th>
                                        <th>Harga Paket</th>
                                        <th>Status Pembayaran</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach ($daftar_pembayaran as $pembayaran => $value) { 
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $value['img_paket_wisata'] ?></td>
                                        <td><?= $value['kode_paket_wisata'] ?></td>
                                        <td><?= $value['nama_paket_wisata'] ?></td>
                                        <td><?= $value['jumlah_rombongan'] ?></td>
                                        <td><?= $value['harga'] ?></td>
                                        <td><?= $value['jenis'] ?></td>
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
                                        <th>Kode Pembayaran</th>
                                        <th>Kode Pesanan</th>
                                        <th>Nama Paket</th>
                                        <th>Harga Paket</th>
                                        <th>Status Pembayaran</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Aksi</th>
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