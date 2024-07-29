<?php
class core {

	public static function init() {

		init::$URIParts=self::get_uriparts();

	}

	public static function get_uriparts() {

		if (isset($_GET['rewrite'])) return explode("/",$_GET['rewrite']);
		else return [];
	}	

}
?>