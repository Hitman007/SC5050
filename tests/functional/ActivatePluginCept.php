<?php

$pluginName = "balls";
$I = new CustomRayGuns\WordpressTester($scenario);
$activateAPluginCalled_pluginName = "activate a plugin called $pluginName";
$I->wantTo($activateAPluginCalled_pluginName);