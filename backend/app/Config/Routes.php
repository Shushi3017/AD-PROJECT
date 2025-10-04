<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/user', 'User::landing');
$routes->get('/user/signup', 'User::login');
$routes->post('/user/signup', 'User::signup');
$routes->get('/landing', 'User::landing');
$routes->get('/user/login', 'User::login');
$routes->get('/user/roadmap', 'User::roadmap');
$routes->get('/user/moodboard', 'User::moodBoard');
$routes->post('/user/login', 'User::login');
$routes->get('/crud', 'User::crud');







// for checking the Components if its working or nto 
$routes->get('/components/crud/crud', 'User::component');
$routes->get('/landing', 'User::landing');
$routes->get('/login', 'User::login');
$routes->get('/user/roadmap', 'User::roadmap');


