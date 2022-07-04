<?php

$config = array(
    "host" => "localhost",
    "user" => "alaska",
    "password" => "password",
    "database" => "alaska_database",
);


try {
    $database = new PDO(
        "mysql:host=".$config["host"].";dbname=".$config["database"].";charset=utf8",
        $config["user"],
        $config["password"]
    );
} catch (Exception $error) {
    die("Erreur : " . $error->getMessage());
}
