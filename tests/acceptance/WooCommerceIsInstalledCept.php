<?php

//This test fails if a given plugin is not active.

include_once 'WordpressAcceptanceTester.class.php';
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->seeActivatedPlugin('Ass');
