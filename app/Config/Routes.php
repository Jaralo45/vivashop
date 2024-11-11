<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Home
$routes->get('/home', 'HomeController::index');

// New User
$routes->get('/new/user', 'NewUserController::index');
$routes->post('/register', 'NewUserController::registrarUser');

// Login
$routes->get('/', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/login', 'LoginController::Login');
