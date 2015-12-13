<?php

namespace SC5050;

//This class detects, then does something when a product is purchased
class WooCustomProductPurchaseController{
    
    //This function listens for when a product is sold and the user is sent to the "Thank You" page
    public function __construct() {
        add_action( 'woocommerce_thankyou', array($this, 'doSendProductInfoToMotherShip') );
    }

    //This function is fired after the thank you event is detected.
	public function doSendProductInfoToMotherShip(){
	}

}