<?php

class eConfig {

	private static $settings;

	public static function init() {
		self::$settings = require(RESSOURCE_DIR . '/config.php');
	}

	public static function get($key) {
		$value = self::$settings;
		foreach(explode('.', $key) as $subkey) {
			$value = $value[$subkey];
		}
		return $value;
	}

}

/**
 * "THE COFFEE-WARE LICENSE" (Revision 12/2007):
 *
 * Sebastian Wicki <gandro@gmx.net> wrote this file. As long as you retain
 * this notice you can do whatever you want with this stuff. If we meet some
 * day, and you think this stuff is worth it, you can buy me a cup of coffee
 * in return.
 */
