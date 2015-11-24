<?php

//Feature: The correct plugins are activated

$I = /*am a*/ new CustomRayGuns\WordpressTester($scenario);
$I->wantTo('Make sure that the correct plugins are activated');

$I->seePluginIsActivated('woocommerce');
$I->seePluginIsActivated('SC5050');