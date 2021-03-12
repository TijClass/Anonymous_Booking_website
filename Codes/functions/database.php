<?php

class DB{

    public $con;

    public function __construct(){
        try {
            $this->con = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
            // set the PDO error mode to exception
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $this->con;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function close(){
        $this->con = null;
    }
}
