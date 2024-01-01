<?php

use App\Models\Folder;
use App\Models\User;

define('BASE_DIR', dirname(__DIR__));

require_once BASE_DIR . '/config/constants.php';
require_once BASE_DIR . '/vendor/autoload.php';

try{
   $dotenv = \Dotenv\Dotenv::createUnsafeImmutable(BASE_DIR);
   $dotenv->load();

    dd(Folder::select()->where('title', 'IN', ['test', 5, 126])->sql());

   die(\Core\Router::dispatch($_SERVER['REQUEST_URI']));
}catch (PDOException $exception) {
   error_response($exception);
}