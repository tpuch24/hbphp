<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var_dump($_POST);

if (isset($_POST)) 
{
}
define('MON_TITRE',"Thierry PUCH homepage");
$usr_prenom = "Franck";
$usr_nom = "Dubosc";
define('CHEMIN_IMAGE',"images/monimage1.jpg");

?>

<html>
    <head>
        <title><?php echo MON_TITRE ?> </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="description" content="test html" />    
    </head>
    <body>
        <h1>Enregistrement :</h1
        <form method="POST">
        <BR>
        Nom <input type="text" name="nom" /><br/>
        prenom <input type="text" name="nom1" /><br/>
        <br/>
        <input type="submit" name="Ok" value="OK"/>
        
    </body>
</html>