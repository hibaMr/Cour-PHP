<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $stagiaire = ['nom'=>"MRIBEH",'prenom'=>"Hiba",'groupe'=>"DD106",'age'=>"19"];
        $stagiaires = [
            0=>['nom'=>"MRIBEH",'prenom'=>"Hiba",'groupe'=>"DD106",'age'=>"19"],
            1=>['nom'=>"ELADNANI",'prenom'=>"Naoual",'groupe'=>"DD106",'age'=>"21"],
            2=>['nom'=>"ELKHAYATI",'prenom'=>"Ferdaouss",'groupe'=>"DD106",'age'=>"20"],
            3=>['nom'=>"KARAMAT",'prenom'=>"Iman",'groupe'=>"DD104",'age'=>"18"],
        ];

        $matiere = array("POO","HTML");
    ?>

    <?php
        echo $stagiaire['nom'];
        echo '<br>';
        echo $stagiaires[1]['groupe'];

        echo '<pre>';
        var_dump($stagiaires[2]);           //afficher les information : type , nombre des elements ...
        echo '<pre>';
    ?>
    
</body>
</html>