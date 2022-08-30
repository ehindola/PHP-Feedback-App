<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'peter');
define('DB_PASS', '1011990');
define('DB_NAME', 'php_learn');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
}
