<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('education', 'Education::index');
$routes->get('education', 'Education::index');
$routes->get('experience', 'Experience::index');
$routes->get('skills', 'Skills::index');
$routes->get('softwareskills', 'SoftwareSkills::index');
$routes->get('contact', 'Contact::index');
$routes->get('contact/create', 'Contact::create');
$routes->post('contact/store', 'Contact::store');
$routes->get('contact/delete/(:num)', 'Contact::delete/$1');


