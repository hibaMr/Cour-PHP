<form action="" method="GET">
    <div>
        <input type="text" id="nom" name="nom"/>  <!-- hena fine kaybane lina le role dyale name hena hadike name howa key o nom howa value hena kan3amro array bi hade name -->
    </div><br>
    <div>
        <input type="text" id="prenom" name="prenom"/>
    </div><br>
    <input type="submit">
</form>


<!-- GET -->
<?php
    var_dump($_GET);        //hena 4adi t3etana array khawi bache i3emare 4adi diri "http://localhost:8000/?nom=hiba" ketbi hade /?nom=hiba heda hadik localhost:8000 li kayne lfo9e o 4adi i3emare array bi nom = hiba  o bache nzido attribut akhore kandiro & ==> 'http://localhost:8000/?nom=MRIBEH&prenom=hiba'
    echo '<br>';
    echo '<br>';
    var_dump($_GET["nom"] ?? '');   //pour afficher le nom parce que cette array ce form de array associative 

?>

<!-- post -->

<form action="" method="POST">
    <div>
        <input type="text" id="nom" name="nom"/>  
    </div><br>
    <div>
        <input type="text" id="prenom" name="prenom"/>
    </div><br>
    <input type="submit">
</form>


<!-- POST -->
<?php
    var_dump($_POST);        
    echo '<br>';
    echo '<br>';
    var_dump($_POST["nom"] ?? '');   

?>
