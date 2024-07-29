<?php

ini_set('display_errors',true);
error_reporting(E_ALL);

include('vendor/autoload.php');

require_once("core/init.php");
init::_init();

require_once("core/core.php");
core::init();

require_once('core/twig.php');
twig::init();

require_once("core/body_elements.php");
body_elements::init();

require_once("core/frontend.php");
frontend::init();

?>