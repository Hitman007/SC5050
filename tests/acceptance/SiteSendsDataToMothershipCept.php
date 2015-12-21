<?php

/*
Feature: The site sends data with every purchace to the motherShip
    In order to keep track of purchase information
    As the system
    I should send data with every purchace to the motherShip
*/
$I = /*am a */ new SC5050\SC5050Tester($scenario);
$I->wantTo("Confirm Feature: The site sends data with every purchace to the motherShip");

/*
Scenario:
    When a user has purchased a ticket 
    Then the information is sent to $motherShip sendInfoToMotherShip();
*/
global $productPermalink; global $CRG_homePageURL; $productPage = $CRG_homePageURL . $productPermalink;
$I->purchaseRaffleTicket($productPage);
//$I->purchaseWooProduct($productPage);
$I->confirmPurchaseInfoHasBeenReceivedOnTheMotherShip();

/*Scenario:
    When a user has purchased a ticket
    Then they receive an email with the ticket info
*/
