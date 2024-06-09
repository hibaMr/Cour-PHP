<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('SELECT * FROM posts WHERE id = :id AND titre = :titre');

//execution de la requte

$statement->execute([
    ':id'=> 1,
    ':titre'=> "First Post"
]);

//fetch data                                                           nkhabiwe data
$results = $statement->fetchAll(PDO::FETCH_ASSOC);                                          //      hena kandiro chehale mne line ila kano bzaf kandiro All o ila wahed kandiro 4ire fatch


echo '<per>';
var_dump($results);
echo '<per>';