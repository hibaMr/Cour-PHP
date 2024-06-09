<?php 

$host = 'localhost';
$port = 3306;
$dbName = 'posts';
$user = 'root';
$password = "";

$dsn = "mysql:host={$host};port={$port};dbname= {$dbName};charset=utf8";


try {
    $pdo = new PDO($dsn,$user,$password);

    echo 'connection succssfully';
} catch (PDOException $e) {
    echo 'Connection Failed : ' . $e -> getMessage();
}
