<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <blockquote class="quote-info mt-0 mb-0 ml-0">
                <h5 id="tip">Dashbord</h5>
                <p>Berikut adalah informasi terkait data pada aplikasi</p>
            </blockquote>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $users ?></h3>

                            <p>Jumlah Member</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users pl-1">&nbsp;</i>
                        </div>
                        <a href="<?= base_url() ?>/admin/member" class="small-box-footer"><i class="far fa-eye"></i> Selengkapnya</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $wisatas ?></h3>

                            <p>Jumlah Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-map-marked-alt pl-1"></i>
                        </div>
                        <a href="<?= base_url() ?>/admin/wisata" class="small-box-footer"><i class="far fa-eye"></i> Selengkapnya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $pesanans ?></h3>

                            <p>Jumlah Pesanan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-bag pl-2"></i>
                        </div>
                        <a href="<?= base_url() ?>/admin/pesanan" class="small-box-footer"><i class="far fa-eye"></i> Selengkapnya</a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3><?= $pembayarans ?></h3>

                            <p>Jumlah Pembayaran</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comments-dollar pl-1"></i>
                        </div>
                        <a href="<?= base_url() ?>/admin/pembayaran" class="small-box-footer"><i class="far fa-eye"></i> Selengkapnya</a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>Rp <?= $omset ?>,-</h3>

                            <p>Total Pendapatan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer"><i class="far fa-eye"></i> Selengkapnya</a> -->
                    </div>
                </div>
                <!-- ./col -->

            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>