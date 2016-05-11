<?php

header('Content-type: text/html;charset=utf-8');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'Avant !!<br><br>';
$db = new PDO('mysql:host=localhost;dbname=centreformation','root','', array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH
));

var_dump($db);
$db->exec("SET NAMES UTF8");

$result = $db->query('SELECT * from stagiaire;');

echo '<br><br>';
var_dump($result);
echo '<br><br>';

//PDO::FETCH_ASSOC
//PDO::FETCH_OBJ ou fetchobject()
//PDO::FETCH_BOTH
//$ligne= $result->fetch(PDO::FETCH_BOTH);
//echo '<br><br>';
//var_dump($ligne);
//
//$ligne= $result->fetch(PDO::FETCH_BOTH);
//echo '<br><br>';
//var_dump($ligne);
//
//$ligne= $result->fetch(PDO::FETCH_BOTH);
//echo '<br><br>';
//var_dump($ligne);

while ($ligne = $result->fetch(PDO::FETCH_ASSOC)){
    echo $ligne['nom'].'<br>';
}

$result->closeCursor();


//////////////////////////////////////
$result = $db->query('SELECT * from stagiaire;');
$result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Stagiaire');

$lignes = $result->fetchAll();

echo '<br><br>';
var_dump($lignes);
echo '<br><br>';

////////////////////////
//Requetes préparées
////////////////////////
$id=3;
$age=12;
$nom = 'Ventura';

$sql ='SELECT * FROM stagiaire WHERE id=? AND age=?';

$result->bindParam(1,$id, PDO::PARAM_INT);
$result->bindParam(2,$age, PDO::PARAM_INT);

$result->execute();

//ou

$sql ='SELECT * FROM stagiaire WHERE id=:id AND age=:age';

$result->bindParam(':id', PDO::PARAM_INT);
$result->bindParam(':age', PDO::PARAM_INT);

$result->bindValue(':id', $id);
$result->bindValue(':id', $age);

$result->execute();

echo '<br><br>';
var_dump($lignes);
echo '<br><br>';

