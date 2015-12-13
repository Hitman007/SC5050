<?php

/*
Feature: The site should send purchase info to the motherShip
    In order to keep track of purchase information
    Info is sent with every purchace to the motherShip
*/

$I = /*am a */ new SC5050\SC5050Tester($background);
$I->wantTo("Confirm Feature: The site should send purchase info to the motherShip");

/*
Scenario:
    When a user has purchased a ticket 
    Then the information is sent to $motherShip sendInfoToMotherShip();
*/

$I->purchaceATicket();
$I->confirmPurchaseInfoHasBeenReceivedOnTheMotherShip();