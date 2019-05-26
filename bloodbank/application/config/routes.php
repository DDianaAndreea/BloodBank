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

/*
$route['checkout'] = "checkout/index";
$route['produs/(:any)'] = 'productscontroller/product_detail/$1';

$route['categorie/(:any)'] = 'productscontroller/get_category_products/$1';

$route['login'] = "authenticate/login";
$route['register'] = "authenticate/register";
$route['logout'] = "authenticate/logout";

$route['wishlist'] = "index/wishlist";
$route['terms_and_conditions'] = "index/terms_and_conditions";
$route['delivery'] = "index/delivery";
$route['return_order'] = "index/return_order";
$route['cart'] = "cart/index";
$route['shop'] = 'productscontroller/index';
$route['about'] = 'index/about';
$route['sales'] = 'productscontroller/sales';
$route['contact'] = 'index/contact';

*/
$route['dece'] = "index/dece";
$route['cum'] = "index/cum";
$route['unde'] = "index/unde";
$route['campanii'] = "campanii/index";
$route['contact'] = "mesaje/contact";
$route['cerere_donare'] = "cerere_donare/index";
$route['cerere_d'] = "cerere_donare/cerere_d";
$route['chestionar_d'] = "cerere_donare/chestionar_d";
$route['cerere_pacient'] = "cerere_primire/index";
$route['cerere_spital'] = "cerere_primire/index_spital";
$route['voluntar'] = "voluntari/index";
$route['cazuri'] = "cazuri/index";



$route['default_controller'] = 'Index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
