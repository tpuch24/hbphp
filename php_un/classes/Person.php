<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author Thierry
 */
class  Person {
    //put your code here
    protected $id;
    protected $prenom;
    protected $age;
    
    protected $erreur = array();
    protected static $population = 0;
  
//CONSTANTES
    const TETE = 1;

    public function __construct($lid, $leprenom, $lenom, $lage)
    {
        self::$population += self::TETE;
        $this->setId($lid);
        $this->setPrenom($leprenom);
        $this->setNom($lenom);
        $this->setAge($lage);
    }
    

    public function parler($message){
        echo $message.'<br>';
    }
    
    public function nombreDeTete(){
        return self::TETE;
    }
    
    //Getter - Setter
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

        public function getErreur() {
        return $this->erreur;
    }

    public static function getPopulation() {
        return self::$population;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }


    
    
}
