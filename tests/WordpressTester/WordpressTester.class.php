<?php

namespace CustomRayGuns;

class WordpressTester extends \AcceptanceTester implements WordpressTesterInterface{
	use AbilityToActivatePlugin_pluginName;
	use AbilityToSeePluginIsActivated_pluginName;
	use AbilityToLoginWordpressAs_role;
	use AbilityToResetTheDatabase;
	use AbilitToPurchaseWooProduct;

}

interface WordpressTesterInterface{
    public function activatePlugin($pluginName);
    public function seePluginIsActivated($pluginName);
    public function loginWordpressAs($role);
    public function resetTheDatabase($SQL_DumpFile);
    public function purchaseWooProduct($productURL);
}