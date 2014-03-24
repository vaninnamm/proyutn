<?php

define('URL_BASE','http://localhost/proyutn/');

$GLOBALS['config'] = array (
		'path'=> array(
			'root' => realpath(dirname(__FILE__)) . '/../',
			'class' => 'classes/'
			),
		'mysql' => array(
			'host'=> 'localhost',
			'user'=> 'root',
			'password'=> '',
			'db'=> 'proyutn',
			'engine'=> 'mysql'
		)	
	);
spl_autoload_register(function($class){
	if(file_exists('classes/' . $class . '.php')){
		require_once 'classes/' . $class .'.php';
	}
} );
