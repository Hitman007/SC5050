<?php

namespace SC5050;

trait AbilityToConfirmWoocommerceDefaultPagesExist{
    
    public function confirmWoocommerceDefaultPagesExist(){
        $I = $this;
        $I->wantTo('Confirm the default Woocommerce pages exist.');
        
		global $CRG_homePageURL; //This variable is set in the tests/_bootstrap.php file
		
		$checkoutPageURL = $CRG_homePageURL . "/index.php/checkout/";
		$I->amOnUrl($checkoutPageURL);
		$I->dontSee('Not Found');
		
		$cartPageURL = $CRG_homePageURL . "/index.php/cart/";
		$I->amOnUrl($cartPageURL);
		$I->dontSee('Not Found');
		$I->see('Cart');
    }
}
