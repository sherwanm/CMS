<?php

$server = "localhost";
$username = "root";
$database = "users";
$password = "";

$connection = new mysqli($server, $username, $password, $database);

if(!$connection){
    die("Error: connection failed.".$connection->connect_error);
}
 