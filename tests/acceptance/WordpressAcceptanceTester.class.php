<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester implements WordpressAcceptanceTesterInterface{
	
	use abilityToSeeActivatedPlugins;
	
	use abilityToLoginWordpressAsRole;
	
}

interface WordpressAcceptanceTesterInterface{
    public function seeThisPluginIsActivated($pluginName);
    public function loginWordpressAsRoles($role);
}
