<?php
require_once __DIR__."/vendor/autoload.php";

use Errbit\Errbit;

Errbit::instance()
	->configure(array(
		'api_key'           => 'YOUR API KEY',
		'host'              => 'YOUR ERRBIT HOST, OR api.airbrake.io FOR AIRBRAKE'
	))
	->start();

trigger_error("Hello Elte");
throw new LogicException("Duck Logic!");