<?php
require 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNais = $_POST['dateNais'];
    $photo = "img5.jpeg";
    $filiere = $_POST['filiere'];
    if(!empty($nom)&&!empty($prenom)&&!empty($dateNais)&&!empty($photo)&&!empty($filier)){
        $statment = $pdo->prepare('INSERT INTO stagiaires(nom,prenom,dateNaissance,photo,id)values(:nom,:prenom,:dateNais,:photo,:filiere)');
        $statment->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':dateNais' => $dateNais,
            ':photo' => $photo,
            ':filiere' => $filiere
        ]);
        exit();
    }else{
        ?>
        <div class="alert alert-danger" role="alert">Required Failed</div>
        <?php
    }
}