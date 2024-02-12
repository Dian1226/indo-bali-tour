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
