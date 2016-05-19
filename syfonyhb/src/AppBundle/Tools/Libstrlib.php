<?php
namespace AppBundle\Tools;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Libstrlib extends \Twig_Extension{
    
    
    private $session;
    private $suite;
    private $max;
    
    public function __construct($lsession, $lsuite,$lmax) {
        $this->session = $lsession;
        $this->suite = $lsuite;
        $this->max = $lmax;
        
        
    }

    public function getName() {
        return "Extrait";
    }
    
    public function getFunctions() {
        return array(new \Twig_SimpleFunction("extrait",array($this, "getExtrait")));
    }
    
    function getExtrait($text, $fin=10){

        $atraiter = substr(strip_tags(html_entity_decode($text,ENT_QUOTES)),0,$this->max);

        if (strlen($atraiter)>$fin)
        {
            if (substr($atraiter,$fin,1)!=' ')
            {           
                $pos = strrpos($atraiter,' ');
                if ($pos!=FALSE)
                {
                 $atraiter = substr($atraiter,0,$pos);
                }
            }  
        }
        $this->session->getFlashBag()->add("info","extrait généré");
        $atraiter=$atraiter.$this->suite;

        return $atraiter;
    }
}