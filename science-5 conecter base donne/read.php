<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('SELECT * FROM posts');

//execution de la requte

$statement->execute();

//fetch data                                                           nkhabiwe data
$results = $statement->fetchAll(PDO::FETCH_ASSOC);                                          //      hena kandiro chehale mne line ila kano bzaf kandiro All o ila wahed kandiro 4ire fatch


echo '<per>';
var_dump($results);
echo '<per>';