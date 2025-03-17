<?php

$servername = "localhost";  
$username = "root";        
$password = "Senai@118";             
$dbname = "banco";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>