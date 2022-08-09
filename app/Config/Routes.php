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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$route['feed.xml'] 							= 'Home::feed';

$route['page/(:num).html'] 					= 'Home::page/$1';

$route['category/(:any)/page/(:num).html'] 	= 'Home::category/$1/$2';
$route['category/(:any).html'] 				= 'Home::category/$1';

$route['tags/(:any)/page/(:num).html'] 		= 'Home::tags/$1/$2';
$route['tags/(:any).html'] 					= 'Home::tags/$1';

$route['archive/(:any)/page/(:num).html'] 	= 'Home::archive/$1/$2';
$route['archive/(:num).html']				= 'Home::archive/$1';

$route['blog/(:any).html'] 					= 'Home::blog/$1';

$route['search'] 							= 'Home::search';

$route['export'] 							= 'Home::exportSite';
$route['wp2gb'] 							= 'Wp2Gb::index';

$route['default_controller'] 				= 'Home';

$route['404_override'] 						= 'Home::go404';

$route['translate_uri_dashes'] = FALSE;

$routes->setAutoRoute(true);
$routes->map($route);



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
