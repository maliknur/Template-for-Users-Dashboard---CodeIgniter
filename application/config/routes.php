<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = "users";
$route['index'] = "users";
$route['signin']="users/signin";
$route['register']="users/register";
$route['dashboard'] = "users/dashboard";
$route['dashboard/(:any)'] = "users/dashboard/$1";
$route['create'] = 'users/create';
$route['login'] = "users/login";
$route['logoff'] = "users/logoff";
$route['users/new'] = "users/register";
$route['users/edit/(:num)']="users/edit/$1";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
