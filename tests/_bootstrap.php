<?php
// This is global bootstrap for autoloading
require(dirname(__FILE__)."/../CustomRayGuns/php-autoloader/autoloader.php");

global $CRG_homePageURL;
//$CRG_homePageURL = 'https://crg-remote-hitman007.c9users.io/';
//$CRG_homePageURL = 'http://ec2-52-90-107-126.compute-1.amazonaws.com/';
$CRG_homePageURL = 'http://ec2-52-90-107-126.compute-1.amazonaws.com/';


global $CRG_loginPageURL;
$CRG_loginPageURL = $CRG_homePageURL . 'wp-login.php';

global $CRG_adminRoleUserName;
$CRG_adminRoleUserName = "AutomaticTester";

global $CRG_adminRoleUserPassword;
$CRG_adminRoleUserPassword = "(*(rX87JY5qW&1!cPTz9NgI0";

//used in abilityToResetTheDatabase.trait.php:
global $CRG_DBuserName; $CRG_DBuserName = "hitman007";
global $CRG_DBname; $CRG_DBname = "c9";
global $CRG_DBsetupPath; $CRGDBsetupPath = "~/workspace/wp-content/plugins/SC5050/tests/_data/CRG_NoPluginsOrData.sql";

//Plugin under test:
global $CRG_pLuginUnderTestVerboseName; $CRG_pLuginUnderTestVerboseName = "South Carolina 50/50"; $CRG_pluginUnderTestSlugName; $CRG_pluginUnderTestSlugName = "SC5050";

//SC5050
global $productTextName;
$productTextName = "50/50 Raffle Ticket";
global $productPermalink;
$productPermalink = "product/5050-raffle-ticket/";

//Woocommerce
global $productsPageURL; $productsPageURL = "http://ec2-52-90-107-126.compute-1.amazonaws.com/wp-admin/edit.php?post_type=product";
