<?php
namespace Step\Acceptance;

class CRG_WP_LoginController extends \AcceptanceTester
{

    public function loginAsAdmin()
    {
        $I = $this;
    	$I->amOnUrl('http://google.com');
    }

}
