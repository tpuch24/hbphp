<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstractPerson
 *
 * @author Thierry
 */
abstract class AbstractPerson {

    //put your code here
    protected $prenom;
    protected $age;
    
    protected $erreur = array();
    protected static $population = 0;
  
//CONSTANTES
    const TETE = 1;

    abstract public function __construct($leprenom, $lenom, $lage);
    
    abstract public function parler($message);
    
    public function nombreDeTete(){
        return self::TETE;
    }
    
    public function bonjour(){
        echo 'hello <br>';
    }

    public function ciao(){
        echo 'bye <br>';
    }

    
    
}
