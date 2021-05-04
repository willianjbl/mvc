<?php

session_start();

require '../presets/constantes.php';
require '../vendor/autoload.php';
require '../core/routes.php';

$router->run($router->routes);
