<?php
class init {

	static $DEV=1; // development
	
	static $URIParts=''; // ebben van a pl. "kapcsolat/kuld" [0] => 'kapcsolat', [1] = > 'kuld'
	
	static function _init() {

		date_default_timezone_set('Europe/Budapest');

		DEFINE('TWIG_TEMPLATE_DIR','templates');
		DEFINE('TWIG_TEMPLATE_CAHCHE_DIR','templates/cache');
		DEFINE('TWIG_AUTO_RELOAD',true); // ujravolvassa a templateket minden hivaskor

		DEFINE('BODY_TITLE','Weboldal title'); // title
		DEFINE('BASE_MODULE','nyito_oldal'); // alap oldal, ha nincs megadva oldal vagy nincs olyan oldal, amire hivatkozunk
		DEFINE('MODULE_DIR','modules/'); // ebbol a mappabol olvassa be az oldalnak megfelelo php-t
		

		if (self::$DEV==1) {

			DEFINE('BASEHREF','http://localhost/web/');

		}

		else {

			DEFINE('BASEHREF','https://valami.hu/');

		}

	}
	

	

}
?>