<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'User::landing');
$routes->get('/moodboard', 'User::moodboard');
$routes->get('/login', 'User::login');
$routes->get('/roadmap', 'User::roadmap');
$routes->get('/signup', 'User::signup');
$routes->get('/login', 'User::login');

