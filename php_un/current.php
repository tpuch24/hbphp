<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require 'classes/Person.php';
//require 'classes/Stagiaire.php';
//require 'classes/Formateur.php';

function autoLoad($classe){
 echo $classe;
 $file ='classes/'.$classe.'.php';
 if (file_exists($file)) 
     include $file;
}
spl_autoload_register('autoLoad');

function autoLoad2($classe){
 echo $classe;
 $file ='lib/'.$classe.'.php';
 if (file_exists($file)) 
    include $file;
}
spl_autoload_register('autoLoad2');

//$truc = new Taratata();

$moi = new Person('Thierry','puch',52);
//$moi = new Person();
$toi = new Person('Maurice','papin',52);



$moi->setPrenom('Thierry')->setNom('puch')->setAge(52);

var_dump($moi);
echo '<br><br>';
var_dump($toi);
echo '<br><br>';
echo 'Pop: '.Person::getPopulation();

$stag1 = new Stagiaire('Jonas','parmentier',37,'langage Object');
echo '<br><br>';
var_dump($stag1);

echo '<br><br>';
echo 'Pop: '.Person::getPopulation();

echo '<br><br>';
echo 'Pop stag: '.  Stagiaire::getNombreStagiaire();

$form1 = new Formateur('Armand','dupond',47,[]);

$form1->addFormation('java');
$form1->addFormation('langage object');
echo '<br><br>';
var_dump($form1);

$form1->suppFormation('php');
echo '<br><br>';
var_dump($form1);

$form1->suppFormation('langage object');
echo '<br><br>';
var_dump($form1);

echo '<br><br>';

$form1->setEvaluationStagiaire($stag1, array('java',12));

echo '<br><br>';
var_dump($stag1);

$mage1 = new Magicien('Bazar');
echo '<br><br>';
var_dump($mage1);
echo '<br><br>';
