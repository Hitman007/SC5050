<?php

//This tests that the custom products have been added to Woo

$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->wantTo('Make sure that custom products have been added');
$I->seeThisPluginIsActivated('woocommerce');
$I->loginWordpressAs('admin');
