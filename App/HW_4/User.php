<?php

require_once __DIR__ . '/CustomException.php';

class User
{

    public function __construct(private $name, private $age, private $email)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setEmail($email);
    }

    private function setName($name)
    {
        $this->name = $name;
    }

    private function setAge($age)
    {
        $this->age = $age;
    }

    private function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAll(): array
    {
        return
        [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email
        ];
    }

    public function __call($method, $args)
    {
        if (!isset($this->methodAlias[$method])) {
            throw new CustomException("Method $method not found");
        }
    }

}

