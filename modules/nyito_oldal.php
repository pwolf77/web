<?php
class nyito_oldal { 

	public function __construct() {

	}

	public function index() {

		$template=twig::$twig->load('nyito_oldal.html');

		$hirek=[
			[
				'id' => 1,
				'cim' => 'Hír 1',
				'bevezeto' => 'Bevezető 1'
			],
			[
				'id' => 2,
				'cim' => 'Hír 2',
				'bevezeto' => 'Bevezető 2',
			],
			[
				'id' => 3,
				'cim' => 'Hír 3',
				'bevezeto' => 'Bevezető 3'
			],
		];

		echo $template->render(
			[
				'body_elements' => body_elements::get_properties(),
				'hirek' => $hirek,
			]
		);	

	}

}

?>