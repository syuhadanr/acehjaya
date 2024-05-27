<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/service', 'Home::service');
$routes->get('/contact', 'Home::contact');
$routes->get('/project', 'Home::project');