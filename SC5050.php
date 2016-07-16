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

require 'CustomRayGuns/SC5050RequiredConstants.php';

//This is the autoloader:
require 'CustomRayGuns/php-autoloader/autoloader.php';

//Sets up the Custom Post Type with CRUD
$CPT_wCRUD = new CPT_wCRUD;
$CPT_wCRUD->createCPTs();
$CPT_wCRUD->listenForIncomingCPT_CRUD();

$TicketCPTs = new CPTsPRTNTicket;

//This script handles the plugin activation:
require 'CustomRayGuns/SC5050ActivationScript.php';

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

/* This section is for the CRG admin area. */
//this conditional should be changed to something more secure
if (isset($_GET['sc5050'])){
	$MotherShipReceiver = new MotherShipReceiver;
	$MotherShipReceiver->receivePayload();
}

add_action( 'admin_menu', 'SC5050\launchAdminView' );
function launchAdminView(){
	$AdminPageView = new AdminPageView;
}

add_action('add_meta_boxes', 'SC5050\addCustomCPTsMetaBoxes' );
//Add custom meta boxes to CPTs:
function addCustomCPTsMetaBoxes(){
	$CustomCPTsMetaBoxes = new CustomCPTsMetaBoxes;
}

$MetaBoxListeners = new MetaBoxListeners;

add_action('admin_enqueue_scripts', 'SC5050\addDatePicker');

function addDatePicker(){
	wp_enqueue_script('jquery-ui-datepicker');
	//wp_enqueue_script('jquery-ui');
	wp_enqueue_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
}

add_action( 'save_post_raffle', 'SC5050\wpse63478_save' );
function wpse63478_save() {
//die('joy');
}
