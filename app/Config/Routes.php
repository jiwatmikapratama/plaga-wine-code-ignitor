<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Admin\Login::index');
$routes->get('/admin/dashboard', 'Admin\Login::index');
