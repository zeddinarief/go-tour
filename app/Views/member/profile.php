<?= $this->extend('member/template') ?>

<?= $this->section('content') ?>

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title text-uppercase">Nur Hasanah<span>Member</span></h1>
        </div>
    </div>

    <div class="page-content">
        <div class="checkout">
            <div class="container">
                <form action="#">
                    <div class="row mt-4">
                        <div class="col-lg-9 mx-auto">
                            <div class="row summary-title">
                                <div class="col-6 my-auto">
                                    <h5 class="mb-0">Data Profil</h5>
                                </div>
                                <div class="col-6 my-auto">
                                    <a href="#ubah-profil" data-toggle="modal"
                                        class="btn btn-outline-primary-2 float-right my-auto"><span>Ubah
                                            Profil</span><i class="fa-solid fa-pen-to-square"></i></a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="text-primary">Nama Depan *</label>
                                    <input type="text" class="form-control" required disabled value="Nur">
                                </div>

                                <div class="col-sm-6">
                                    <label class="text-primary">Nama Belakang *</label>
                                    <input type="text" class="form-control" required disabled value="Hasanah">
                                </div>
                            </div>

                            <label class="text-primary">Alamat Domisili *</label>
                            <input type="text" class="form-control" required disabled
                                value="Jl. Mayjen Pandjaitan No.14 Lowokwaru Malang">

                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="text-primary">No Telp Aktif *</label>
                                    <input type="text" class="form-control" required disabled value="085666109182">
                                </div>

                                <div class="col-sm-6">
                                    <label class="text-primary">Alamat Email Aktif *</label>
                                    <input type="text" class="form-control" required disabled
                                        value="nurhasanah11@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 mx-auto mt-5">
                            <div class="row summary-title">
                                <div class="col-6 my-auto">
                                    <h5 class=" mb-0">Informasi Akun</h5>
                                </div>
                                <div class="col-6 my-auto">
                                    <a href="#ubah-akun" data-toggle="modal"
                                        class="btn btn-outline-primary-2 float-right my-auto"><span>Ubah
                                            Akun</span><i class="fa-solid fa-pen-to-square"></i></a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="text-primary">Nama Pengguna *</label>
                                    <input type="text" class="form-control" required disabled value="Nur Hasanah">
                                </div>

                                <div class="col-sm-6">
                                    <label class="text-primary">Kata Sandi *</label>
                                    <input type="password" class="form-control" required value="12345678" disabled>

                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Ubah Data Profil-->
<div class="modal fade" id="ubah-profil" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-box">
                    <h3 class="mb-4 mt-2">Ubah Profil</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="text-primary">Nama Depan *</label>
                            <input type="text" class="form-control" required value="Nur">
                        </div>

                        <div class="col-sm-6">
                            <label class="text-primary">Nama Belakang *</label>
                            <input type="text" class="form-control" required value="Hasanah">
                        </div>
                    </div>

                    <label class="text-primary">Alamat Domisili *</label>
                    <input type="text" class="form-control" required
                        value="Jl. Mayjen Panjaitan No.14 Lowokwaru Malang">

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="text-primary">No Telp Aktif *</label>
                            <input type="text" class="form-control" required value="085604561222">
                        </div>

                        <div class="col-sm-6">
                            <label class="text-primary">Alamat Email Aktif *</label>
                            <input type="text" class="form-control" required value="nurhasanah11@gmail.com">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <a href="#" data-dismiss="modal" class="btn btn-outline-primary-2 btn-block ">
                                <i class="fa-solid fa-xmark"></i>
                                Batal
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" onclick="simpan()" data-dismiss="modal" class="btn btn-primary btn-block ">
                                <i class="fa-solid fa-check"></i>
                                Simpan Perubahan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ubah Data Akun-->
<div class="modal fade" id="ubah-akun" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-box">
                    <h3 class="mb-4 mt-2">Ubah Akun</h3>

                    <label class="text-primary">Nama Pengguna *</label>
                    <input type="text" class="form-control" required value="Nur Hasanah">

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="text-primary">Kata Sandi Lama</label>
                            <input type="password" id="inputPassword" class="form-control" required disabled
                                value="12345678">
                            <div class="custom-control custom-checkbox mt-0">
                                <input type="checkbox" class="custom-control-input" id="checkout-create-acc"
                                    onclick="cekPassword()">
                                <label class="custom-control-label" for="checkout-create-acc">Lihat kata
                                    sandi</label>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <label>Kata Sandi Baru</label>
                            <input type="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <a href="#" data-dismiss="modal" class="btn btn-outline-primary-2 btn-block ">
                                <i class="fa-solid fa-xmark"></i>
                                Batal
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" onclick="simpan()" data-dismiss="modal" class="btn btn-primary btn-block ">
                                <i class="fa-solid fa-check"></i>
                                Simpan Perubahan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>