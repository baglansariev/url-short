<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    spl_autoload_register(function($class){
        $path = DOCUMENT_ROOT . DS . $class . '.php';
        $path = str_replace('\\', DS, $path);
        if(file_exists($path)){
            require_once($path);
        }
    });

    function dump($var, $exit = false, $dumpFunc = 'print_r'){
        if(is_array($var) || is_object($var)){
            echo '<pre>';
            $dumpFunc($var);
            echo '</pre>';
        }
        else{
            echo '<pre>'. $var .'</pre>';
        }

        if($exit) exit;
    }