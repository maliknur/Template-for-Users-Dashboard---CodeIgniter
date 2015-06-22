<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = "login";
$route['create'] = 'login/create';
$route['login'] = "login/login";
$route['index'] = "login";
$route['welcome']= "login/welcome";
$route['logout']="login/logout";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
