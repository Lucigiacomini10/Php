<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Base';
$route['translate_uri_dashes'] = FALSE;
$route['salvar'] = "Base/Salvar";
$route['editar/(:num)'] = "Base/Editar/$1";
$route['atualizar'] = "Base/Atualizar";
$route['excluir/(:num)'] = "Base/Excluir/$1";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'Login';
//
$route['pessoa'] = 'Pessoa';
$route['listar'] = 'Listar';
$route['login'] = 'Login';
$route['home'] = 'Home';

