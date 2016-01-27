<?php

$I = /*am a */ new SC5050\WordpressTester($scenario);

$I->wantTo("Login to Wordpress as an admin");
$I->loginWordpressAs('admin');