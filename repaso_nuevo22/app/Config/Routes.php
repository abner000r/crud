<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('planes','PlanesController::index');
$routes->get('lineas','LineasTelefonicasController::index');
$routes->get('clientes','ClientesController::index');
//eliminar plan 
$routes->get('eliminar_plan/(:num)','PlanesController::eliminarPlan/$1');
$routes->get('buscar_plan/(:num)','PlanesController::buscarPlan/$1');
$routes->post('modificar_plan','PlanesController::modificarPlan');