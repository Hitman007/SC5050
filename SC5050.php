<?php
/*
Plugin Name: South Carolina 50/50
Plugin URI: http://customrayguns.com/
Description: THIS IS A DESCRIPTOPN
Version: 1.0
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/

namespace SC5050;

require 'CustomRayGuns/SC5050RequiredConstants.php';

//This is the autoloader:
require 'CustomRayGuns/php-autoloader/autoloader.php';

//Setup Raffle Custom Post Types:
$RaffleCPTs = new RaffleCPTs;

//This script handles the plugin activation:
require 'CustomRayGuns/SC5050ActivationScript.php';

//This class controlls the purchasing of the products
$WooCustomProductPurchaseController = new WooCustomProductPurchaseController;

if (isset($_GET['sc5050'])){
    $MotherShipReceiver = new MotherShipReceiver;
    $MotherShipReceiver->receivePayload();
}

add_action( 'admin_menu', 'SC5050\launchAdminView' );
function launchAdminView(){
	$AdminPageView = new AdminPageView;
}
