<?php
//conexao.php

$host = 'localhost';
$dbname = 'hotel';
$username = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error){
    echo "erro na conexão: " . $error->getMessage();
    die();
}
