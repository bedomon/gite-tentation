<?php

// configure your app for the production environment

    $app['twig.path'] = array(__DIR__ . '/../templates');
    $app['twig.options'] = array('cache' => __DIR__ . '/../var/cache/twig');

//    $app->register(new Silex\Provider\AssetServiceProvider(), array(
//        'assets.version' => 'v1',
//        'assets.version_format' => '%s?version=%s',
//        'assets.named_packages' => array(
//            'css' => array('version' => 'css2', 'base_path' => '/web/css'),
//            'images' => array('base_urls' => array('https://img.example.com'))
//    )));