<?php

namespace CustomRayGuns;

trait abilityToLoginWordpressAsRole{

	public function loginWordpressAs($role) {
		$I = $this;
		$I->amOnPage('http://ec2-54-175-20-216.compute-1.amazonaws.com/wp-login.php');
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
