<?php

//les fonction date

$date = date('Y');          //annees


$date = date('m');              // nombre mois       

$date = date('d');              //nombre jour

$date = date('D');              //name de jour 3 caractere

$date = date('l');              //name de jour comple

// echo $date;

// echo '<br>';

$date = date('d/m/Y')  ;         //05/06/2024

$date = date('w');                 //nombre de jour dans la semaine

$date = date('H');                  // heur 

$date = date('i');                  //minute

$date = date('s');                  //seconds

// echo $date;

$today = strtotime('05/06/2024');

$dateToday = date('d/m/Y',$today);
echo $dateToday;



//les fonctions de chaines de caractéres

$salutation = 'Bonjour';

echo strlen($salutation);               //affichage le nombre de caractere
echo '<hr>';

echo strtolower($salutation);                                                   //transformer de minuscul
echo '<hr>';

echo strtoupper($salutation);                                                   //transformer de majiscule
echo '<hr>';

echo trim($salutation);                                                   //transformer de majiscule
echo '<hr>';