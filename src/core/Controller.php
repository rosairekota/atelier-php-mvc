<?php
namespace Phalcon\Core;

use stdClass;

class Controller 
{
   protected $view ='';
 
    public function setVar($view, $data=[]){
        extract($data);
        require_once '../views/'.$view.'.php';
       
    }
   
}