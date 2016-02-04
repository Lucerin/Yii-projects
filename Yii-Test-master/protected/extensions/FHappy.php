<?php
class FHappy extends CApplicationComponent
{
	public $trato;

	public function init(){
		echo "Inicializado<br>";
	}

	public function Hi(){
		if($this->trato===null)
			return "Hola, cómo estás?";
		if($this->trato===1)
			return "Hola a Todos!";
	}
}
?>