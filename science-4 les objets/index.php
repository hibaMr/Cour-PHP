<?php

class VariableGlobal{
    public static $etablissement = 'ISFO';
}

$etab = VariableGlobal::$etablissement;   //===> attribut de class

class Utilisateur{
    private $nom;
    public $prenom;
    protected $age;

    public function __construct($nom,$prenom,$age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($argument){
        $this->nom = $argument;
    }
    

    public function presentez_vous(){
        return 'I am ' .$this->nom .' '.$this->prenom;
    }

}


class Etudiant extends Utilisateur{
    public $branche;
    public $groupe;

    public function __construct($nom,$prenom,$age,$branche,$groupe){
        parent::__construct($nom,$prenom,$age);
        $this->branche = $branche;
        $this->groupe = $groupe;
    }

    public function presentez_vous(){
        return parent::presentez_vous() . ' le branche '.  $this->branche . ' ' . 'le groupe '.$this->prenom . ' ' . $this->age;
        
    }

}




$utilisateur = new Utilisateur('MRIBEH','Hiba',16);

var_dump($utilisateur);

echo '<br>';
echo '<br>';

echo $utilisateur->presentez_vous();
echo '<br>';
echo '<br>';
echo $utilisateur->getNom();
echo '<br>';
echo '<br>';
echo $utilisateur->setNom('ELADNANI');
echo $utilisateur->getNom();

echo '<br>';
echo '<br>';



$etudiant = new Etudiant('KARAMAT','Iman',12,'DD','DD106');

echo $etudiant->presentez_vous();
echo '<br>';
echo '<br>';
var_dump($etudiant);

echo '<br>';
echo '<br>';


echo $etudiant->getNom();
echo '<br>';
echo '<br>';
echo $etudiant->setNom('ALKHIYATI');
echo $etudiant->getNom();