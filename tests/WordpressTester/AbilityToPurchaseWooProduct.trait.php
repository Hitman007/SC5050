<?php

namespace CustomRayGuns;

trait AbilitToPurchaseWooProduct{

	public function purchaseWooProduct($productURL){
		$I=$this;
		$I->amOnPage($productURL);
		$I->see('ADD TO CART');
		
		//This class was identified by viewing the Add Cart button with Firefox:
		$I->click("//button[@class='single_add_to_cart_button button alt']");
		$I->see('View Cart');
		$I->click('View Cart');
		$I->see('Proceed To Checkout');
		
		//This class was identified by viewing with Firefox:
		$I->click("//a[@class='checkout-button button alt wc-forward']");
		$I->see('Billing Details');
		$I->selectOption('form select[name=account]', 'Premium');
		$I->submitForm(
			'.woocommerce-checkout', 
				[
				'billing_first_name' => 'DeleteFirstName',
				'billing_last_name' => 'DeleteLastName',
				'billing_phone' => '(555)555-1212',
				'billing_email' => 'delete@delme.com',
				'billing_address_1' => '123 Mulberry Lane',
				'billing_address_2_field' => 'Apt 2-b',
				'billing_city' => 'Anytown',
				'billing_state_field' => 'Nevada',
				'billing_postcode' => '12345'
				],
			'woocommerce_checkout_place_order'
		);
	}
	
}