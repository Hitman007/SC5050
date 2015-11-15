<?php
// This is global bootstrap for autoloading
include('php-autoloader/autoloader.php');

global $CRG_homePageURL;
$CRG_homePageURL = 'http://ec2-54-175-20-216.compute-1.amazonaws.com';

global $CRG_loginPageURL;
$CRG_loginPageURL = 'http://ec2-54-175-20-216.compute-1.amazonaws.com/wp-login.php';

global $CRG_adminRoleUserName;
$CRG_adminRoleUserName = "Tester";

global $CRG_adminRoleUserPassword;
$CRG_adminRoleUserPassword = "Tester123$";
