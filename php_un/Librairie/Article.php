<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author Thierry
 */

namespace Librairie;
use Librairie\Module;

class Article {
    //put your code here
    protected $titre;
    
    public function __construct($titre) {
        $this->titre = $titre;
    }
    //Getter & Setter
    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    //---------
    public function addPanier(Panier $monpanier){
        
       $monpanier->addArticle($this);
        
    }
            

}
