<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/tours', 'Pages::tours');
$routes->get('/tours/(:any)', 'Pages::toursDetail/$1');
$routes->get('/about', 'Pages::about');
$routes->get('/newsevents', 'Pages::blogEvents');
$routes->get('/Footer', 'Pages::footer');
$routes->get('/contactus', 'Pages::contactus');

// menu
$routes->get('/backoffice', '\App\Modules\manage_menu\Controllers\Menu');
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
$routes->get('/backoffice/gallery/edit/(:num)', '\App\Modules\manage_gallery\Controllers\Gallery::edit/$1');
$routes->post('/backoffice/gallery/update/(:num)', '\App\Modules\manage_gallery\Controllers\Gallery::update/$1');

// FAQ
$routes->get('/backoffice/faq', '\App\Modules\manage_faq\Controllers\FAQ');
$routes->get('/backoffice/faq/add', '\App\Modules\manage_faq\Controllers\FAQ::add');
$routes->post('/backoffice/faq/save', '\App\Modules\manage_faq\Controllers\FAQ::save');
$routes->delete('/backoffice/faq/(:num)', '\App\Modules\manage_faq\Controllers\FAQ::delete/$1');
$routes->get('/backoffice/faq/edit/(:num)', '\App\Modules\manage_faq\Controllers\FAQ::edit/$1');
$routes->post('/backoffice/faq/update/(:num)', '\App\Modules\manage_faq\Controllers\FAQ::update/$1');

// Transportation
$routes->get('/backoffice/transportation', '\App\Modules\manage_transportation\Controllers\Transport');
$routes->delete('/backoffice/transportation/(:num)', '\App\Modules\manage_transportation\Controllers\Transport::delete/$1');
$routes->get('/backoffice/transportation/add', '\App\Modules\manage_transportation\Controllers\Transport::add');
$routes->post('/backoffice/transportation/save', '\App\Modules\manage_transportation\Controllers\Transport::save');
$routes->get('/backoffice/transportation/edit/(:num)', '\App\Modules\manage_transportation\Controllers\Transport::edit/$1');
$routes->post('/backoffice/transportation/update/(:num)', '\App\Modules\manage_transportation\Controllers\Transport::update/$1');

// package
$routes->get('/backoffice/index.php/package', '\App\Modules\manage_package\Controllers\Package');
$routes->delete('/backoffice/package/(:num)', '\App\Modules\manage_package\Controllers\Package::delete/$1');
$routes->get('/backoffice/package/add', '\App\Modules\manage_package\Controllers\Package::add');
$routes->post('/backoffice/package/save', '\App\Modules\manage_package\Controllers\Package::save');
$routes->get('/backoffice/package/edit/(:num)', '\App\Modules\manage_package\Controllers\Package::edit/$1');
$routes->post('/backoffice/package/update/(:num)', '\App\Modules\manage_package\Controllers\Package::update/$1');

// tours
$routes->get('/backoffice/tours', '\App\Modules\manage_tours\Controllers\Tours');
$routes->delete('/backoffice/tours/(:num)', '\App\Modules\manage_tours\Controllers\Tours::delete/$1');
$routes->get('/backoffice/tours/add', '\App\Modules\manage_tours\Controllers\Tours::add');
$routes->post('/backoffice/tours/save', '\App\Modules\manage_tours\Controllers\Tours::save');
$routes->get('/backoffice/tours/edit/(:num)', '\App\Modules\manage_tours\Controllers\Tours::edit/$1');
$routes->post('/backoffice/tours/update/(:num)', '\App\Modules\manage_tours\Controllers\Tours::update/$1');
