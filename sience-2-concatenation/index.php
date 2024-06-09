<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $nombre = 12;
        $prenom = 'Ahmed';
        $etudiant = 1;
        $etudiants = ["MRIBEH","ELADNANI","ELKHYATI"];
        $matieres = array("PHP","HTML");
        $nombre1 = 20;
        $nombre2 = 15;
        $nombre3 = '10';
        $note = '20';

        //

        var_dump($nombre3);     //var_dump ==> pour afficher le type
        echo "<br>";
        $note = (int)($note);
        $nombre2 = (string)($nombre2);
        $nombre1 = (bool)($nombre1);
        var_dump($note);
        echo "<br>";
        $result = $nombre1 + $nombre3;
        echo $result


    ?>
</body>
</html>