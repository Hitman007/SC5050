<?php

namespace CustomRayGuns;

trait AbilitToPurchaseWooProduct{

	public function purchaseWooProduct($productURL){
		$I=$this;
		$I->amOnPage($productURL);
		$I->see('ADD TO CART');
		
		//This class was taken by viewing the Add Cart button with Firefox:
		$I->click("//button[@class='single_add_to_cart_button button alt']");
		
		$I->see('View Cart');
		$I->click('View Cart');
		$I->see('Proceed To Checkout');
		$I->click("//a[@class='checkout-button button alt wc-forward']");
		$I->see('Billing Details');
	}
	
}