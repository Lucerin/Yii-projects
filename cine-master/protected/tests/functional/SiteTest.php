<?php

class SiteTest extends WebTestCase
{
	public function testIndex()
	{
		$this->open('');
		 $this->windowMaximize();
		  sleep(2);
		$this->assertTextPresent('Welcome');
		$this->assertTextPresent('Practica');
		$this->assertTextPresent('Congratulations!');
	}

	public function testContact()
	{
		$this->open('site/contact');
		 $this->windowMaximize();
		  sleep(2);
		$this->assertTextPresent('Contact Us');
		$this->assertElementPresent('name=ContactForm[name]');

		$this->type('name=ContactForm[name]','tester');
		$this->type('name=ContactForm[email]','tester@example.com');
		$this->type('name=ContactForm[subject]','test subject');
		  sleep(2);
		$this->click("css=.btn");
		$this->waitForTextPresent('Body cannot be blank.');
		$this->waitForTextPresent('The verification code is incorrect');
		  sleep(2);
	}

	public function testLoginLogout()
	{
		$this->open('');
		$this->windowMaximize();
		sleep(2);
		// ensure the user is logged out
		if($this->isTextPresent('Logout'))
			$this->clickAndWait('link=Logout (demo)');

		// test login process, including validation
		$this->clickAndWait('link=Login');
		$this->assertElementPresent('name=LoginForm[username]');
		$this->type('name=LoginForm[username]','demo');
		$this->click("css=.btn");
		$this->waitForTextPresent('Password cannot be blank.');
		$this->type('name=LoginForm[password]','demo');
		$this->clickAndWait("css=.btn");
		$this->assertTextNotPresent('Password cannot be blank.');
		$this->assertTextPresent('Logout');
  		sleep(2);
		// test logout process
		$this->assertTextNotPresent('Login');
		$this->clickAndWait('link=Logout (demo)');
		sleep(2);
		$this->assertTextPresent('Login');
	}
}
