<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester{
	
	public function __construct(){die('WordpressAcceptanceTester line 7');}
	
	use abilityToSeeActivatedPlugins;
	
	use abilityToLoginWordpressAsRole;
	
}

interface WordpressAcceptanceTesterInterface{
    public function seeThisPluginIsActivated($pluginName);
    public function loginWordpressAsRoles($role);
}
