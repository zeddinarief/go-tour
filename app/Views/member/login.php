<?= $this->extend('member/template') ?>

<?= $this->section('content') ?>

<main>
    <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
        style="background-image: url('assets/images/bg-login.jpg')">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                    <?php if (session()->getFlashdata('loginError') !== NULL) : ?>
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab"
                                aria-controls="signin-2" aria-selected="true">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab"
                                aria-controls="register-2" aria-selected="false">Daftar</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="signin-2" role="tabpanel"
                            aria-labelledby="signin-tab-2">
                            <span style="color: red"><?= session()->getFlashdata('loginError') ?></span>
                            <form action="<?= base_url() ?>/login" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="singin-email-2">Username *</label>
                                    <input type="text" class="form-control" id="singin-email-2" name="username"
                                        value="<?= old('username') ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="singin-password-2">Password *</label>
                                    <input type="password" class="form-control" id="singin-password-2" name="password"
                                        required>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>MASUK</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    <!-- <a href="#" class="forgot-link">Lupa kata sandi?</a> -->
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                            <form action="<?= base_url() ?>/register" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="register-email-2">Email *</label>
                                    <input type="email" class="form-control" id="register-email-2" name="new_email"
                                        value="<?= old('new_email') ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="register-email-2">Nama *</label>
                                    <input type="text" class="form-control" name="new_nama"
                                        value="<?= old('new_nama') ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="register-email-2">Username *</label>
                                    <input type="text" class="form-control"  name="new_username" value="<?= old('new_username') ?>" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-password-2">Password *</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                </div>

                                <div class="form-group">
                                    <label for="register-password-2">Confirm Password *</label>
                                    <input type="password" class="form-control" name="new_password_matches" required>
                                </div>

                                <div class="form-group">
                                    <label for="register-password-2">Alamat </label>
<<<<<<< HEAD
                                    <input type="text" class="form-control" name="new_alamat" value="<?= old('new_alamat') ?>">
                                </div><!-- End .form-group -->
                                
                                <div class="form-group">
                                    <label for="register-password-2">No Hp </label>
                                    <input type="tel" class="form-control" name="new_nohp" pattern="[0-9]*" value="<?= old('new_nohp') ?>">
                                </div><!-- End .form-group -->
=======
                                    <input type="text" class="form-control" name="new_alamat">
                                </div>

                                <div class="form-group">
                                    <label for="register-password-2">No Hp </label>
                                    <input type="tel" class="form-control" name="new_nohp" pattern="[0-9]*">
                                </div>
>>>>>>> eaa2fb844c4842ff18b3f02c4d4c70d099d73fca

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>DAFTAR</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <?php else : ?>
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab"
                                aria-controls="signin-2" aria-selected="false">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                                role="tab" aria-controls="register-2" aria-selected="true">Daftar</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                            <form action="<?= base_url() ?>/login" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="singin-email-2">Username *</label>
                                    <input type="text" class="form-control" id="singin-email-2" name="username"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="singin-password-2">Password *</label>
                                    <input type="password" class="form-control" id="singin-password-2" name="password"
                                        required>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>MASUK</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    <!-- <a href="#" class="forgot-link">Lupa kata sandi?</a> -->
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show active" id="register-2" role="tabpanel"
                            aria-labelledby="register-tab-2">
                            <span style="color: red;"><?= $validation->listErrors() ?></span>
                            <form action="<?= base_url() ?>/register" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="register-email-2">Email *</label>
                                    <input type="email" class="form-control" id="register-email-2" name="new_email"
                                        value="<?= old('new_email') ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="register-email-2">Nama *</label>
                                    <input type="text" class="form-control" name="new_nama"
                                        value="<?= old('new_nama') ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="register-email-2">Username *</label>
<<<<<<< HEAD
                                    <input type="text" class="form-control"  name="new_username" value="<?= old('new_username') ?>" required>
                                </div><!-- End .form-group -->
=======
                                    <input type="text" class="form-control" name="new_username"
                                        value="<?= old('username') ?>" required>
                                </div>
>>>>>>> eaa2fb844c4842ff18b3f02c4d4c70d099d73fca

                                <div class="form-group">
                                    <label for="register-password-2">Password *</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                </div>

                                <div class="form-group">
                                    <label for="register-password-2">Confirm Password *</label>
                                    <input type="password" class="form-control" name="new_password_matches" required>
                                </div>

                                <div class="form-group">
                                    <label for="register-password-2">Alamat </label>
<<<<<<< HEAD
                                    <input type="text" class="form-control" name="new_alamat" value="<?= old('new_alamat') ?>">
                                </div><!-- End .form-group -->
                                
                                <div class="form-group">
                                    <label for="register-password-2">No Hp </label>
                                    <input type="tel" class="form-control" name="new_nohp" pattern="[0-9]*" value="<?= old('new_nohp') ?>">
                                </div><!-- End .form-group -->
=======
                                    <input type="text" class="form-control" name="new_alamat">
                                </div>

                                <div class="form-group">
                                    <label for="register-password-2">No Hp </label>
                                    <input type="tel" class="form-control" name="new_nohp" pattern="[0-9]*">
                                </div>
>>>>>>> eaa2fb844c4842ff18b3f02c4d4c70d099d73fca

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>DAFTAR</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>