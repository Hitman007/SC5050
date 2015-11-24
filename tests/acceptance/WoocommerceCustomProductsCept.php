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
$I = /*am a */ new CustomRayGuns\WordpressTester($scenario);
$makeSureThePluginUnderTestSlugNamePluginActivationWorksProperly = "Make sure the $CRG_pluginUnderTestSlugName plugin activation works properly!";
$I->wantTo($makeSureThePluginUnderTestSlugNamePluginActivationWorksProperly);
//*****************************************************************************


//**** SCENARIO: An admin looks at the products page in Woocommerce ***********
//Given the following plugins are activated:
    $I->seePluginIsActivated($CRG_pluginUnderTestSlugName); //This variable is set in the tests/_bootstrap.php file
    //The plugin Woocommerce is required for SC5050 to work:
    //$I->seePluginIsActivated('woocommerce');
    /*And*/ $I->resetTheDatabase('~/workspace/wp-content/plugins/SC5050/tests/_data/CRG_PluginsActivated.sql');
/*When*/ $I->loginWordpressAs/*an*/('admin');
    /*And*/ $I->amOnPage($productsPageURL); 
/*Then*/ $I->/*should*/see('50/50 Raffle Ticket'); //This is the name of the product, and should be visible in the admin dashboard.
//*****************************************************************************