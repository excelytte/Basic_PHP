<?php

$host = "127.0.0.1";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password, 'shop');

if($conn->connect_error){
    die('Connection Failed:'. $conn->connect_error);
}

echo 'connection successful ';

$hashedPassword = password_hash('secret', PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password) VALUES ('John', 'john@gmail.com', '$hashedPassword')";



if ($conn->query($sql) == true) {
    echo 'user created successfully';
} else {
    echo 'failed to create user ' . $conn->error;
}