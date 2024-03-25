<?php

function connect_db()
{
    $host = "localhost";
    $database = "api";
    $username = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    return $pdo;
}