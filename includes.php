<?php

// Include the vendor
require __DIR__ . '/vendor/autoload.php';

// Include the library
require __DIR__ . '/_library/Application.php';
require __DIR__ . '/_library/Model.php';
require __DIR__ . '/_library/Controller.php';

// Include models
require __DIR__ . '/_models/User.php';

// Include controllers
require __DIR__ . '/_controllers/HomeController.php';
require __DIR__ . '/_controllers/APIController.php';

// Include environment
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/");
$dotenv->load();

?>