<?php

namespace App\Controllers;

use App\Core\View;

class LoginController
{
    public function Login()
    {
        $data[] = ['nombre' => 'Usuario', 'contraseña' => '********'];
        View::render('login');
    }
    public function mostrarRegistro()
    {
        echo 'Autenticando usuario...';
    }
}
