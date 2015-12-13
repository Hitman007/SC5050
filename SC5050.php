<?php
/*
Plugin Name: South Carolina 50/50
Plugin URI: http://customrayguns.com/
Description: 
Version: 3.0
Author: Jim Maguire
Author URI: http://customrayguns.com/
*/

namespace SC5050;

require 'CustomRayGuns/SC5050RequiredConstants.php';

//This is the autoloader:
require 'CustomRayGuns/php-autoloader/autoloader.php';

//This script handles the plugin activation:
require 'CustomRayGuns/SC5050ActivationScript.php';



//This class controlls the purchasing of the products
$WooCustomProductPurchaseController = new WooCustomProductPurchaseController;

//	    update_option('blogname', 'JOY!!!');