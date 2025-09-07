<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Servicios page
$routes->get('servicios', 'Home::servicios');
// Test JSON services
$routes->get('servicios', 'ServiciosJson::index');
$routes->get('servicios/(:segment)', 'ServiciosJson::detalle/$1');
