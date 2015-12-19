<?php

namespace SC5050;

trait AbilityToConfirmPurchaseInfoHasBeenReceivedOnTheMotherShip{

    //This is a webdriver function, or Selenium
	public function ConfirmPurchaseInfoHasBeenReceivedOnTheMotherShip(){
		$I = $this;
		$I->wantTo("Confirm purchase info has been received by the mothership.");
        throw new \Exception("function does not exist: ConfirmPurchaseInfoHasBeenReceivedOnTheMotherShip");
	}

}