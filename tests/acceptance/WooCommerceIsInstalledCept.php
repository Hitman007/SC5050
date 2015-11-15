<?php

//This test fails if a given plugin is not active. WooCommerce

include_once 'WordpressAcceptanceTester.class.php';
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->wantTo('Make sure that a plugin is activated');
$I->seeThisPluginIsActivated('WooCommerce');
