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


function smashing_add_post_meta_boxes() {
	die('line 52');
	add_meta_box(
			'smashing-post-class',      // Unique ID
			esc_html__( 'Post Class', 'example' ),    // Title
			'smashing_post_class_meta_box',   // Callback function
			'post',         // Admin page (or post type)
			'side',         // Context
			'default'         // Priority
			);
}
function smashing_post_class_meta_box( $object, $box ) { ?>

  <?php wp_nonce_field( basename( __FILE__ ), 'smashing_post_class_nonce' ); ?>

  <p>
    <label for="smashing-post-class"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="smashing-post-class" id="smashing-post-class" value="<?php echo esc_attr( get_post_meta( $object->ID, 'smashing_post_class', true ) ); ?>" size="30" />
  </p>
<?php }
/* Meta box setup function. */
function smashing_post_meta_boxes_setup() {

	/* Add meta boxes on the 'add_meta_boxes' hook. */
	add_action( 'add_meta_boxes', 'smashing_add_post_meta_boxes' );
}