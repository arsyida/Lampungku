<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 * Variabel $routes adalah instance dari RouteCollection yang digunakan untuk mendefinisikan rute dalam aplikasi.
 */

// Mendefinisikan rute untuk URL root ('/'). 
$routes->get('/', 'Home::index');

// Mendefinisikan rute untuk '/search'. 
$routes->get('/places', 'Places::places');


// Mendefinisikan rute untuk '/detail/{parameter}'. 
// Bagian '(:any)' adalah placeholder untuk parameter dinamis (bisa berupa string atau angka).
// Ketika pengguna mengakses '/detail/{parameter}', metode 'detail' dari controller 'Detail' akan dipanggil,
// dan parameter akan diteruskan ke metode tersebut.
$routes->get('/detail/(:any)', 'Detail::detail/$1');
