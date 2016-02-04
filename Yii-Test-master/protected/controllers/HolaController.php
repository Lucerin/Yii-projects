<?php
#http://localhost/yii/prueba/hola/index
class HolaController extends Controller
{
	public function actionIndex()
	{
		$model=CActiveRecord::model("Users")->findAll();
		$twitter="@NicoVergara";
		$this->render("index", array("model"=>$model, "twitter"=>$twitter));
	}
}