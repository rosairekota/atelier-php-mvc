<?php
namespace Phalcon\Controller;

use Phalcon\Controller\ControllerBase;

class ProviderController extends ControllerBase
{
    public function index(){
        $this->setVar('/providers');
    }
}
