<?php

class Login
{
    public $user;
    public $email;
    public $password;

    public function __construct($user, $email, $password)
    {
        $this->user = $user;
        $this->email = $email;
        $this->password = $password;
    }

    public function saludar()
    {
        return 'Su nombre de usuario es: ' . $this->user . ' ,Su email es: ' . $this->email . ' ,Su contraseña es: ' . $this->password;
    }
}