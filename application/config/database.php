<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => $_SERVER['DB_HOST'],
	'username' => $_SERVER['DB_USER'],
	'password' => $_SERVER['DB_PASSWORD'],
	'database' => $_SERVER['DB_NAME'],
	'port'		 => $_SERVER['DB_PORT'],
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE, 
	'db_debug' => FALSE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
