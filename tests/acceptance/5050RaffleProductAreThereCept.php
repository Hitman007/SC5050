<?php

//************************    SETUP    ***************************************
global $CRG_homePageURL; //This variable is set in the tests/_bootstrap.php file
global $CRG_pLuginUnderTestVerboseName; //This variable is set in the tests/_bootstrap.php file
global $CRG_pluginUnderTestSlugName; //This variable is set in the tests/_bootstrap.php file
$productsPageURL = $CRG_homePageURL . "wp-admin/edit.php?post_type=product"; //Default Woocommerce product page
//*****************************************************************************


//************************    FEATURE   ***************************************
//Custom products have been added to Woocommerce.
// In order to sell 50/50 raffle tickets.
//Feature: There are 50/50 Raffles Tickets

$I = /*am a */ new CustomRayGuns\WordpressTester($scenario);
$I->wantTo("See that a product called 50/50 Raffle Ticket is there");
//*****************************************************************************


//**** SCENARIO: An admin looks at the products page in Woocommerce ***********
//Given the following plugins are activated:
    $I->seePluginIsActivated($CRG_pluginUnderTestSlugName); //This variable is set in the tests/_bootstrap.php file
    //The plugin Woocommerce is required for SC5050 to work:
    $I->seePluginIsActivated('woocommerce');
/*When*/ $I->loginWordpressAs/*an*/('admin');
    /*And*/ $I->amOnPage($productsPageURL); 
/*Then*/ $I->/*should*/see('50/50 Raffle Ticket');