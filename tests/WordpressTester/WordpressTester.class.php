<?php

namespace CustomRayGuns;

class WordpressTester extends \AcceptanceTester implements WordpressTesterInterface{
	use AbilityToActivatePlugin_pluginName;
	use AbilityToSeePluginIsActivated_pluginName;
	use AbilityToLoginWordpressAs_role;
	use AbilityToResetTheDatabase;
	
	//Woocommerce functions:
	use AbilitToPurchaseWooProduct;
	use AbilityToConfirmWoocommerceDefaultPagesExist;

}

interface WordpressTesterInterface{
    public function activatePlugin($pluginName);
    public function seePluginIsActivated($pluginName);
    public function loginWordpressAs($role);
    public function resetTheDatabase($SQL_DumpFile);
    
    //Woocommerce functions, optional:
    public function purchaseWooProduct($productURL);
    public function confirmWoocommerceDefaultPagesExist();
}
