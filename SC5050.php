<?php
/*
Plugin Name: South Carolina 50/50
Plugin URI: http://customrayguns.com/
Description: 
Version: 2.0
Author: Jim Maguire
Author URI: http://customrayguns.com/
GitHub Plugin URI: Hitman007/SC5050
GitHub Plugin URI: https://github.com/Hitman007/SC5050
*/

namespace CustomRayGuns;

echo ("SC5050 is activated!");

require 'CustomRayGuns/php-autoloader/autoloader.php';

$RaffleProductCreator = new RaffleProductCreator;
