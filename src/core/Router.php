<?php
namespace Phalcon\Core;
use Phalcon\Controller\MedicationController;
use Phalcon\Controller\ProviderController;

class Router{

    public function handle(string $path):void{
       $medicationCtrl = new MedicationController();
       $providerCtrl = new ProviderController();

        if ($path==='/medications') {
           $medicationCtrl->index();
        
        } elseif ($path==='/providers') {
        
            $providerCtrl->index();
        
        }
        
    }
}