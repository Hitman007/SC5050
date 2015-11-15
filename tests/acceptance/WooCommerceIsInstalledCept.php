<?php

//This test fails if a given plugin is not active.

include 'WordpressAcceptanceTester.class.php';
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->seeActivatedPlugin('Ass');
