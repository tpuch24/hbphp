<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$fichier ='';

$val = 'page1';
if (isset($_GET)) 
{
    $val= $_GET["page"];
}
switch  ($val)
{    
    case 'page2': 
        $fichier = 'page2.php';
    break;
    case 'page3': 
        $fichier = 'page3.php';
    break;
    default:
    case 'page1': 
        $fichier = 'page1.php';
    break;
}
//if ((file_exists('buff/'.$fichier)))
//{
//        $contenu= file_get_contents ('buff/'.$fichier);
//}
//else
//{
//    ob_start();
//    include 'inc/'.$fichier;
//    $contenu =  ob_get_clean();
//}
  ob_start();
    include 'inc/'.$fichier;
    $contenu =  ob_get_clean();
include 'templates/layout.php';

//file_put_contents('buff/'.$fichier, $contenu);