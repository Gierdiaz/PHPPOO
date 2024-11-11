<?php

namespace App\Contracts;

interface Authentication
{
    public function login(string $email, string $password): void;
}