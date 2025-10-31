<?php
namespace App\Controllers;

class LoginController
{
    private $correo;
    private $contrasenia;

    public function Login()
    {
        session_start();

        $pdo = require_once __DIR__ . '/../../config/conexion.php';
        $coneccion::
        
        $correo = $_POST['user'] ?? '';
        $contrasenia = $_POST['pass'] ?? '';

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :user AND password = :pass");
        $stmt->execute([
            ':user' => $user,
            ':pass' => $pass // ⚠️ Considera usar hashing seguro
        ]);
        $usuario = $stmt->fetch();

        if ($usuario) {
            $_SESSION['logged'] = true;
            header('Location: ./../views/transporte.php');
            exit;
        } else {
            echo 'Credenciales inválidas.';
        }
    }
    public function __construct($correo, $contrasena) {
        $this->correo = $correo;
        $this->contrasena = $contrasena;
    }

}