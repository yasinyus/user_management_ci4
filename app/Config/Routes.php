<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
	$routes->get('/', 'Login::index');

	$routes->get('user', 'User::index');
	$routes->get('user_group', 'User_group::index');
	$routes->get('user/preview/(:segment)', 'User::preview/$1');
	$routes->get('user/profile', 'User::profile');
    $routes->add('user_group/create', 'User_group::create');
    $routes->add('user/create', 'User::create');
    $routes->add('user_group/create_action', 'User_group::create_action');
    $routes->add('user/create_action', 'User::create_action');
	$routes->add('user/edit/(:segment)', 'User::edit/$1');
	$routes->add('user_group/edit/(:segment)', 'User_group::edit/$1');
	$routes->add('user/update_photo_profile/(:segment)', 'User::update_photo_profile/$1');
	$routes->get('user/delete/(:segment)', 'User::delete/$1');
	$routes->get('user_group/delete/(:segment)', 'User_group::delete/$1');
	$routes->get('login/expired', 'Login::expired');
	$routes->get('register/create_action', 'Register::create_action');
	$routes->get('register/verify', 'Register::verify');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
