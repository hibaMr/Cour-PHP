<?php
$id = $_GET['id'];
require 'database.php';
$statment = $pdo->prepare('SELECT * FROM etudient where id = :id');
$statment->execute([
    ':id' => $id
]);
$etudients = $statment->fetch(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] && isset($_POST['modifier'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $filier = $_POST['filiere'];
    $photo = 'image/img5.jpeg';
    $id = $_POST['id'];

    if(!empty($nom) && !empty($prenom) && !empty($filier) && !empty($photo)){
        $statment = $pdo->prepare('UPDATE etudient SET nom = :nom,prenom = :prenom,filier = :filier,photo = :photo where idStagiaire = :id');
        $statment->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':filier' => $filier,
            ':photo' => $photo,
            ':id' => $id
        ]);
        header('location:affichage.php');
    }else{
        echo 'les information sont correcte';
    }
}