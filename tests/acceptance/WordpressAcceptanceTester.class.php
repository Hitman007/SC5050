<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester{
	
	public function loginWordpressAs($role) {
		$I = $this;
		$I->amOnPage('http://localhost/wp-login.php');
		$I->see('Log In');
		switch ($role) {
			case "admin":
				$I->fillField('log', 'CustomRayGuns');
				$I->fillField('pwd', 'Karlinski123$');
				$I->click('Log In');
				$I->see('Howdy');
				break;
			default:
				throw new \Exception('login role not recognized');
				break;
		}
	}
}
