<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('planes','PlanesController::index');
$routes->get('lineas','LineasTelefonicasController::index');
$routes->get('clientes','ClientesController::index');