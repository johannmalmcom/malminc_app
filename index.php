<?php

// Include everything
require __DIR__ . '/includes.php';

// Run the application
$application = new Application();
$application->routes();
$application->run();

?>