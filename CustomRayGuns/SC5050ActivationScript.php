<?php

//This script handles the plugin activation:

namespace SC5050;

$pathToPlugin = dirname(__DIR__);
$pathToPlugin = $pathToPlugin . '/SC5050.php';

register_activation_hook( $pathToPlugin, 'SC5050\saveActivationOption');

function saveActivationOption() {
  add_option('Activated_Plugin','sc5050');
}

//this checks if the plugin has been activated via a database option set in the last request
if(is_admin()&&get_option('Activated_Plugin')=='sc5050') {
    add_action('init','SC5050\doActivatePlugin');
}

function doActivatePlugin(){
        delete_option('Activated_Plugin');
        $CRG_ZombieClient = new CRG_ZombieClient;
        $CRG_ZombieClient->registerWithCRG();
}
