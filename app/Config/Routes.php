<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Profil::home');
$routes->get('pemweb', 'Profil::pemweb');
$routes->get('sim', 'Profil::sim');
$routes->get('visda', 'Profil::visda');
$routes->get('mbd', 'Profil::mbd');
$routes->get('hubungi', 'Profil::hubungi');
