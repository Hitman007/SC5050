<?php

//This test fails if a given plugin is not active.

include_once 'WordpressAcceptanceTester.class.php';
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->wantTo('Make sure that a plugin is installed');
$I->seeActivatedPlugin('Testable');
