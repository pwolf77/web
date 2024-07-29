<?php
class frontend {
	
	static function init() {

		if (array_key_exists(0,init::$URIParts)===false) init::$URIParts[0]='';
		if (array_key_exists(1,init::$URIParts)===false) init::$URIParts[1]='';

		$module_name=trim(init::$URIParts[0]);
		$method=trim(init::$URIParts[1]);

		$module_file=MODULE_DIR.$module_name.'.php';

		if (!file_exists($module_file)) {

			$module_file=MODULE_DIR.BASE_MODULE.'.php';
			$module_name=BASE_MODULE;
			init::$URIParts[0]=BASE_MODULE;

		}
		
		require_once($module_file);

		$module_obj=new $module_name();

		if (!method_exists($module_obj,$method)) $module_obj->index();
		else $module_obj->$method();

		
	

	}

}
?>