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
	    $infoCompiler = new infoCompiler;
	    $dataPackage = $infoCompiler->dataPackage;
	    $string = "https://crg-remote-hitman007.c9users.io?sc5050=$dataPackage";

        
        // 1. initialize
$ch = curl_init();
 
// 2. set the options, including the url
curl_setopt($ch, CURLOPT_URL, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
 
// 3. execute and fetch the resulting HTML output
$output = curl_exec($ch);
 
// 4. free up the curl handle
curl_close($ch);
	}
}