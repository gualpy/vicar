<?php

class login{
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {
        include_once '../../config/conexion.php';
        $conexion = 
        
        $conexion = new conexion();
        $validar_login = mysqli_query($conexion->getConexion(), "SELECT * FROM usuarios WHERE correo= '$correo' and contrasena='$contrasena'");
        $query = "SELECT * FROM users WHERE username = '$this->username' AND password = '$this->password'";
        $result = $db->query($query);
        if ($result->num_rows > 0) {
            return "Login Successful";
        } else {
            return "Login Failed";
        }
        if ($this->username == "admin" && $this->password == "admin") {
            return ;
        } else {
            return "Login Failed";
        }
    }
}