<?php

namespace App\Controllers;

use Core\Controller;

class UsersController extends Controller
{
    public function store(): array
    {
        $data = requestBody();
        dd($data);
    }
}