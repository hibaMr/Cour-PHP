<?php
abstract class Vehicule{                                               // hade abstract kandiroha bache ndiklariwe bli rahe hade lclass rahe abstract
    protected $code;
    protected $nombrePlaces;
    protected $capacite;

    public function __construct($code,$nombrePlaces,$capacite){
        $this->code = $code;
        $this->nombrePlaces = $nombrePlaces;
        $this->capacite = $capacite;
    }

    public function affichage(){
        return "le code est : {$this->code} le nombre de places est : {$this->nombrePlaces} et la capacite est : {$this->capacite}";
    }

    abstract public function total();                                     //hadi derna liha haka hite hiya method abstract o dayman makaykonche fiha contenu
}


class Bateau extends Vehicule{
    private $couleur;
    private $prixPlaces;

    public function __construct($code,$nombrePlaces,$capacite,$couleur,$prixPlaces){
        parent::__construct($code,$nombrePlaces,$capacite);
        $this->couleur = $couleur;
        $this->prixPlaces = $prixPlaces;
    }

    public function afficher(){
        return parent::afficher() . "le couleur : {$this->couleur} {$this->prixPlaces}";
    }

    public function total(){
        return $this->prixPlaces * $this->nombrePlaces;
    }

}


$bateau1 = new Bateau (1947,5,5,"rouge",300);

echo $bateau1->afficher();

echo $bateau1->total();
