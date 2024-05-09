<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/obtenerNombre/(:any)', 'Home::obtenerNombre/$1');
$routes->get('/eliminar/(:any)', 'Home::eliminar/$1');
$routes->post('/crear', 'Home::crear');
$routes->post('/actualizar', 'Home::actualizar');