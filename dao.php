<?php

require_once 'KLogger.php';
require_once "user.php";

class Dao {
    // private $db = "lovelynails";
    // private $host = "127.0.0.1";
    // private $user = "jasminejess";
    // private $pass = "CS401pass";
    private $db = "heroku_57a3c48c74a1644";
    private $host = "us-cdbr-east-02.cleardb.com";
    private $user = "b79257f27769c9";
    private $pass = "6fb904e1";
    private $logger;

    public function __construct () {
        $this->logger = new KLogger("log.txt", KLogger::DEBUG);
    }

    public function getConnection () {
        $this->logger->LogDebug("Getting db connection");
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
            return $conn;
        } catch (Exception $e) {
            $this->logger->LogDebug("Failed to make db connection");
            echo print_r($e,1);
            exit;
        }
    }

    public function getUsers () {
        $this->logger->LogDebug("Getting all users");
        $conn = $this->getConnection();
        return $conn->query("SELECT * FROM users", PDO::FETCH_ASSOC);
    }

    public function addUser ($name, $email, $password) {
        $this->logger->LogDebug("Trying to add a new user...");
        try {
            $conn = $this->getConnection();
            $query = "INSERT INTO users (email, name, pass) VALUES (:email, :name, :password);";
            $q = $conn->prepare($query);
            $q->bindParam(":email", $email);
            $q->bindParam(":name", $name, PDO::PARAM_STR);
            $q->bindParam(":password", $password);
            $q->execute();
            $this->logger->LogDebug("New user added successfully");
            return true;
        } catch (Exception $e) {
            $this->logger->LogDebug($e);
            exit();
        }
    }

    public function userExists ($email) {
        $this->logger->LogDebug("Trying to find a user...");
        try {
            $conn = $this->getConnection();
            $query = "SELECT COUNT(*) FROM users WHERE email = ':email';";
            $q = $conn->prepare($query);
            $q->bindParam(":email", $email);
            $q->execute();
            $result = $q->fetch();
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

    public function checkUserLogin ($email, $password) {
        $this->logger->LogDebug("Trying to find a user...");
        try {
            $conn = $this->getConnection();
            $query = "SELECT * FROM users WHERE email = ':email';";
            $q = $conn->prepare($query);
            $q->bindParam(":email", $email);
            $q->execute();
            $result = $q->fetchColumn();
            if($result['pass'] == $password) {
                $this->logger->LogDebug("User login valid");
                return true;
            } else {
                $this->logger->LogDebug("User login invalid");
                return false;
            }
        } catch (Exception $e) {
            $this->logger->LogDebug($e);
            exit();
        }
    }
}
