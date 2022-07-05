<?php

class Database
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $data;

    public function __construct($host, $user, $password, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect()
    {
        try {
            $data = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->database.";charset=utf8",
                $this->user,
                $this->password
            );
        } catch (Exception $error) {
            die("Erreur : " . $error->getMessage());
        }
    }
}
