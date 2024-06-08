<?php
session_start();
require 'database.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST["nom"]) && isset($_POST["id"])){
        $statement = $pdo -> prepare("SELECT * FROM clients WHERE nom = :nom AND id = :id");
        $statement -> execute([
            ':nom' => $_POST['nom'],
            ':id' => $_POST['id']
        ]);
        $user = $statement -> fetch(PDO::FETCH_OBJ);
        if($user){
            $_SESSION['user'] = $user;
            header('Location: affichage.php');
        }
    }

}