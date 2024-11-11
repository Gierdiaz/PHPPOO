<?php

namespace App\Classes;

class Login 
{
    public $email;
    public $password;

    public function login()
    {
        return "<p>LOGIN: Usuário " . $this->email . " logado com sucesso!</p>";
    }
}