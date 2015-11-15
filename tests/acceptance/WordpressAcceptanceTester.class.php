<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester{
	
	use abilityToSeeActivatedPlugins;
	
	use abilityToLoginWordpressAsRole;
	
	public function loginWordpressAs($role) {
		$I = $this;
		global $CRG_homePageURL; //This variable is set in the tests/_bootstrap.php file
		$I->amOnPage($CRG_homePageURL);
		$I->see('Log In');
		switch ($role) {
			case "admin":
				$I->fillField('log', 'Tester');
				$I->fillField('pwd', 'Tester123$');
				$I->click('Log In');
				$I->see('Howdy');
				break;
			default:
				throw new \Exception('login role not recognized');
				break;
		}
	}
}
