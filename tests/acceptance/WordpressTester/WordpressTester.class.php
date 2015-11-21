<?php

namespace CustomRayGuns;

class WordpressTester extends \AcceptanceTester implements WordpressTesterInterface{
	use abilityToSeeThisPluginIsActivatedPluginName;
	use abilityToLoginWordpressAsRole;
	use abilityToDetermineTheStatusOfThePluginCalled_PluginName;
	use abilityToResetTheDatabase;
}

interface WordpressTesterInterface{
    public function seeThisPluginIsActivated($pluginName);
    public function loginWordpressAs($role);
    public function determineTheStatusOfThePluginCalled($pluginName);
    public function resetTheDatabase();
}