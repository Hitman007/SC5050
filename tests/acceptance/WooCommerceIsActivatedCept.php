<?php

//This test fails if a given plugin is not active. WooCommerce

//include_once 'WordpressAcceptanceTester.class.php';
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->wantTo('Make sure that a Woocommerce is activated');
$I->seeThisPluginIsActivated('woocommerce');
