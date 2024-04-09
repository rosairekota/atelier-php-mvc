<?php
namespace Phalcon\controller;

use Phalcon\Controller\ControllerBase;
use Phalcon\models\MedicationModel;

class MedicationController extends ControllerBase
{
    public function index(){
        $medications = MedicationModel::findAll();
        $this->setVar('medications',['medications'=>$medications]);
    }
}
