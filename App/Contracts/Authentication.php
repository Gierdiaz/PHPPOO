<?php

namespace App\Contracts;

require_once __DIR__ . '/autoload.php';

interface Authentication
{
    public function login(string $email, string $password): void;
}