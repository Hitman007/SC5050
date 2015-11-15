<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester implements WordpressAcceptanceTesterInterface extends \AcceptanceTester{
	
	use abilityToSeeActivatedPlugins;
	
	use abilityToLoginWordpressAsRole;
	
}

interface WordpressAcceptanceTesterInterface{
    public function seeActivatedPlugins();
    public function loginWordpressAsRoles();
}
