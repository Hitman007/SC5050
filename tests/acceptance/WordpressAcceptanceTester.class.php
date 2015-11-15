<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester implements WordpressAcceptanceTesterInterface{
	
	use abilityToSeeActivatedPlugins;
	
	use abilityToLoginWordpressAsRole;
	
}

interface WordpressAcceptanceTesterInterface{
    public function seeActivatedPlugins();
    public function loginWordpressAsRoles();
}
