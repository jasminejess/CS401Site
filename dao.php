<?php

require_once 'Klogger.php';

class Dao {

    private $db = "lovelynails";
    private $host = "127.0.0.1";
    private $user = "jasminejess";
    private $pass = "CS401pass";
    private $logger;

    public function __construct () {
        $this->logger = new KLogger("log.txt", Klogger::DEBUG);
    }

    public function getConnection () {
        $this->logger->LogDebug("Getting db connection");
        try {
            $conn = new PDO("mysql:host={$this->host};port=8889;dbname={$this->db}", $this->user, $this->pass);
            return $conn;
        } catch (Exception $e) {
            echo print_r($e,1);
            exit;
        }
    }

    public function getUsers () {
        $this->logger->LogDebug("Getting all users");
        $conn = $this->getConnection();
        return $conn->query("select * from users", PDO::FETCH_ASSOC);
    }

    public function addUser ($name, $email, $password) {
        $this->logger->LogDebug("Trying to add a new user...");
        try {
            $conn = $this->getConnection();
            $query = "Insert into users (email, Name, password) values (:email, :name, :password);";
            $q = $conn->prepare($query);
            $q->bindParam(":email", $email);
            $q->bindParam(":name", $name, PDO::PARAM_STR);
            $q->bindParam(":password", $password);
            $q->execute();
            $this->logger->LogDebug("New user added successfully");
        } catch (Exception $e) {
            $this->logger->LogDebug($e);
            exit();
        }
    }

    public function userExists ($email) {
        $this->logger->LogDebug("Trying to find a user...");
        try {
            $conn = $this->getConnection();
            $query = 'Select * from users where email = ":email;"';
            $q = $conn->prepare($query);
            $q->bindParam(":email", $email);
            $q->execute();
            $result = $q->fetchAll(PDO::FETCH_ASSOC);
            if($result > 0) {
                $this->logger->LogDebug("User found!");
                return true;
            } else {
                $this->logger->LogDebug("User doesn't exist");
                return false;
            }
        } catch (Exception $e) {
            $this->logger->LogDebug($e);
            exit();
        }
    }
}
