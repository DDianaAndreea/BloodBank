<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// $route['clienti'] = 'customerscontroller/get_customers';
// $route['produse'] = 'productscontroller/get_products';
// $route['comenzi'] = 'orderscontroller/get_orders';
// $route['categorii'] = 'categoriescontroller/get_categories';
// $route['comentarii'] = 'commentscontroller/get_comments';

// $route['add_products'] = 'productscontroller/add_products';
// $route['add_categories'] = 'categoriescontroller/add_categories';
// $route['edit_product'] = 'productscontroller/edit_product';

$route['dashboard'] = 'admin';

$route['logout'] = 'auth/logout';
$route['login'] = 'auth/login';

$route['stoc']='stoc/index';

$route['inbox']='email/index';
$route['compose']='email/compose';
$route['view']='email/view';
$route['send']='email/send';

$route['donatori-activi'] = 'donatori/index';
$route['donartori-inactivi'] = 'donatori/in_donors';
$route['donartori-respinsi'] = 'donatori/resp_donors';
$route['voluntari'] = 'voluntari/index';
$route['pacienti'] = 'pacienti/index';
$route['spitale'] = 'spitale/index';

$route['cereri_donatori']='donatori/cereri_donatori';
$route['cereri_pacienti'] = 'pacienti/cereri_pacienti';
$route['cereri_spitale']='spitale/cereri_spitale';
$route['cereri_eveniment']='evenimente/index';

$route['publicare_caz']='cazuri/view_caz';
$route['cazuri']='cazuri/index';
$route['creare_eveniment']='evenimente/creare_eveniment';
$route['evenimente']='evenimente/vizualizare_evenimente';
$route['evenimente_in_asteptare']='evenimente/evenimente_in_asteptare';





$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
