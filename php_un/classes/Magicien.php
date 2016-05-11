<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Magicien
 *
 * @author Thierry
 */
class Magicien {
    //put your code here
    
    protected $lapin = 1;
    protected $nom;
    
    public function __construct($nom) {
        $this->nom = $nom;
    }   

    public function __destruct() { //destructeur
        echo "plus de magicien ".$this->nom;
    }   
    
    public function __get($attribut) { //lors d'une tentative d'acces à un attribut protege ou abscence
        
        $getter='get'.ucfirst($attribut);
        
        if (method_exist($this,$getter))
                return $this->$getter();
        else
            throw new Exception("Pas de getter pour cet attribut ! ");
    }   
    
    public function __set($attribut, $value) { //lors d'une tentative d'acces à un attribut protege ou abscence
        
        $setter='set'.ucfirst($attribut);
        
        if (method_exist($this,$setter))
                return $this->$setter($valeur);
        else
            throw new Exception("Pas de setter pour cet attribut ! ");
    }   
    
    public function __call($methode, $argument) { //pas les droits ou abscente
        echo "Appel de la méthode : ".$methode." avec les arguments : ".implode(' ',$argument);
        
    }   
    
    public function __clone(){

    }
    
}
