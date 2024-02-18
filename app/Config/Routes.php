<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/tours', 'Pages::tours');
$routes->get('/about', 'Pages::about');
$routes->get('/newsevents', 'Pages::blogEvents');

// menu
$routes->get('/backoffice', 'manage_menu\Controllers\Menu');
$routes->get('/backoffice/menu-manager', 'manage_menu\Controllers\Menu');
$routes->get('/backoffice/menu-manager/add', 'manage_menu\Controllers\Menu::add');
$routes->post('/backoffice/menu-manager/save', 'manage_menu\Controllers\Menu::save');
$routes->delete('/backoffice/menu-manager/(:num)', 'manage_menu\Controllers\Menu::delete/$1');
$routes->get('/backoffice/menu-manager/edit/(:any)', 'manage_menu\Controllers\Menu::edit/$1');
$routes->post('/backoffice/menu-manager/update/(:any)', 'manage_menu\Controllers\Menu::update/$1');

// category blogs & events
$routes->get('/backoffice/category-blogsevents', 'manage_blogsevents\Controllers\Blog::category');
$routes->get('/backoffice/category-blogsevents/add', 'manage_blogsevents\Controllers\Blog::addCat');
$routes->post('/backoffice/category-blogsevents/save', 'manage_blogsevents\Controllers\Blog::saveCat');
$routes->delete('/backoffice/category-blogsevents/(:num)', 'manage_blogsevents\Controllers\Blog::delCat/$1');
$routes->get('/backoffice/category-blogsevents/edit/(:any)', 'manage_blogsevents\Controllers\Blog::editCat/$1');
$routes->post('/backoffice/category-newsevents/update/(:num)', 'manage_blogsevents\Controllers\Blog::updateCat/$1');

// blogs & events
$routes->get('/backoffice/blogsevents', 'manage_blogsevents\Controllers\Blog');
$routes->get('/backoffice/blogsevents/add', 'manage_blogsevents\Controllers\Blog::add');
$routes->post('/backoffice/blogsevents/save', 'manage_blogsevents\Controllers\Blog::save');
$routes->delete('/backoffice/blogsevents/(:num)', 'manage_blogsevents\Controllers\Blog::delete/$1');
$routes->get('/backoffice/blogsevents/edit/(:any)', 'manage_blogsevents\Controllers\Blog::edit/$1');
$routes->post('/backoffice/blogsevents/update/(:num)', 'manage_blogsevents\Controllers\Blog::update/$1');

// gallery
$routes->get('/backoffice/gallery', 'manage_gallery\Controllers\Gallery');
$routes->get('/backoffice/gallery/add', 'manage_gallery\Controllers\Gallery::add');
$routes->post('/backoffice/gallery/save', 'manage_gallery\Controllers\Gallery::save');
$routes->delete('/backoffice/gallery/(:num)', 'manage_gallery\Controllers\Gallery::delete/$1');

// backoffice contact
$routes->get('/backoffice/contact', 'manage_contact\Controllers\Contact::getContact');

// contact
$routes->get('/contact', 'manage_contact\Controllers\Contact');
$routes->post('/contact/send', 'manage_contact\Controllers\Contact::send');