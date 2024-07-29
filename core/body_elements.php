<?php

class body_elements {

	public static $VERSION='';
	
	public static $BODY_TITLE=BODY_TITLE;
	public static $BODY_BASEHREF=BASEHREF;
	public static $BODY_JAVASCRIPT=[];
	public static $BODY_JQUERY_DOCUMENT_READY='';
	
	public static $URIPARTS='';

	public static function init() {

		self::$VERSION=file_get_contents('_version.txt');
	
	}

	public static function get_properties() {

		$class=new ReflectionClass('body_elements');
		$arr=$class->getStaticProperties();	

		return $arr;
	}

}
?>