<?php

use core\Router;

Router::add(
  'users/{id:\d+}/edit',
  [
      'controller' => \App\Controllers\UsersController::class,
      'action' => 'edit',
      'method' => 'get'
  ]
);