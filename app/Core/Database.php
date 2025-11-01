<?php
namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private $host;
    private $db_name;
    private $user;
    private $pass;
    private $sharset;
    private $conn;

    public function __construct()
    {
        $this->host     = $_ENV['DB_HOST'];
        $this->db_name  = $_ENV['DB_NAME'];
        $this->user     = $_ENV['DB_USER'];
        $this->pass     = $_ENV['DB_PASS'];
        $this->sharset  = 'utf8mb4';
        
        $this->conn = null;
        
        try {
            
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->sharset}";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        }catch (PDOException $exception) {
            die ("Connection error: " . $exception->getMessage());
        }
    }
    /**
     * Devuelve la conexión PDO
     * @return PDO
     */
    public function getConnection()
    {
        return $this->conn;
    }
}