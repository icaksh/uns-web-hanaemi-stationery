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

$routes->get('/', 'Home::index');

$routes->group('admin', ['filter' => 'role:Admin'], function($routes){
    $routes->group('cuti', function($routes){
        $routes->get('', 'Admin\Cuti::index');
        $routes->get('(:segment)', 'Admin\Cuti::read/$1');
        $routes->post('(:segment)', 'Admin\Cuti::update/$1');
    });

    $routes->group('jabatan', function($routes){
        $routes->get('', 'Admin\Jabatan::index');
        $routes->post('add', 'Admin\Jabatan::create');
        $routes->get('(:segment)', 'Admin\Jabatan::read/$1');
        $routes->post('(:segment)', 'Admin\Jabatan::update/$1');
        $routes->delete('(:segment)', 'Admin\Jabatan::delete/$1');
    });

    $routes->group('divisi', function($routes){
        $routes->get('', 'Admin\Divisi::index');
        $routes->post('add', 'Admin\Divisi::create');
        $routes->get('(:segment)', 'Admin\Divisi::read/$1');
        $routes->post('(:segment)', 'Admin\Divisi::update/$1');
        $routes->delete('(:segment)', 'Admin\Divisi::delete/$1');
    });

    $routes->group('presensi', function($routes){
        $routes->get('', 'Admin\Presensi::index');
        $routes->post('add', 'Admin\Presensi::create');
        $routes->get('(:segment)', 'Admin\Presensi::read/$1');
    });

    $routes->group('pegawai', function($routes){
        $routes->get('', 'Admin\Pegawai::index');
        $routes->get('(:segment)', 'Admin\Pegawai::read/$1');
        $routes->post('(:segment)', 'Admin\Pegawai::update/$1');
        $routes->delete('(:segment)', 'Admin\Pegawai::delete/$1');
    });
});

$routes->group('user', function($routes){
    $routes->group('cuti', function($routes){
        $routes->get('', 'User\Cuti::index');
        $routes->get('create', 'User\Cuti::createIndex');
        $routes->get('(:segment)', 'User\Cuti::read/$1');
        $routes->post('create', 'User\Cuti::create/$1');
    });

    $routes->group('presensi', function($routes){
        $routes->get('', 'User\Presensi::index');
        $routes->post('add', 'User\Presensi::create');
    });

    $routes->group('profile', function($routes){
        $routes->get('', 'User\Profile::read');
        $routes->post('', 'User\Profile::update');
        $routes->post('auth', 'User\Profile::auth');
    });

});

$routes->get('/about', 'Home::about');
$routes->get('/doc', 'Home::dokumentasi');

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
