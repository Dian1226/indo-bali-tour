<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/tours', 'Pages::tours');
$routes->get('/about', 'Pages::about');
$routes->get('/newsevents', 'Pages::blogEvents');

$routes->get('/backoffice', 'Menu');
$routes->get('/backoffice/menu-manager', 'Menu');
$routes->get('/backoffice/menu-manager/add', 'Menu::add');
$routes->post('/backoffice/menu-manager/save', 'Menu::save');
$routes->delete('/backoffice/menu-manager/(:num)', 'Menu::delete/$1');
$routes->get('/backoffice/menu-manager/edit/(:any)', 'Menu::edit/$1');
$routes->post('/backoffice/menu-manager/update/(:any)', 'Menu::update/$1');

$routes->get('/backoffice/category-blogsevents', 'Blog::category');
$routes->get('/backoffice/category-blogsevents/add', 'Blog::addCat');
$routes->post('/backoffice/category-blogsevents/save', 'Blog::saveCat');
$routes->delete('/backoffice/category-blogsevents/(:num)', 'Blog::delCat/$1');
$routes->get('/backoffice/category-blogsevents/edit/(:any)', 'Blog::editCat/$1');
$routes->post('/backoffice/category-newsevents/update/(:num)', 'Blog::updateCat/$1');

$routes->get('/backoffice/blogsevents', 'Blog');
$routes->get('/backoffice/blogsevents/add', 'Blog::add');
$routes->post('/backoffice/blogsevents/save', 'Blog::save');
$routes->delete('/backoffice/blogsevents/(:num)', 'Blog::delete/$1');