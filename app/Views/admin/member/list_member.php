<?= $this->extend('admin/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <blockquote class="quote-info mt-0 mb-0 ml-0">
                <h5 id="tip">Member</h5>
                <p>Berikut adalah informasi terkait data member</p>
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
                            <h3 class="card-title">Daftar member</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach ($members as $member => $value) { 
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $value['username'] ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['alamat'] ?></td>
                                        <td><?= $value['no_hp'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= ($value['is_active']) == 'yes' ? 'Active' : 'Inactive' ?></td>
                                        <td>
                                            <a href="/admin/member/<?= $value['id'] ?>" type="button"
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
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
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