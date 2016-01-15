<?php

$I = /*am a */ new SC5050\SC5050Tester($scenario);
$I->wantTo("purchase a ticket");

global $productPermalink; global $CRG_homePageURL; $productPage = $CRG_homePageURL . $productPermalink;
$I->purchaseRaffleTicket($productPage);