<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/");
  }

  public function testMyTestCase()
  {
    $this->open("/cine/index.php/site/index");
     $this->windowMaximize();
    $this->click("link=Ver detalle");
    sleep(2);
    $this->click("link=Comprar");
     sleep(2);
    $this->type("id=LoginForm_username", "luis");
    $this->type("id=LoginForm_password", "123");
    $this->click("name=yt0");
    $this->click("name=yt0");
    sleep(2);
    $this->click("link=Logout (luis)");
    sleep(2);
  }
}
?>