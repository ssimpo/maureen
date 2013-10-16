<?php
if(!defined('MAUREEN_INCLUDES_PATH')) {
   die('Access to this file is prohibited');
}

class maureen {
	public static function loadWpInclude($filename) {
		require_once( ABSPATH . WPINC . DIRECTORY_SEPARATOR . $filename );
	}
}
?>