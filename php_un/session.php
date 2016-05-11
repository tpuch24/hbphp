<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

session_regenerate_id(true);
setcookie(session_name(), session_id(), time()+3600, '/', null, null, true);
//                                                  ,chemin, https, httponly
//
//if($_SESSION[IPadress]!=)



//
echo '<pre>';
var_dump($_SESSION);
echo '<br><br>';
var_dump($_COOKIE);

//fermer une session
session_destroy(); //supprime les fichier server

setcookie(session_name(), session_id(), 1, '/', null, null, true);//session mot né

unset($_SESSION[authentifie]);
