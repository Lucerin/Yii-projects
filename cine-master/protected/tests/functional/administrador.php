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
    $this->click("link=Login");
    $this->waitForPageToLoad("30000");
    $this->type("id=LoginForm_username", "admin");
    $this->type("id=LoginForm_password", "admin");
    $this->click("name=yt0");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Funcion");
    $this->waitForPageToLoad("30000");
    $this->click("link=Crear Funcion");
    $this->waitForPageToLoad("30000");
    $this->click("link=Categoria Funcion");
    $this->waitForPageToLoad("30000");
    $this->click("link=Create Categoria");
    $this->waitForPageToLoad("30000");
    $this->click("link=Clasificacion Funcion");
    $this->waitForPageToLoad("30000");
    $this->click("link=Create Clasificacion");
    $this->waitForPageToLoad("30000");
    $this->click("link=Sala");
    $this->waitForPageToLoad("30000");
    $this->click("link=Create Sala");
    $this->waitForPageToLoad("30000");
    $this->click("link=Sala Funcion");
    $this->waitForPageToLoad("30000");
    $this->click("link=Create SalaFuncion");
    $this->waitForPageToLoad("30000");
    $this->click("link=Tipo Sala");
    $this->waitForPageToLoad("30000");
    $this->click("link=Create Tipo");
    $this->waitForPageToLoad("30000");
    $this->click("link=Usuarios");
    $this->waitForPageToLoad("30000");
    $this->click("link=Create User");
    $this->waitForPageToLoad("30000");
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>