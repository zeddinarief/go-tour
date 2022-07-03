<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Member\Home::index'); // Go to home member
$routes->get('/login', 'Member\Auth::index', ['as' => 'member.login']); // Go to login member
$routes->addRedirect('/auth', 'member.login'); // Go to login member
$routes->post('/login', 'Member\Auth::login'); // action login member
$routes->get('/logout', 'Member\Auth::logout'); // action logout member
$routes->post('/register', 'Member\Auth::save'); // action register member
$routes->get('/wisata', 'Member\PaketWisata::index'); // Go to list wisata 
$routes->get('/wisata/(:alphanum)', 'Member\PaketWisata::detail/$1'); // Go to detail wisata 
$routes->get('/pesanan', 'Member\Pesanan::index'); // Go to Pesanan page
$routes->get('/profile', 'Member\User::index'); // Go to Pesanan page
$routes->post('/profile/data', 'Member\User::updateProfile'); // Action update profile data
$routes->post('/profile/password', 'Member\User::updatePassword'); // Action update profile password

// Admin
$routes->get('/admin', 'Admin\Dashboard::index'); // Go to dashboard admin
$routes->get('/admin/login', 'Admin\Auth::index', ['as' => 'admin.login']); // Go to login admin
$routes->addRedirect('/admin/auth', 'admin.login'); // Go to login admin
$routes->post('/admin/login', 'Admin\Auth::login'); // action login admin
$routes->get('/admin/logout', 'Admin\Auth::logout'); // action logout admin
$routes->get('/admin/wisata', 'Admin\PaketWisata::index', ['as' => 'admin.wisata']); // Go to list wisata admin
$routes->addRedirect('/admin/paketwisata', 'admin.wisata'); // Go to list wisata admin
$routes->get('/admin/wisata/insert', 'Admin\PaketWisata::insert', ['as' => 'admin.wisata_insert']); // Go to insert wisata admin
$routes->post('/admin/wisata/insert', 'Admin\PaketWisata::save'); // Action insert wisata admin
$routes->get('/admin/wisata/(:num)', 'Admin\PaketWisata::detail/$1', ['as' => 'admin.wisata_detail']); // Go to detail wisata admin
$routes->get('/admin/pesanan/(:num)', 'Admin\Pesanan::detail/$1', ['as' => 'admin.pesanan_detail']); // Go to detail pesanan admin
$routes->get('/admin/pembayaran/(:num)', 'Admin\Pembayaran::detail/$1', ['as' => 'admin.pembayaran_detail']); // Go to detail pesanan admin

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
