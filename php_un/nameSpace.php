<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function autoLoad($classe){
 echo $classe;
 //$file ='Librairie/'.$classe.'.php';
 $file= str_replace('\\', '/', $classe).'.php';
 echo '<br><br>';
 echo $file;
 if (file_exists($file)) 
     include $file;
}
spl_autoload_register('autoLoad');

//----------
use Librairie\Article;
use Librairie\Module\Panier;

//$article1 =new Librairie\Article("casque X32");
$article1 =new Article("casque X32");
//echo '<br><br>';
var_dump($article1);
echo '<br><br>';
echo $article1->getTitre();
echo '<br><br>';

$monpanier = new Panier();
echo '<br><br>';
var_dump($monpanier);
echo '<br><br>';

$article1->addPanier($monpanier);
echo '<br><br>';
var_dump($monpanier);
echo '<br><br>';