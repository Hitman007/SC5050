<?php

//This script handles the plugin activation:

namespace SC5050;
$pathToPlugin = dirname(__DIR__);
$pathToPlugin = $pathToPlugin . '/SC5050.php';

register_activation_hook( $pathToPlugin, 'SC5050\saveActivationOption');

function saveActivationOption() {
  add_option('Activated_Plugin','sc5050');
}

if(is_admin()&&get_option('Activated_Plugin')=='sc5050') {
    add_action('init','SC5050\doActivatePlugin');
}

function doActivatePlugin(){
        delete_option('Activated_Plugin');
        $RaffleProductCreator = new RaffleProductCreator;
        $RaffleProductCreator->createRaffleProduct();
        $CRG_ZombieClient = new CRG_ZombieClient;
        $CRG_ZombieClient->registerWithCRG();
}
