<?php

require_once __DIR__ . "/../config.php";


class Db 
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=' . DATABASE_HOST . ';dbname=' . DATABASE_NAME . ';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);
        } catch (Exception $e) {
            die("error" . $e->getMessage());
        }
    }

    public function getDb()
    {
        return $this->db;   
    }
}

?>

