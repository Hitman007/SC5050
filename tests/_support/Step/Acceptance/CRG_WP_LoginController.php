<?php
namespace Step\Acceptance;

class CRG_WP_LoginController extends \AcceptanceTester
{

    public function loginAsAdmin()
    {
        $I->wantTo('generate invitation code and sign up using it');
        $I = $this;
    	$I->amOnUrl('http://google.com');
    }

}
