<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Admin\Login::index');
$routes->get('/admin/dashboard', 'Admin\Dashboard::index');
$routes->get('/admin/about-page/manage-page-title', 'Admin\AboutPage::manage_title');