<?php
/**
* Initialization
*
* Register an autoloader, start or resume the session
*/
spl_autoload_register(function($class) {
    require dirname(__DIR__) .  "/classes/{$class}.php";
});

session_start();

require dirname(__DIR__) . '/config.php';
