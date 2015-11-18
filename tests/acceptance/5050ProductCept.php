<?php
//This tests that the custom products have been added to Woo
$I = new CustomRayGuns\WordpressAcceptanceTester($scenario);
$I->wantTo('Make sure that custom products have been added');
$I->thisPluginIsActivated('woocommerce');
$I->loginWordpressAs('admin');
global $CRG_homePageURL; //This variable is set in the tests/_bootstrap.php file
$productsPageURL = $CRG_homePageURL . "/wp-admin/edit.php?post_type=product";
$I->amOnPage($productsPageURL);
$I->see('SKU');
