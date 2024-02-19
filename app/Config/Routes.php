<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/tours', 'Pages::tours');
$routes->get('/about', 'Pages::about');
$routes->get('/newsevents', 'Pages::blogEvents');
$routes->get('/Footer', 'Pages::footer');
$routes->get('/contactus', 'Pages::contactus');

// menu
// $routes->get('/backoffice', '\App\Modules\manage_menu\Controllers\Menu');
$routes->get('/backoffice/menu-manager', '\App\Modules\manage_menu\Controllers\Menu');
$routes->get('/backoffice/menu-manager/add', '\App\Modules\manage_menu\Controllers\Menu::add');
$routes->post('/backoffice/menu-manager/save', '\App\Modules\manage_menu\Controllers\Menu::save');
$routes->delete('/backoffice/menu-manager/(:num)', '\App\Modules\manage_menu\Controllers\Menu::delete/$1');
$routes->get('/backoffice/menu-manager/edit/(:any)', '\App\Modules\manage_menu\Controllers\Menu::edit/$1');
$routes->post('/backoffice/menu-manager/update/(:any)', '\App\Modules\manage_menu\Controllers\Menu::update/$1');

// category blogs & events
$routes->get('/backoffice/category-blogsevents', '\App\Modules\manage_blogsevents\Controllers\Blog::category');
$routes->get('/backoffice/category-blogsevents/add', '\App\Modules\manage_blogsevents\Controllers\Blog::addCat');
$routes->post('/backoffice/category-blogsevents/save', '\App\Modules\manage_blogsevents\Controllers\Blog::saveCat');
$routes->delete('/backoffice/category-blogsevents/(:num)', '\App\Modules\manage_blogsevents\Controllers\Blog::delCat/$1');
$routes->get('/backoffice/category-blogsevents/edit/(:any)', '\App\Modules\manage_blogsevents\Controllers\Blog::editCat/$1');
$routes->post('/backoffice/category-newsevents/update/(:num)', '\App\Modules\manage_blogsevents\Controllers\Blog::updateCat/$1');

// blogs & events
$routes->get('/backoffice/blogsevents', '\App\Modules\manage_blogsevents\Controllers\Blog');
$routes->get('/backoffice/blogsevents/add', '\App\Modules\manage_blogsevents\Controllers\Blog::add');
$routes->post('/backoffice/blogsevents/save', '\App\Modules\manage_blogsevents\Controllers\Blog::save');
$routes->delete('/backoffice/blogsevents/(:num)', '\App\Modules\manage_blogsevents\Controllers\Blog::delete/$1');
$routes->get('/backoffice/blogsevents/edit/(:any)', '\App\Modules\manage_blogsevents\Controllers\Blog::edit/$1');
$routes->post('/backoffice/blogsevents/update/(:num)', '\App\Modules\manage_blogsevents\Controllers\Blog::update/$1');

// gallery
$routes->get('/backoffice/gallery', '\App\Modules\manage_gallery\Controllers\Gallery::index');
$routes->get('/backoffice/gallery/add', '\App\Modules\manage_gallery\Controllers\Gallery::add');
$routes->post('/backoffice/gallery/save', '\App\Modules\manage_gallery\Controllers\Gallery::save');
$routes->delete('/backoffice/gallery/(:num)', '\App\Modules\manage_gallery\Controllers\Gallery::delete/$1');

// backoffice contact
$routes->get('/backoffice/faq', '\App\Modules\manage_faq\Controllers\FAQ');
$routes->get('/backoffice/faq/add', '\App\Modules\manage_faq\Controllers\FAQ::add');
$routes->post('/backoffice/faq/save', '\App\Modules\manage_faq\Controllers\FAQ::save');
$routes->delete('/backoffice/faq/(:num)', '\App\Modules\manage_faq\Controllers\FAQ::delete/$1');
$routes->get('/backoffice/faq/edit/(:num)', '\App\Modules\manage_faq\Controllers\FAQ::edit/$1');
$routes->post('/backoffice/faq/update/(:num)', '\App\Modules\manage_faq\Controllers\FAQ::update/$1');
