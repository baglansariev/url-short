<?php
    return [
        '' => [
            'controller' => 'client\HomeController',
            'action' => 'index',
        ],
        'admin(\?del=[0-9]+)?' => [
            'controller' => 'admin\AccountController',
            'action' => 'index',
        ],
        'login' => [
            'controller' => 'admin\LoginController',
            'action' => 'index',
        ],
        'logout' => [
            'controller' => 'admin\LoginController',
            'action' => 'logout',
        ],
        'register' => [
            'controller' => 'admin\RegisterController',
            'action' => 'index',
        ],
        'url/shorten' => [
            'controller' => 'client\UrlShortenerController',
            'action' => 'index',
        ],
        '([a-zA-Z]*[0-9]*)+' => [
            'controller' => 'client\UrlShortenerController',
            'action' => 'redirect',
        ],
    ];