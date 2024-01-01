<?php

\Core\Router::add('api/auth/registration', [
    'controller' => \app\Controllers\Api\AuthController::class,
    'action' => 'signup',
    'method' => 'POST'
]);

\Core\Router::add('api/auth/login', [
    'controller' => \app\Controllers\Api\AuthController::class,
    'action' => 'signip',
    'method' => 'POST'
]);

\Core\Router::add('api/folders', [
    'controller' => \app\Controllers\Api\FoldersController::class,
    'action' => 'index',
    'method' => 'GET'
]);

\Core\Router::add('api/folders/{id:\d+', [
    'controller' => \app\Controllers\Api\FoldersController::class,
    'action' => 'show',
    'method' => 'GET'
]);

\Core\Router::add('api/folders/store', [
    'controller' => \app\Controllers\Api\FoldersController::class,
    'action' => 'store',
    'method' => 'POST'
]);

\Core\Router::add('api/folders/{id:\d+}/update', [
    'controller' => \app\Controllers\Api\FoldersController::class,
    'action' => 'update',
    'method' => 'PUT'
]);

\Core\Router::add('api/folders/{id:\d+}/destroy', [
    'controller' => \app\Controllers\Api\FoldersController::class,
    'action' => 'destroy',
    'method' => 'DELETE'
]);