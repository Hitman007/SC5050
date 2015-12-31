<?php

namespace CustomRayGuns;

class WoocommerceTester extends WordpressTester implements WoocommerceTesterInterface{
	use AbilitToPurchaseWooProduct;
	use AbilityToConfirmWoocommerceDefaultPagesExist;
}

interface WoocommerceTesterInterface{
    public function purchaseWooProduct($productURL);
    public function confirmWoocommerceDefaultPagesExist();
}