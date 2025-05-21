<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin/buscar', 'Admin::buscar');
$routes->get('/admin', 'Admin::index');
$routes->get('/databasetest', 'DatabaseTest::index');
