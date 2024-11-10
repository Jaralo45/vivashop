<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Home
$routes->get('/home', 'HomeController::index');


// Login
$routes->get('/', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/login', 'LoginController::Login');
