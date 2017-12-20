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

$route['admin/bloglar'] = 'admin/index/blog';
$route['blog/olustur'] = 'blog/create';
$route['blog/(:num)/detay'] = 'blog/show/$1';
$route['blog/(:num)/duzenle'] = 'blog/edit/$1';
$route['blog/(:num)/guncelle'] = 'blog/update/$1';
$route['blog/(:num)/sil'] = 'blog/destroy/$1';

$route['admin/kategoriler'] = 'admin/index/category';
$route['kategori/olustur'] = 'category/create';
$route['kategori/(:num)/detay'] = 'category/show/$1';
$route['kategori/(:num)/duzenle'] = 'category/edit/$1';
$route['kategori/(:num)/guncelle'] = 'category/update/$1';
$route['kategori/(:num)/sil'] = 'category/destroy/$1';

$route['admin/ayarlar'] = 'admin/index/config';
$route['ayar/olustur'] = 'config/create';
$route['ayar/(:num)/detay'] = 'config/show/$1';
$route['ayar/(:num)/duzenle'] = 'config/edit/$1';
$route['ayar/(:num)/guncelle'] = 'config/update/$1';
$route['ayar/(:num)/sil'] = 'config/destroy/$1';

$route['/(:any)'] = 'main/index';
$route['default_controller'] = 'main/index';