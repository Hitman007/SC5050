<?php

namespace CustomRayGuns;

class WordpressAcceptanceTester extends \AcceptanceTester{
	
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
	
	public function seeActivatedPlugin($pluginName){
		$I = $this;
		$I->wantTo('Make sure that a plugin is installed');
		$str = shell_exec("sudo wp plugin status Testable --allow-root");
		if (strpos($str, 'Active') !== FALSE){
		 }else{
    			throw new Exception('The plugin is not active');
		 }
	}
}
