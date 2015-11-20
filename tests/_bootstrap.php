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
