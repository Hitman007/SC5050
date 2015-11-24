<?php
// This is global bootstrap for autoloading
require(dirname(__FILE__)."/../CustomRayGuns/php-autoloader/autoloader.php");

global $CRG_homePageURL;
$CRG_homePageURL = 'https://crg-remote-hitman007.c9users.io/';

global $CRG_loginPageURL;
$CRG_loginPageURL = $CRG_homePageURL . 'wp-login.php';

global $CRG_adminRoleUserName;
$CRG_adminRoleUserName = "AutomaticTester";

global $CRG_adminRoleUserPassword;
$CRG_adminRoleUserPassword = "(*(rX87JY5qW&1!cPTz9NgI0";

//used in abilityToResetTheDatabase.trait.php:
global $CRG_DBuserName;
global $CRG_DBname;
global $CRG_DBsetupPath;
$CRG_DBuserName = "hitman007";
$CRG_DBname = "c9";
$CRG_DBsetupPath = "~/workspace/wp-content/plugins/SC5050/tests/_data/CRG_NoPluginsOrData.sql";

//Plugin under test:
global $CRG_pLuginUnderTestVerboseName;
global $CRG_pluginUnderTestSlugName;
$CRG_pLuginUnderTestVerboseName = "South Carolina 50/50";
$CRG_pluginUnderTestSlugName = "SC5050";