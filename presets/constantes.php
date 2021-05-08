<?php

// presets de página
define('TITLE', $tituloPagina);
define('DESCRIPTION', $descricaoPagina);
define('BASE_DIR', $baseUrl);
define('MAINTENANCE', $paginaManutencao);
const ERROR_CONTROLLER = 'ErrorController';
const DEFAULT_ACTION = 'index';

// presets de BD
const DB_DRIVER = 'mysql';  // a Model atual só tem suporte para MySql
define('DB_HOST', $dbHost);
define('DB_NAME', $dbName);
define('DB_USER', $dbUser);
define('DB_PASS', $dbPass);

// Paths
const DS = DIRECTORY_SEPARATOR;
const VIEW_PATH = '..' . DS . 'src' . DS . 'views' . DS;
const CSS_PATH = 'public' . DS . 'assets' . DS . 'css' . DS;
const JS_PATH = 'public' . DS . 'assets' . DS . 'js' . DS;
