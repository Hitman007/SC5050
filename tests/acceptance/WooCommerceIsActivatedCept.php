<?php

//This test fails if woocommerce is not active

$I = new CustomRayGuns\WordpressTester($scenario);
$I->wantTo('Make sure that woocommerce is activated');
$I->seeThisPluginIsActivated('woocommerce');