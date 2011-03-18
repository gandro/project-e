<?php

ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

if (!defined('__DIR__')) {
    define('__DIR__', dirname(__FILE__));
}

define('DOCUMENT_ROOT', realpath(__DIR__ . '/..'));

define('TEMPLATE_DIR', DOCUMENT_ROOT . '/templates');
define('RESSOURCE_DIR', DOCUMENT_ROOT . '/resources');
define('FILES_DIR', DOCUMENT_ROOT . '/files');

eConfig::init();

/**
 * Automatically includes classes
 *
 * @throws Exception
 *
 * @param  string $class  Name of the class to load
 * @return void
 */
function __autoload($class) {
	$file = RESSOURCE_DIR . '/library/flourish/' . $class . '.php';

	if (file_exists($file)) {
		return require $file;
	}

	$file = RESSOURCE_DIR . '/classes/' . $class . '.php';

	if (file_exists($file)) {
		return require $file;
	}

	throw new Exception('The class ' . $class . ' could not be loaded');
}

/**
 * "THE COFFEE-WARE LICENSE" (Revision 12/2007):
 *
 * Sebastian Wicki <gandro@gmx.net> wrote this file. As long as you retain
 * this notice you can do whatever you want with this stuff. If we meet some
 * day, and you think this stuff is worth it, you can buy me a cup of coffee
 * in return.
 */
