<?php
//This test fails if a given plugin is not active. WooCommerce
$I = new CustomRayGuns\WordpressTester($scenario);
$I->wantTo('Make sure that Woocommerce is activated');
$I->seeThisPluginIsActivated('woocommerce');
