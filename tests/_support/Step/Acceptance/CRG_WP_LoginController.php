<?php
namespace Step\Acceptance;

class CRG_WP_LoginController extends \AcceptanceTester
{

    public function loginAsAdmin()
    {
        $I = $this;
        $I->wantToTest('generate invitation code and sign up using it');
    	$I->amOnUrl('http://google.com');
    }

}
