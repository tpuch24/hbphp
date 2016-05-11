<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
include 'lib/strlib.php';

$titre='Contenu de la Page1';
$text1='sqdqsdqsfd dsfsdf sdfsd QSDQSD QSD QSD QSD SQ sqdsq sqd sqf sqfdsfsd dsfsdfsdsfsdsdf dsfdsfsdfsdfsd';
$text=extrait($text1,32);
var_dump($text);
include 'templates/vue1.php';