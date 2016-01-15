<?php

//Setup:
$I = /*am a */ new CustomRayGuns\WordpressTester($scenario);
global $CRG_homePageURL; //This variable is set in the tests/_bootstrap.php file
global $CRG_pLuginUnderTestVerboseName; //This variable is set in the tests/_bootstrap.php file
global $CRG_pluginUnderTestSlugName; //This variable is set in the tests/_bootstrap.php file
global $productsPageURL; //This variable is set in the tests/_bootstrap.php file
global $productTextName; //This variable is set in the tests/_bootstrap.php file
/*
Feature: custom products have been added to Woocommerce.
    In order to sell 50/50 raffle tickets.
    As the system
    I should have a custom Woo product ready for sale

Scenario: The custom product is visable in the admin dashboard
    Given the plugin is activated
    When an admin visits the Woocommerce products area
    Then he should see the custom product called "50/50 Raffle Ticket"
*/

$I->wantTo("See that custom product is visable in the admin dashboard");
$I->loginWordpressAs/*an*/('admin');
$I->amOnUrl($productsPageURL);
$I->/*should*/see($productTextName);

// php codecept.phar run acceptance /var/www/html/wp-content/plugins/SC5050/tests/acceptance/CustomProductVisibleInDashboardCept.php --html -vvv