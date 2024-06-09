<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('INSERT INTO posts(id,titre,contenu) VALUES (:id,:titre,;contenu)');

//execution de la requte

$statement->execute([
    ':id'=> 4,
    ':titre'=> "First Post",
    ':contenu'=>'hgytytdrsfxxcv'    
]);


//la creation des tables