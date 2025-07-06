<?php

require_once 'vendor/autoload.php';

use PDO;
use PDOException;

class Database {
    private $host = "localhost";
    private $dbname = "contact_db";
    private $username = "root";
    private $password = "password";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}