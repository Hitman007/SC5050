<?php
// This is global bootstrap for autoloading
require(dirname(__FILE__)."/../CustomRayGuns/php-autoloader/autoloader.php");

global $CRG_homePageURL;
$CRG_homePageURL = 'https://crg-remote-hitman007.c9users.io/';

global $CRG_loginPageURL;
$CRG_loginPageURL = $CRG_homePageURL . 'wp-login.php';

global $CRG_adminRoleUserName;
$CRG_adminRoleUserName = "Jim";

global $CRG_adminRoleUserPassword;
$CRG_adminRoleUserPassword = "Karlinski123$";

//used in abilityToResetTheDatabase.trait.php:
global $CRG_DBuserName;
global $CRG_DBname;
global $CRG_DBsetupPath;
$CRG_DBuserName = "hitman007";
$CRG_DBname = "c9";
$CRG_DBsetupPath = "~/workspace/wp-content/plugins/SC5050/tests/_data/C9backupfile.sql";
