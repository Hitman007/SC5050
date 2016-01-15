<?php

$I = /*am a */ new CustomRayGuns\WordpressTester($scenario);

$I->wantTo("Login to Wordpress as an admin");
$I->loginWordpressAs('admin');