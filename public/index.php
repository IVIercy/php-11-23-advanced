<?php

use App\Models\User;

define('BASE_DIR', dirname(__DIR__));

require_once BASE_DIR . '/config/constants.php';
require_once BASE_DIR . '/vendor/autoload.php';

try{
    $dotenv = \Dotenv\Dotenv::createUnsafeImmutable(BASE_DIR);
    $dotenv->load();

    $result = User::select(['email', 'password'])
        ->where('id', 15)
        ->get();;

    $updateResult = $result[0]->update(['password' => '345']);

    $updateResult = User::select(['email', 'password'])
        ->where('id', 15)
        ->update(['password' => '345']);;

    die (\Core\Router::dispatch($_SERVER['REQUEST_URI']));
}catch (PDOException $exception) {
    dd("PDOException", $exception);
}catch (Exception $exception) {
    dd("Exception", $exception);
}