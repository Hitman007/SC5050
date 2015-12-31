<?php

namespace CustomRayGuns;

trait AbilityToConfirmWoocommerceDefaultPagesExist{
    
    public function confirmWoocommerceDefaultPagesExist(){
        $I = $this;
        $I->wantTo('Confirm the default Woocommerce pages exist.');
		global $CRG_homePageURL; //This variable is set in the tests/_bootstrap.php file
		$checkoutPageURL = $CRG_homePageURL . "checkout/";
		$I->amOnUrl($checkoutPageURL);
		$I->dontSee('Not Found');
    }
    
}
