<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Admin\Login::index');
$routes->get('/admin/dashboard', 'Admin\Dashboard::index', ['as' => 'dashboard']);
$routes->get('/admin/about-page/', 'Admin\AboutPage::index', ['as' => 'about_page']);
$routes->get('/admin/wine-page/', 'Admin\WinePage::index', ['as' => 'wine_page']);
$routes->get('/admin/shop-page/', 'Admin\ShopPage::index', ['as' => 'shop_page']);
$routes->get('/admin/shop-page/create-product', 'Admin\Product::create', ['as' => 'create_product']);
$routes->get('/admin/shop-page/edit-product', 'Admin\Product::edit', ['as' => 'edit_product']);
$routes->get('/admin/shop-page/list-product', 'Admin\Product::index', ['as' => 'list_product']);
