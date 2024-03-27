<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\App\Router;
use App\Controller\HomeController;
use App\Controller\ProductController;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [App\Middleware\AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [App\Middleware\AuthMiddleware::class]);
Router::add('GET', '/login', HomeController::class, 'login');

Router::run();
