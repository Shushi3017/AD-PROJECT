<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'User::landingPage');









// for checking the Components if its working or nto 
// $routes->get('/components/crud/crud', 'User::component');
// $routes->get('/landing', 'User::landing');
// $routes->get('/login', 'User::login');
// $routes->get('/user/roadmap', 'User::roadmap');


