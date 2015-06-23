<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = "users";
$route['signin']="users/signin";
$route['register']="users/register";
$route['dashboard'] = "users/dashboard";
$route['create'] = 'login/create';
$route['login'] = "users/login";
$route['index'] = "login";
$route['welcome']= "login/welcome";
$route['logout']="login/logout";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
