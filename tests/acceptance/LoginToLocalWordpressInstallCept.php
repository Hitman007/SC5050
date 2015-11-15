<?php

//include 'WordpressAcceptanceTester.class.php';
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->wantTo('Login to Wordpress as an admin');
$I->loginWordpressAs('admin');
