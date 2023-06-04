<?php

namespace testTopics\mysql;

use PDO;

class DbHandler
{
    private $servername = "localhost";
    private $dbName = 'workbench';
    private $username = "postgres";
    private $password = "password";

    public function __construct()
    {
        try {
            $conn = $this->makeConnection();
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function makeConnection()
    {
        $conn = new PDO(
            "pgsql:host=" . $this->getServername() . '; dbname=' . $this->getDbName(),
            $this->getUsername(),
            $this->getPassword()
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }

    public function createUser($firstname = null, $lastname = null, $petId = null)
    {
        try {
            $conn = $this->makeConnection();
            $sql = "INSERT INTO users (firstname, lastname, pet_id)
            VALUES ('John', 'Doe', '1')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    public function createPet($name = null)
    {
        try {
            $conn = $this->makeConnection();
            $sql = "INSERT INTO pets (name)
            VALUES ('Hamster')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    public function getUsers()
    {
        try {
            $conn = $this->makeConnection();
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getUser($id)
    {
        try {
            $conn = $this->makeConnection();
            $stmt = $conn->prepare("SELECT * FROM users WHERE id=" . $id);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * Get the value of servername
     */ 
    public function getServername()
    {
        return $this->servername;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of dbName
     */ 
    public function getDbName()
    {
        return $this->dbName;
    }
}
