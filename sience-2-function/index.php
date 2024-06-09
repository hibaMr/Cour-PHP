<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php

        function sayHello($nom){
            return 'hello ' . $nom;
        }

        $bonjour = sayHello("hiba");
        echo $bonjour;
        echo "<br>";

    ?>    
    

    <?php
        $moy = 12;

        function moyenne($nomber1,$nomber2){
            global $moy;                        //global katraje3e lina dake li locale ==> globale o dake li kaykone globale bhale dike moy li kayna fi linge 26 katreje3o locale
            $moy = ($nomber1 + $nomber2)/2;
            return $moy ;
        }

        $moyen = moyenne(19,18);
        $color = "";
        $decision = "";
        if($moyen >= 10){
            $decision = "Admis";
            $color = "colorGreen";
        }else if($moyen >= 8 && $moyen <10){
            $decision = "Redoublant";
            $color = "colorBlue";
        }else if ($moyen < 8){
            $decision = "Eliminer";
            $color = "colorRed";
        }
        
        echo $moy;

    ?>

    <div class="<?php echo $color ?>" >
        <?php
            echo $decision;
            echo "<br>";
            echo "<h1> $moyen</h1>";
        ?>
        
    </div>

    
    <!-- satatic -->

    <?php
        function incrementer(){
            static $i = 0;      //hadi katkhalina mhafedine 3ela valeure lekhera
            echo $i;
            $i++;
        }

        incrementer();          // ==>0   kone madernache static   ==>0
        incrementer();          // ==>1   kone madernache static   ==>0
        incrementer();          // ==>2   kone madernache static   ==>0
    
    ?>

    


</body>
</html>