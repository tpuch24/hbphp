<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function extrait($text, $fin=10){
    $atraiter = substr(strip_tags($text),0,$fin);
    
    if (strlen($atraiter)<=$fin)
    {
        return $atraiter;
    }
    else
    {
        if (substr($atraiter,$fin,1)!=' ')
        {           
            $pos = strrpos($atraiter,' ');
            if ($pos!=FALSE)
            {
             $atraiter = substr($atraiter,0,$pos);
            }
        }
        $atraiter=$atraiter.'...';
        
        return $atraiter;
    }
}