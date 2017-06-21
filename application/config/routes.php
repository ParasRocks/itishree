<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['home'] = 'HomeController/index';
$route['login'] = 'HomeController/login';
$route['post'] = 'user/post';
$route['post/delete/(:num)'] = 'user/delete/$1';
$route['post/edit/(:num)'] = 'user/edit/$1';
$route['posts'] = 'user/posts';
$route['update'] = 'user/update';
$route['register'] = 'HomeController/register';
$route['logout'] = 'HomeController/logout';
$route['translate_uri_dashes'] = FALSE;
