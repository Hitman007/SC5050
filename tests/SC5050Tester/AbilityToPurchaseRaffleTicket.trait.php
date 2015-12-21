<?php

namespace SC5050;

trait AbilityToPurchaceRaffleTicket{
	
	//This is a webdriver function
	public function purchaseRaffleTicket($productPage){
        	$I = $this;
        	$I->purchaseWooProduct($productPage);
        //throw new \Exception("function does not exist -- YET purchaceATicket()");
	}
	
}
