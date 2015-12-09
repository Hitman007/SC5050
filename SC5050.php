<?php
/*
Plugin Name: South Carolina 50/50
Plugin URI: http://customrayguns.com/
Description: 
Version: 3.0
Author: Jim Maguire
Author URI: http://customrayguns.com/
GitHub Plugin URI: https://github.com/Hitman007/SC5050
GitHub Branch: master
*/

namespace SC5050;

require 'CustomRayGuns/php-autoloader/autoloader.php';

register_activation_hook( __FILE__, 'SC5050\saveActivationOption');

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
}
