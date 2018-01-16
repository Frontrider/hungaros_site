<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'port' =>"",
	'hostname' => '',
	'username' => '',
	'password' => '',
	'database' => '',
	'dbdriver' => '',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
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

$db['forum'] = array(
        'dsn'   => '',
				'port' =>"",
        'hostname' => '',
        'username' => '',
        'password' => '',
        'database' => '',
        'dbdriver' => '',
        'dbprefix' => '',
        'pconnect' => TRUE,
        'db_debug' => TRUE,
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'compress' => FALSE,
        'encrypt' => FALSE,
        'stricton' => FALSE,
        'failover' => array()
);
