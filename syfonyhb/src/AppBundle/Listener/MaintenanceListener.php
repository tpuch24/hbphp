<?php
namespace AppBundle\Listener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaintenanceListener
 *
 * @author thierry
 */
class MaintenanceListener{
    //put your code here
    private $actif;
    private $templating;
    
    function __construct($actif, $templating) {
        $this->actif = $actif;
        $this->templating = $templating;
    }
    

    public function onKernelResponse(FilterResponseEvent $event){
        
        if ($event->IsMasterRequest())
        {
            if ($this->actif){
                $response = $this->modeMaintenance($event->getResponse());
                $event->setResponse($response);
            }
        }
        return;
    }
     public function getName() {
        return "Extrait";
    }
    
    protected function modeMaintenance(Response $response){
        $content = $this->templating->render("blog/maintenance.html.twig");
        $response->setContent($content);
        return $response;
    }
}
