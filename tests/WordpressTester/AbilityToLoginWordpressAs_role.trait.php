<?php

namespace CustomRayGuns;

trait AbilityToLoginWordpressAs_role{

	public function loginWordpressAs($role) {
		$I = $this;
		global $CRG_loginPageURL; //This variable is set in the tests/_bootstrap.php file
		$I->amOnPage($CRG_loginPageURL);
		$I->see('Log In');
		switch ($role) {
			case "admin":
				global $CRG_adminRoleUserName; //This variable is set in the tests/_bootstrap.php file
				$I->fillField('log', $CRG_adminRoleUserName);
				global $CRG_adminRoleUserPassword; //This variable is set in the tests/_bootstrap.php file
				$I->fillField('pwd', $CRG_adminRoleUserPassword);
				$I->click('Log In');
				$I->see('Howdy');
				break;
			default:
				throw new \Exception('login role not recognized');
				break;
		}
	}
}
