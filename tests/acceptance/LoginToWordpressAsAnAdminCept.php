<?php

$I = new CustomRayGuns\WordpressTester($scenario);
$I->wantTo('Login to Wordpress as an admin');
$I->loginWordpressAs('admin');