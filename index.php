<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/App/HW_4/User.php';

try {
    $user = new User('Vlad', 25, 'post@gmail.com');
    $user->setAge(26);
    $user->setEmail('new_email@gmail.com');
    $user->setLocation('City');
    $userData = $user->getAll();

    dd($userData);
} catch (CustomException $e) {
    echo "Error " . $e->getMessage();
} catch (Exception $e) {
    echo "Another error" . $e->getMessage();
}
















