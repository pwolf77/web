<?php
class kapcsolat { 

	public function __construct() {

	}

	public function index() {

		body_elements::$BODY_JAVASCRIPT[]='kapcsolat.js';
		body_elements::$BODY_JQUERY_DOCUMENT_READY.='kapcsolatjs.init();';

		$template=twig::$twig->load('kapcsolat.html');

		echo $template->render(
			[
				'body_elements' => body_elements::get_properties(),
			]
		);	

	}

}

?>