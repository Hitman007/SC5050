<?php

namespace CustomRayGuns;

/* This cept tests the activation of the plugin. First it resets the DB, and
then it activates the plugin. Finally, it checks the effects of activating
the plugin.
*/

$pluginName = "SC5050";

$I = new WordpressTester($scenario);

$activateAPluginCalled_pluginName = "activate a plugin called $pluginName";
$I->wantTo($activateAPluginCalled_pluginName);

$I->resetTheDatabase();
$I->activateThePlugin($pluginName);
$I->seeThatThePluginHasBeenActivatedNamed($pluginName);