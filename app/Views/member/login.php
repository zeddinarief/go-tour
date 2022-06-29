<?= $this->extend('member/template') ?>

<?= $this->section('content') ?>

<main>
    <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/bg-login.jpg')">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                <?php if (session()->getFlashdata('loginError') !== NULL) : ?>
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Daftar</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                            <form action="<?= base_url() ?>/login" method="post">
                                <div class="form-group">
                                    <label for="singin-email-2">Username *</label>
                                    <input type="text" class="form-control" id="singin-email-2" name="username" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="singin-password-2">Password *</label>
                                    <input type="password" class="form-control" id="singin-password-2" name="password" required>
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>MASUK</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    <!-- <a href="#" class="forgot-link">Lupa kata sandi?</a> -->
                                </div><!-- End .form-footer -->
                            </form>
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                            <form action="#">
                                <div class="form-group">
                                    <label for="register-email-2">Alamat Email Kamu *</label>
                                    <input type="email" class="form-control" id="register-email-2" name="register-email" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-password-2">Kata Sandi *</label>
                                    <input type="password" class="form-control" id="register-password-2" name="register-password" required>
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>DAFTAR</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                </div><!-- End .form-footer -->
                            </form>
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                <?php else : ?>
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Daftar</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                            <form action="<?= base_url() ?>/login" method="post">
                                <div class="form-group">
                                    <label for="singin-email-2">Username *</label>
                                    <input type="text" class="form-control" id="singin-email-2" name="username" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="singin-password-2">Password *</label>
                                    <input type="password" class="form-control" id="singin-password-2" name="password" required>
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>MASUK</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    <!-- <a href="#" class="forgot-link">Lupa kata sandi?</a> -->
                                </div><!-- End .form-footer -->
                            </form>
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                            <form action="#">
                                <div class="form-group">
                                    <label for="register-email-2">Alamat Email Kamu *</label>
                                    <input type="email" class="form-control" id="register-email-2" name="register-email" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-password-2">Kata Sandi *</label>
                                    <input type="password" class="form-control" id="register-password-2" name="register-password" required>
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>DAFTAR</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                </div><!-- End .form-footer -->
                            </form>
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                <?php endif ?>
                </div><!-- End .form-tab -->
            </div><!-- End .form-box -->
        </div><!-- End .container -->
    </div><!-- End .login-page section-bg -->
</main><!-- End .main -->

<?= $this->endSection() ?>