<?php
class Countries extends CActiveRecord
{
	//Método estático que me ayuda a realizar las consultas en el modelo.
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}

	//Nombre de la Tabla, para que Yii sepa donde apunta el modelo.
	public function tableNAme()
	{
		return "countries";
	}

	public function rules()
	{
		return array(
			array("name, status", "required"),
		);
	}

	public function getSelectName($id)
	{
		return $this->name." ".$this->id." =";
	}
}