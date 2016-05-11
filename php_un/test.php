<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*var_dump($_GET);*/
?>

<a href="?nom=riri&amp;nom1=loulou">lien</a> 

<BR>

<?php
if (isset($_GET['nom'])) :
    ?>
<p>Bonjour, <?php echo htmlspecialchars( $_GET["nom"].' '.$_GET["nom1"])?></p>
    
<?php endif; ?>
