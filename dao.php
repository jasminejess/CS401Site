<?php

class Dao {

    private $db = "lovelynails";
    private $host = "127.0.0.1";
    protected $user = "jasminejess";
    protected $pass = "CS401pass";

    public function getConnection () {
        try {
            $conn = new PDO("mysql:host={$this->host};port=8889;dbname={$this->db}", $this->user, $this->pass);
            return $conn;
        } catch (Exception $e) {
            echo print_r($e,1);
            exit;
        }
    }

    public function getUsers () {
        $conn = $this->getConnection();
        return $conn->query("select * from users", PDO::FETCH_ASSOC);
    }

    public function addUser ($name, $email, $password) {
        try {
            $conn = $this->getConnection();
            $query = "Insert into users (email, Name, password) values (:email, :name, :password);";
            $q = $conn->prepare($query);
            $q->bindParam(":email", $email);
            $q->bindParam(":name", $name, PDO::PARAM_STR);
            $q->bindParam(":password", $password);
            $q->execute();
        } catch (Exception $e) {
            echo print_r($e, 1);
            exit();
        }
    }

    public function userExists($email) {
        try {
            $conn = $this->getConnection();
            $query = "Select * from Users where email = :email;";
            $q = $conn->prepare($query);
            $q->bindParam(":email", $email);
            $q->execute();
            $result = $q->fetchAll(PDO::FETCH_ASSOC);
            if($result > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo print_r($e, 1);
            exit();
        }
    }
}
