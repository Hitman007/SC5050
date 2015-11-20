<?php

namespace CustomRayGuns;

class WordpressTester extends \AcceptanceTester implements WordpressTesterInterface{
	use abilityToSeeThisPluginIsActivatedPluginName;
	use abilityToLoginWordpressAsRole;
	use abilityToDetermineTheStatusOfThePluginCalled_PluginName;
}

interface WordpressTesterInterface{
    public function seeThisPluginIsActivated($pluginName);
    public function loginWordpressAs($role);
    public function determineTheStatusOfThePluginCalled($pluginName);
}