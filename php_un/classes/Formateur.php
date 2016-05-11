<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of formateur
 *
 * @author Thierry
 */
class Formateur extends Person{
    //put your code here
    protected $formations = [];
    
    protected static $nombreFormateur = 0;

    public function __construct($leprenom, $lenom, $lage, $tabformations) {
        parent::__construct($leprenom, $lenom, $lage);
        $this->formations = $tabformations;
        self::$nombreFormateur += 1;
    }    
    
    //Getter & Setter
    public function getFormations() {
        return $this->formations;
    }

    public static function getNombreFormateur() {
        return self::$nombreFormateur;
    }

    public function setFormations(array $tabFormations) {
        $this->formations= $tabFormations;
        return $this;
    }

    public static function setNombreFormateur($nombreFormateur) {
        self::$nombreFormateur = $nombreFormateur;
        return self;
    }

    //Autres
    public function addFormation($laFormation){
        $recherche[]=$laFormation;
        
        $cle = array_search($this->formations, $recherche, false);
        
        if ($cle===FALSE){
            $this->formations[]=$laFormation;
        }
    }
    
     public function suppFormation($laFormation){
        $recherche[]=$laFormation;
        
        $cle = array_search($this->formations, $recherche, false);
        
        if ($cle!==FALSE){
            unset($this->formations[$cle]);   
        }
    }
    
    public function setEvaluationStagiaire(Stagiaire $leStagiaire, array $eval)
    {
      $leStagiaire->addEvaluation($eval);    
      
    }
}
