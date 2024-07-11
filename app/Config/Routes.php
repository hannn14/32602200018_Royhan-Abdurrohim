<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/form', 'Form::index');
$routes->match(['post'], '/submit-form', 'FormController::submitForm');
$routes->get('/latihanview', 'HelloWorld::index');
$routes->get('/latihanlayout', 'HelloWorld::layout');
$routes->get('/profile', 'FormController::profile');
$routes->get('/about', 'FormController::about');

$routes->get('/crud', 'Crud::index');
$routes->match(['get', 'post'], '/crud/tambah', 'Crud::tambah');
$routes->match(['get', 'post'], '/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');

$routes->get('/', 'Todo::index');
$routes->post('/tambah', 'Todo::tambah');
$routes->post('/edit/(:segment)', 'Todo::edit/$1');
$routes->post('/hapus/(:segment)', 'Todo::hapus/$1');