<?php
    if(file_exists('config.php')){
        require_once('config.php');
    }

    if(file_exists(LIB_PATH . 'functions.php')){
        require_once(LIB_PATH . 'functions.php');
    }

    $router = new \system\lib\Router;
    $router->run();