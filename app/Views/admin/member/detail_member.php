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
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/admin/member">Member</a></li>
                        <li class="breadcrumb-item active">Detail Member</li>
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
                            <blockquote class="quote-info mt-0 mb-0 ml-0">
                                <h5 id="tip">Detail Member</h5>
                                <p>Berikut adalah informasi terkait detail member</p>
                            </blockquote>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <form action="<?= base_url() ?>/admin/member/<?= $member['id'] ?>"
                                    method="post" class="form-horizontal">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="id" value="<?= $member['id'] ?>">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Username akun"
                                                name="username" value="<?= (old('username')) ? old('username') : $member['username'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap Member"
                                                name="nama" value="<?= (old('nama')) ? old('nama') : $member['nama'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Alamat lengkap"
                                                name="alamat" value="<?= (old('alamat')) ? old('alamat') : $member['alamat'] ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="Alamat Email"
                                                name="email" value="<?= (old('email')) ? old('email') : $member['email'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nomor HP</label>
                                        <div class="col-sm-10">
                                            <input type="tel" pattern="[0-9]*" class="form-control" placeholder="Nomor HP Aktif"
                                                name="no_hp" value="<?= (old('no_hp')) ? old('no_hp') : $member['no_hp'] ?>" >
                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" placeholder="Status Pembayaran"
                                                name="password" value="Password" disabled required>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-success mt-5">Simpan Data
                                                Member</button>
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