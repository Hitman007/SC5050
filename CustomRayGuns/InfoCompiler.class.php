<?php

namespace SC5050;

//This class compiles the info being sent to the motherShip
class InfoCompiler{
    
    public $dataPackage = array();
    
    public function __construct() {
        array_push($this->dataPackage, "sexy sexy");
    }
    
}
