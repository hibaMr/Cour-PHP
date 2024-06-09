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
        $logged = true;   //changer true ==> false bache ibane like changement
    ?>
    <div>
        <?php if($logged == true): ?>
            <div class="welcome">welcome</div>
        <?php else: ?>
            <div class="login">login in</div>
        <?php endif ;?>
    </div>

    <?php
        $today = date('N');

        switch($today){
            case 1:
                echo "lundi";
                break;
            case 2:
                echo "mardi";
                break;
            case 3:
                echo "mercredi";
                break;
            case 4:
                echo "jeudi";
                break;
            case 5:
                echo "vendredi";
                break;
            case 6:
                echo "sumdi";
                break;
            case 7:
                echo "demanche";
                break;
        }
    ?>
</body>
</html>