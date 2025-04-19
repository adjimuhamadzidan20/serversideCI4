<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pegawai::index');
$routes->get('/pegawai', 'Pegawai::index');
$routes->post('/pegawai/data_pegawai', 'Pegawai::pegawaiAjax');
