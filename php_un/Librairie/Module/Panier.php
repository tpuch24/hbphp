<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panier
 *
 * @author Thierry
 */

namespace Librairie\Module;

use PDO;

class Panier {
    //put your code here
    protected $contenu;
    
    public function __construct($contenu = []) {
        $this->contenu = $contenu;
    }
    
    public function connection()
    {
        $db = new PDO('mysql:host=localhost;dbname=centreformation','root','', array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH
        ));
    }

    public function addArticle(\Librairie\Article $unArticle){
        $contenu[]=$unArticle;
    }
}
