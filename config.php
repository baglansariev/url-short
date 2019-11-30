<?php

    define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
    define('SYSTEM_PATH', DOCUMENT_ROOT . '/System/');
    define('ROUTES_PATH', SYSTEM_PATH . 'routes/');
    define('LIB_PATH', SYSTEM_PATH . 'lib/');
    define('VIEW_PATH', DOCUMENT_ROOT . '/App/views/');
    define('LAYOUT_PATH', VIEW_PATH . '/layouts/');

    // DB Config
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB', 'url_shortener');
    define('DB_PREFIX', 'ls_');

    define('DS', DIRECTORY_SEPARATOR);