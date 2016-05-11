<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
        <?php phpinfo() ?> <BR><BR>
        <?php echo MON_TITRE ?> <BR><BR>
        Bienvenue sur <?php echo MON_TITRE.' '.$usr_nom.' '.$usr_prenom ?><BR>
        <img src=<?php echo CHEMIN_IMAGE?> ><BR>
    </body>
</html>
