<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('chart', 'Home::chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
$routes->post('submit', 'Home::submit');

// admin
$routes->group('admin', ['filter' => 'group:admin'], function($routes){
$routes->get('dashboard', 'AdminController::dashboard');
$routes->get('databuku', 'AdminController::databuku');
$routes->get('transaksi', 'AdminController::transaksi');
$routes->get('pelanggan', 'AdminController::pelanggan');

});

service('auth')->routes($routes);
