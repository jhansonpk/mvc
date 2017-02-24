<?php
    require(__DIR__ . '/../vendor/autoload.php');
    require(__DIR__ . '/../application.php');

	$controller = new \mvc\Application();
	$controller->run();
