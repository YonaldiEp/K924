<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// HALAMAN PERTAMA
$routes->get('/', 'Home::pertama');

// USER
$routes->get('/signup', 'AuthController::signup');
$routes->post('/signup', 'AuthController::signupStore');
$routes->get('/signin', 'AuthController::signin');
$routes->post('/signin', 'AuthController::signinStore');
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);
$routes->get('/editaccount', 'AuthController::editAccount', ['filter' => 'auth']);
$routes->post('/editaccount', 'AuthController::updateAccount', ['filter' => 'auth']);
$routes->get('/deleteaccount', 'AuthController::deleteAccount', ['filter' => 'auth']);
$routes->get('/logout', 'AuthController::logout');


// ADMIN
$routes->get('admin', 'AdminController::index', ['filter' => 'auth']);
$routes->get('admin/create', 'AdminController::create', ['filter' => 'auth']);
$routes->post('admin/store', 'AdminController::store', ['filter' => 'auth']);
$routes->get('admin/delete/(:num)', 'AdminController::delete/$1', ['filter' => 'auth']);
$routes->get('admin/api/products', 'AdminController::apiGetProducts');


// PRODUK
$routes->get('produk/(:num)', 'AdminController::produk/$1');
$routes->post('produk/addToCart/(:num)', 'ProdukController::addToCart/$1');
$routes->get('keranjang', 'KeranjangController::index');
$routes->get('keranjang/delete/(:num)', 'KeranjangController::delete/$1');


// PEMBAYARAN
$routes->get('/payments', 'PaymentController::index');
$routes->get('/payments/create', 'PaymentController::create');
$routes->post('/payments/store', 'PaymentController::store');
$routes->get('/payments/edit/(:num)', 'PaymentController::edit/$1');
$routes->post('/payments/update/(:num)', 'PaymentController::update/$1');
$routes->get('/payments/delete/(:num)', 'PaymentController::delete/$1');
$routes->get('/pembayaran', 'PaymentController::paymentPage');
$routes->get('/metodepembayaran', 'PaymentController::paymentMethodPage'); // Rute untuk halaman metode pembayaran
$routes->get('/bri', 'PaymentController::paymentBriPage'); // Rute untuk halaman pembayaran BRI
$routes->get('/dana', 'PaymentController::paymentDanaPage'); // Rute untuk halaman pembayaran DANA
