<?php

//session

    session_start();                                                                //hadi darori diriha fi session ya3eni fima tb4i tsta3emli session

    $_SESSION['user'] = 'ADMIN';

    var_dump($_SESSION);

    //session_destroy();                                                                //hadi catmessahe lina dake lcode li caune fi tablo dyale application li fi cookie

    //unset($_SESSION['user']);                                                           //hadi katmssahe lina dike admin ya3eni ma4adache tha9e9e condition

    if($_SESSION['user'] == 'ADMIN'){
        echo 'You are the ADMIN';
    }else{
        echo 'you are a GUEST';
    }


    echo '<br>';
//cookie

    setcookie('nom','mribeh',time() + 60,'/');

    setcookie('nom','ELADNANI',time() + 60,'/');                                            //hena 4adi tebedel lina mribeh bi ELADNANI

    var_dump($_COOKIE);

    if(isset($_COOKIE['nom'])){                                                          // isset => heta tkone
        echo 'WELCOM' . $_COOKIE['nom'];
    }

    //setcookie('nom','mribeh',time() - 3600,'/');                                       //hena bache nmessho hiba gelna lihe bli rahe 4adi tssali 9ebel 1h ya3eni hade lwa9ete li hena fihe db - 1h y3eni bhale ila gelti lihe rahe salat 9ebel 1h

    require 'database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>