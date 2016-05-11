<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="description" content="test_ob html" />   
        <link rel="stylesheet" href="css/style.css" />    
    </head>
    <body>
        <?php
        ob_start();
        ?>
            <div id='div1'>
                Premier DIV
            </div>
         <?php
        //ob_end_clean();
         $buffer = ob_get_clean();
        ?>
            <div id='div2'>
                Second DIV
            </div>
         <?php
           echo $buffer;
        ?>
        
    </body>
</html>