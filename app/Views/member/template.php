<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Go Tour & Travel Malang</title>
    <meta name="description" content="Go Tour & Travel Malang">
    <base href="<?= base_url('assets') ?>/member/">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Go Tour & Travel Malang">
    <meta name="application-name" content="Go Tour & Travel Malang">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">

    <link href="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
    <link rel="stylesheet" href="assets/css/demos/demo-11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .promo {
        text-decoration: line-through;
    }

    .swal-modal {
        padding: 30px;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-7">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="<?= base_url() ?>" class="logo">
                            <img src="assets/images/logo.png" alt="Logo" width="82" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="<?= base_url() ?>/" class="sf-with-ul">Beranda</a>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Promo</a>
                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Promo Trip Gunung</div>
                                                            <ul>
                                                                <li><a href="#"><span>Trip Gunung Panderman<span
                                                                                class="tip tip-new">New</span></span></a>
                                                                </li>
                                                            </ul>
                                                            <div class="menu-title">Promo Trip Pantai</div>
                                                            <ul>
                                                                <li><a href="#"><span>Trip Pantai
                                                                            Selatan<span
                                                                                class="tip tip-hot">Hot</span></span></a>
                                                                </li>
                                                                <li><a href="#">Trip Pantai
                                                                        Ngliyep</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Promo Trip Rekreasi</div>
                                                            <ul>
                                                                <li><a href="#" class="text-muted">Belum Tersedia</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a class="banner banner-menu">
                                                        <img src="assets/images/menu-promo.jpg" alt="Banner">
                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Ambil
                                                                <br> Promonya<br><span><strong>segera</strong></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Kontak</a>
                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Kontak Kami</div>
                                                    <ul>
                                                        <li><a href="#">WhatsApp</a></li>
                                                        <li><a href="#">Telegram</a></li>
                                                        <li><a href="#">Facebook</a></li>
                                                        <li><a href="#">Instagram</a></li>
                                                        <li><a href="#">Email</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="#">
                                                        <img src="assets/images/menu-kontak.jpg" alt="Banner">
                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">Ingin
                                                                Bertanya?<br><span><strong>Hubungi Kami</strong></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <!-- <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Cari..."
                                        required>
                                </div>
                            </form>
                        </div> -->

                        <?php if (session()->get('isLogin') == 'yes' && session()->get('role') == 'member') { ?>
                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="fa-solid fa-bag-shopping fa-xs"></i>
                                    <span class="cart-count bg-danger"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <?php if ($pesanan != NULL && $pesanan['bayar'] == NULL) { ?>    
                                        <div class="dropdown-cart-products">
                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="<?= base_url() ?>/wisata/detail"><?= $pesanan['nama_paket'] ?></a>
                                                    </h4>

                                                    <span class="small text-muted pr-3"><i
                                                            class="fa-solid fa-user-group fa-xs"></i> <?= $pesanan['jumlah_rombongan'] ?>
                                                        Orang</span>
                                                </div>

                                                <figure class="product-image-container">
                                                    <a href="<?= base_url() ?>/wisata/detail" class="product-image">
                                                        <img src="assets/images/gunung-panderman.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="icon-close"></i></a>
                                            </div>
                                        </div>

                                        <div class="dropdown-cart-total">
                                            <span>Total</span>
                                            <span class="cart-total-price">Rp <?= $pesanan['harga'] ?>,-</span>
                                        </div>
                                    <?php } ?>

                                    <div class="dropdown-cart-action">
                                        <a href="<?= base_url() ?>/pesanan" class="btn btn-block btn-primary"><i
                                                class="fa-solid fa-eye"></i>Lihat
                                            Pesanan</a>
                                        <!-- <a href="#" class="btn btn-outline-primary-2"><span>Bayar</span><i
                                                class="icon-long-arrow-right"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="fa-solid fa-bell fa-xs"></i>
                                    <span class="cart-count bg-danger"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">
                                        <?php foreach ($history as $his => $val) { ?>
                                            <div class="product d-block px-0 py-2">
                                                <a class="text-dark" href="<?= base_url() ?>/pesanan">
                                                    <p class=" mb-0 text-dark"> <?= $val['nama_paket'] ?></p>
                                                    <span class="text-success"><i class="fa-regular fa-circle-check"></i>
                                                    <?= $val['status_bayar'] ?></span>&emsp; <span class="pl-auto text-info"><i
                                                            class="fa-regular fa-calendar-check"></i>
                                                            <?= $val['tgl_wisata'] ?></span>
                                                </a>
                                            </div>
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                            </div>
                        
                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="fa-solid fa-circle-user fa-xs"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" style="width:200px">
                                    <div class="dropdown-cart-products">
                                        <div class="product d-block px-0 py-2">
                                            <a class="product-title" href="<?= base_url() ?>/profile">
                                                <p class=" mb-0"><i class="fa-solid fa-user-gear"></i>&nbsp; Detail
                                                    Profil</p>
                                            </a>
                                        </div>
                                        <div class="product d-block px-0 py-2">
                                            <a class="product-title" href="<?= base_url() ?>/logout">
                                                <p class=" mb-0"> <i class="fa-solid fa-right-from-bracket"></i> &nbsp;
                                                    Keluar / Logout</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                        <div class="dropdown cart-dropdown">
                            <a href="<?= base_url() ?>/login" class="btn btn-outline-primary"
                                role="button"><i class="fa-solid fa-right-to-bracket"></i>Masuk</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </header>

        <?= $this->renderSection('content') ?>

        <footer class="footer footer-2">
            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2022 Go Tour & Travel Malang. All Rights Reserved.</p>
                    <div class="social-icons social-icons-color">
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                                class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                                class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                                class="icon-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Cari..."
                    required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">Promo</a>
                        <ul>
                            <li><a href="#">Trip Gunung Panderman</a></li>
                            <li><a href="#">Trip Pantai Selatan</a></li>
                            <li><a href="#">Trip Pantai Ngliyep</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">Kontak</a>
                        <ul>
                            <li><a href="#">WhatsApp</a></li>
                            <li><a href="#">Telegram</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Email</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-11.js"></script>

    <script>
    const datePicker = MCDatepicker.create({
        el: '#datepicker',
        selectedDate: new date(), // today
    })
    </script>

    <script>
    function simpan() {
        Swal.fire({
            icon: 'success',
            title: 'Data Berhasil Diperbaharui',
            text: "Sistem sudah menyimpan semua informasi Anda. Terimakasih!",
            confirmButtonText: 'Ok, saya mengerti'
        })
    }
    
    function simpanDataPesanan() {
        let form = document.getElementById('updateDataPesanan');
        let url = form.action;
        let csrfToken = '<?= csrf_hash() ?>';
        
        const data = new FormData(form);

        fetch(url, {
            method: 'POST',
            headers: {'<?= csrf_header() ?>': csrfToken},
            body: data
        }).then(response => {
            return response.json()
        }).then(responseJson => {
            console.log(responseJson)
            if (responseJson.status === 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Diperbaharui',
                    text: "Sistem sudah menyimpan semua informasi Anda. Terimakasih!",
                    confirmButtonText: 'Ok, saya mengerti'
                }).then(function () {
                    location.reload(); 
                })
            } else {
                let validations = document.getElementById('validations');
                validations.innerHTML = '';
                Object.values(responseJson.messages).forEach(val => {
                    validations.innerHTML += '* ' + val + '<br>'
                });
            }
        });
    }

    function simpanProfil() {
        let url = document.getElementById('updateProfile').action;
        let csrfToken = '<?= csrf_hash() ?>';
        
        let form = document.getElementById('updateProfile');
        const data = new FormData(form);

        fetch(url, {
            method: 'POST',
            headers: {'<?= csrf_header() ?>': csrfToken},
            body: data
        }).then(response => {
            return response.json()
        }).then(responseJson => {
            console.log(responseJson)
            if (responseJson.status === 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Diperbaharui',
                    text: "Sistem sudah menyimpan semua informasi Anda. Terimakasih!",
                    confirmButtonText: 'Ok, saya mengerti'
                }).then(function () {
                    location.reload(); 
                })
                $('#ubah-profil').modal('hide');
                // location.reload();
            } else {
                let validations = document.getElementById('validations');
                validations.innerHTML = '';
                Object.values(responseJson.messages).forEach(val => {
                    validations.innerHTML += '* ' + val + '<br>'
                });
            }
        });
    }
    
    function simpanPassword() {
        let url = document.getElementById('updatePassword').action;
        let csrfToken = '<?= csrf_hash() ?>';
        
        let form = document.getElementById('updatePassword');
        const data = new FormData(form);

        fetch(url, {
            method: 'POST',
            headers: {'<?= csrf_header() ?>': csrfToken},
            body: data
        }).then(response => {
            return response.json()
        }).then(responseJson => {
            console.log(responseJson)
            if (responseJson.status === 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Diperbaharui',
                    text: "Sistem sudah menyimpan semua informasi Anda. Terimakasih!",
                    confirmButtonText: 'Ok, saya mengerti'
                }).then(function () {
                    location.reload(); 
                })
                $('#ubah-akun').modal('hide');
            } else {
                let validations = document.getElementById('validation-password');
                validations.innerHTML = '';
                Object.values(responseJson.messages).forEach(val => {
                    validations.innerHTML += '* ' + val + '<br>'
                });
            }
        });
    }

    function bukti_pembayaran() {
        let form = document.getElementById('uploadBukti');
        let url = form.action;
        let csrfToken = '<?= csrf_hash() ?>';
        
        const data = new FormData(form);

        fetch(url, {
            method: 'POST',
            headers: {'<?= csrf_header() ?>': csrfToken},
            body: data
        }).then(response => {
            return response.json()
        }).then(responseJson => {
            console.log(responseJson)
            if (responseJson.status === 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'Bukti Pembayaran Berhasil Terkirim',
                    text: "Sistem akan melakukan validasi pembayaran Anda segera. Terimakasih!",
                    confirmButtonText: 'Ok, saya mengerti'
                }).then(function () {
                    location.reload(); 
                })
                $('#unggah-bukti-pembayaran').modal('hide');
            } else {
                let validations = document.getElementById('validations');
                validations.innerHTML = '';
                Object.values(responseJson.messages).forEach(val => {
                    validations.innerHTML += '* ' + val + '<br>'
                });
            }
        });
        
    }

    function hapus_pesanan() {
        Swal.fire({
            title: 'Hapus Pesanan',
            text: "Apakah Anda yakin menghapus pesanan wisata tersebut?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Pesanan Telah Terhapus!',
                    'Silahkan memilih paket wisata lain yang sesuai',
                    'success'
                )
            }
        })
    }

    function sweet_rekening() {
        /* Get the text field */
        let copyText = document.getElementById("rekening");

        copyText.readOnly = true;

        /* Change the input's type to text so its text becomes selectable */
        copyText.type = 'text';

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        swal({
            title: "Nomor Rekening Mandiri Berhasil di Salin!",
            // text: "You clicked the button!",
            icon: "success",
            button: false,
            timer: 1500,
        });
        copyText.type = 'hidden';
    }
    </script>

    <script>
    function cekPassword() {
        var x = document.getElementById("inputPassword");
        var y = document.getElementById("inputPassword2");
        if (x.type === "password") {
            x.type = "text";
            y.type = "text";
        } else {
            x.type = "password";
            y.type = "password";
        }
    }
    </script>
</body>

</html>