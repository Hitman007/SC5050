<?php
/*
Plugin Name: South Carolina 50/50
Plugin URI: http://customrayguns.com/
Description: 
Version: 4.0
Author: Jim Maguire
Author URI: http://customrayguns.com/
GitHub Plugin URI: https://github.com/Hitman007/SC5050
GitHub Branch: master
*/

namespace CustomRayGuns;

die ("SC5050 is activated!");

require 'CustomRayGuns/php-autoloader/autoloader.php';

$RaffleProductCreator = new RaffleProductCreator;
