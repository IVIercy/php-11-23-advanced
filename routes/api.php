<?php
\Core\Router::add('api/auth/registration', [
    'controller' => \App\Controllers\UsersController::class,
    'action' => 'store',
    'method' => 'POST'
]);
