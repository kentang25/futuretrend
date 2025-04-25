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
$route['default_controller'] = 'futuretrend';
$route['404_override'] = 'notfound';
$route['translate_uri_dashes'] = FALSE;

// --- admin futuretrend ---
$route['admin'] = 'admin_future/admin';
$route['admin/data-barang'] = 'admin_future/data_barang';
$route['admin/data-cart'] = 'admin_future/data_cart';
$route['admin/karya'] = 'admin_future/upload_karya';
$route['admin/galeri'] = 'admin_future/upload_galeri';

// --- auth user ----
$route['register'] = 'futuretrend/auth_user/register';
$route['login'] = 'futuretrend/auth_user/login';

// --- user futuretrend ----
$route['futuretrend'] = 'futuretrend/futuretrend';
$route['products'] = 'futuretrend/products';
$route['products/detail/(:any)'] = 'futuretrend/products/detail/$1';
$route['kontak'] = 'futuretrend/kontak';

// --- kategori ---
$route['galeri'] = 'futuretrend/galeri';
$route['karya'] = 'futuretrend/karya';

// --- cart ----
$route['cart'] = 'futuretrend/cart';
$route['addCart/(:any)'] = 'futuretrend/cart/addCart/$1';
$route['cart/update-qty'] = 'futuretrend/cart/update_qty';


// --- pembayaran ---
$route['order'] = 'futuretrend/pembayaran/order';
$route['pembayaran/(:any)'] = 'futuretrend/pembayaran/pembayaran/$1';