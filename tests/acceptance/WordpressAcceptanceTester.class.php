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
		$x = "Make sure that a $pluginName is activated";
		$I->wantTo($x);
		$x = "sudo wp plugin status $pluginName --allow-root";
		$str = shell_exec($x);
		if (strpos($str, 'Active') !== FALSE){
		 }else{
		 	$x = "The plugin $pluginName is not activated";
    			throw new \Exception($x);
		 }
	}
}
