<?php

$routes->get('/', 'Home::index');
$routes->post('/validar', 'Home::validar');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/principal', 'Home::principal');
$routes->get('/pacientes', 'Pacientes::index');
$routes->get('/pacientes/create', 'Pacientes::create');
$routes->post('/pacientes/store', 'Pacientes::store');
$routes->get('/pacientes/edit/(:num)', 'Pacientes::edit/$1');
$routes->post('/pacientes/update/(:num)', 'Pacientes::update/$1');
$routes->get('/pacientes/delete/(:num)', 'Pacientes::delete/$1');

