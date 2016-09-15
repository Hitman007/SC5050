<?php
/*
Plugin Name: South Carolina 50/50
Plugin URI: http://SC5050.com/
Description: A plugin to allow the selling of Raffle tickets
Version: 1.0
Author: Jim Maguire
Author URI: http://SC5050.com/
*/

namespace SC5050;

//This is the autoloader:
require 'CustomRayGuns/php-autoloader/autoloader.php';

$SC5050Plugin = new SC5050Plugin;

$SC5050Plugin->sellTickets();
$SC5050Plugin->manageRaffles();
//$SC5050Plugin->trackSales();

/*
 * This class controlls the purchasing of the products. The purpose of this
 * controller is to handle the message that needs to be sent to CRG. It does stuff
 * if the user purchases a ticket on a Woo site. */
add_action( 'woocommerce_thankyou', 'SC5050\lauchCustomProductPurchaseController' );
function lauchCustomProductPurchaseController(){
	//A better conditional needs to be inserted here. Right now it's just doing this on EVERY woo purch*/
	$CustomProductPurchaseController = new CustomProductPurchaseController;
	$CustomProductPurchaseController->doSendProductInfoToMotherShip();
}

/* This section is for the CRG admin area. 
//this conditional should be changed to something more secure
if (isset($_GET['sc5050'])){
	$MotherShipReceiver = new MotherShipReceiver;
	$MotherShipReceiver->receivePayload();
}

add_action( 'admin_menu', 'SC5050\launchAdminView' );
function launchAdminView(){
	$AdminPageView = new AdminPageView;
}
*/


add_action( 'save_post_raffle', 'SC5050\wpse63478_save' );
function wpse63478_save() {
//die('joy');
}
