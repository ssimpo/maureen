<?php
if(!defined('MAUREEN_INCLUDES_PATH')) {
   die('Access to this file is prohibited');
}

require_once("wpCodebird.php");

class maureen {
	public static function loadWpAdminInclude($filename) {
		require_once( self::_getWpAdminDir()  . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . $filename . '.php');
	}
   
	private static function _getWpAdminDir() {
		$path = str_replace(
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR,
			ABSPATH . parse_url(get_admin_url())['path']
		);
		
		return $path;
	}
}
?>