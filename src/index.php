<?php

$config = array(
    "host" => "localhost",
    "user" => "alaska",
    "password" => "password",
    "database" => "alaska_database",
);

require("models/database.php");

$database = new Database(
    $config["host"],
    $config["user"],
    $config["password"],
    $config["database"]
);

$database->connect();
