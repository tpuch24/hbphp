<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stagiare
 *
 * @author Thierry
 */
class Stagiaire extends Person{
    //put your code here
    protected $formation;
    protected $evaluation = [];
    protected static $nombreStagiaire = 0;
    
    public function __construct($leprenom, $lenom, $lage, $formation) {
        parent::__construct($leprenom, $lenom, $lage);
        $this->formation = $formation;
        self::$nombreStagiaire += 1;
    }

    public static function getNombreStagiaire() {
        return self::$nombreStagiaire;
    }

        
    public function getFormation() {
        return $this->formation;
    }

    public function setFormation($formation) {
        $this->formation = $formation;
        return $this;
    }

    public function addEvaluation(array $eval)
    {
       $this->evaluation[] = $eval;
    }

}
