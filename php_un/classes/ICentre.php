<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ICentre
 *
 * @author Thierry
 */
interface ICentre {
    const AGREMENT ="oui";
    
    abstract function setFormateur($leprenom, $lenom, $lage, $tabformations);
    abstract function setStagiaire($leprenom, $lenom, $lage, $formation);
    
}
