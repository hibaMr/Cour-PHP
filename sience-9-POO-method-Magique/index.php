<?php

class Personne{
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom,$prenom,$age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age; 
    }

    //GETTER                                    //hado kandiroha ila kane 3adna 4ire attribu 1 prive o ymken like diriha fihome kamlin mais rahe 4adi 4ire tsa3ebi 3elik
    public function getNom(){
        return $this->nom;
    }

    //setter                                    //hado kandiroha ila kane 3adna 4ire attribu 1 prive o ymken like diriha fihome kamlin mais rahe 4adi 4ire tsa3ebi 3elik
    public function setNom($nom){
        $this->nom = $nom;
    }

    //method magic __get                                                //3iwad manb9awe ndiro lcole attribut get bohdo kandiro hadi li katsahel 3lina

    public function __get($proprety){                                   //proprety hada howa li katsayftihe comme paramitre li kay4omplassi lina hadoke les attribut (nom,prenom,age) katsayftihom ltahet 
        if(property_exists($this,$proprety)){
            return $this->$proprety  . ' ' . __LINE__;                  //hadi cataffichi lina line li  ketebna fihe hade __LINE__
        }
        return $this;
    }

    //method magic __set

    public function __set($proprety,$value){                            //hade proprety hiya attribut o hade value hiya bache itbedel                        
        if(property_exists($this,$proprety)){
            $this->$proprety = $value;
        }
    }

    //method magic __toString => str

    public function __toString(){                            
        return $this->nom . ' ' .$this->prenom . ' Instancie de la class : ' . __CLASS__;      //hade __CLASS__ hiya les constantes magiques hena kataffichie lina smite lclass 
    }

    //method magic __destruct => str

    public function __destruct(){                                           //hadi katdare hiya akhere haja ya3eni fache kansaliwe ga3e les method kadare hade method bohedha bache n3arefo bli rahe salina ga3e les information                      
        echo '<br><br> destruct ran';
    }

}


$p1 = new Personne('MRIBEH','Hiba',19);

echo $p1->nom;                      //get
echo '<br><br>';
echo $p1->nom = 'ELADNANI';                 //set
echo '<br><br>';
echo $p1;                                     //toString