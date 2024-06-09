<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('DELETE FROM posts WHERE id = :id');

//execution de la requte

$statement->execute([
    ':id'=> 4    
]);