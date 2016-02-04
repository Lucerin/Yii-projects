<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/");
  }

 public function test_1()
  {
    $this->open("/cine/index.php");
     $this->windowMaximize();
    $this->assertTextPresent('Bievenido a SiteCine');
    $this->click("link=Ver detalle");
    sleep(2);
    $this->click("link=Comprar");
    sleep(2);
    $this->assertTextPresent('Login');
    $this->assertTextPresent('Username');
  }


   public function test_2()
  {
    $this->open("/cine/index.php/site/index");
     $this->windowMaximize();
      $this->assertTextPresent('Bievenido a SiteCine');
    $this->click("link=Ver detalle");
    sleep(2);
    $this->click("link=Comprar");
     sleep(2);
     $this->assertTextPresent('Login');
    $this->type("id=LoginForm_username", "luis");
    $this->type("id=LoginForm_password", "123");
    $this->click("name=yt0");
    sleep(2);
    $this->assertTextPresent('Compra de Entradas');
    $this->click("link=Logout (luis)");
    sleep(2);
  }


  public function test_3()
  {
    $this->open("/cine/index.php/site/index");
    $this->windowMaximize();
    $this->click("link=Login");
    sleep(2);
    $this->assertTextPresent('Login');
    $this->type("id=LoginForm_username", "admin");
    $this->type("id=LoginForm_password", "admin");
    $this->click("name=yt0");
    sleep(3);
    $this->click("link=Funciones");
    $this->assertTextPresent('Funciones');
    sleep(2);
    $this->click("link=Crear Funcion");
    $this->assertTextPresent('Crear Funcion');
    sleep(2);
    $this->click("link=Categoria Funcion");
    $this->assertTextPresent('Categorias');
    sleep(2);
    $this->click("link=Create Categoria");
    $this->assertTextPresent('Create Categoria');
    sleep(2);
    $this->click("link=Clasificacion Funcion");
    $this->assertTextPresent('Clasificacions');
    sleep(2);
    $this->click("link=Create Clasificacion");
    $this->assertTextPresent('Create Clasificacion');
    sleep(2);
    $this->click("link=Sala");
    sleep(2);
    $this->click("link=Create Sala");
    $this->assertTextPresent('Salas');
    sleep(2);
    $this->click("link=Sala Funcion");
    $this->assertTextPresent('Sala Funcions');
    sleep(2);
    $this->click("link=Create SalaFuncion");
        $this->assertTextPresent('Create SalaFuncion');
    sleep(2);
    $this->click("link=Tipo Sala");
    $this->assertTextPresent('Tipos');
    sleep(2);
    $this->click("link=Create Tipo");
    $this->assertTextPresent('Create Tipo');
    sleep(2);
    $this->click("link=Usuarios");
     $this->assertTextPresent('Users');
   
    sleep(2);
    $this->click("link=Create User");
     $this->assertTextPresent('Registro');
    sleep(2);
    $this->click("link=Logout (admin)");
     $this->assertTextPresent('Bievenido a SiteCine');
    
    sleep(2);
  }
}
?>