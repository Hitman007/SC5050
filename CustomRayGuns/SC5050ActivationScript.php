<?php

//This script handles the plugin activation:

namespace SC5050;
//die('1');
$pathToPlugin = dirname(__DIR__);
$pathToPlugin = $pathToPlugin . '/SC5050.php';

register_activation_hook( $pathToPlugin, 'SC5050\saveActivationOption');

function saveActivationOption() {
   // die('2');
  add_option('Activated_Plugin','sc5050');
}

if(is_admin()&&get_option('Activated_Plugin')=='sc5050') {
    add_action('init','SC5050\doActivatePlugin');
    //die('3');
}

function doActivatePlugin(){
        //die('4');
        delete_option('Activated_Plugin');
        $RaffleProductCreator = new RaffleProductCreator;
        $RaffleProductCreator->createRaffleProduct();

}