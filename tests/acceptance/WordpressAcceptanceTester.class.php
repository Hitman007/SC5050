<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester implements WordpressAcceptanceTesterInterface{
	
	//public function __construct(){die('WordpressAcceptanceTester line 7');}
	
	use abilityToSeeThisPluginIsActivatedPluginName;
	
	use abilityToLoginWordpressAsRole;
	
}

interface WordpressAcceptanceTesterInterface{
    public function thisPluginIsActivated($pluginName);
    public function loginWordpressAs($role);
}