<?php

/**
 * This is the model class for table "sala_funcion".
 *
 * The followings are the available columns in table 'sala_funcion':
 * @property integer $id
 * @property integer $funcion_id
 * @property integer $sala_id
 * @property string $fecha
 * @property string $hora
 * @property double $precio
 * @property integer $idioma_id
 *
 * The followings are the available model relations:
 * @property Entrada[] $entradas
 * @property Funcion $funcion
 * @property Sala $sala
 * @property Idioma $idioma
 */
class SalaFuncion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sala_funcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('funcion_id, sala_id, fecha, hora, precio, idioma_id', 'required'),
			array('funcion_id, sala_id, idioma_id', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, funcion_id, sala_id, fecha, hora, precio, idioma_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'entradas' => array(self::HAS_MANY, 'Entrada', 'sala_funcion_id'),
			'funcion' => array(self::BELONGS_TO, 'Funcion', 'funcion_id'),
			'sala' => array(self::BELONGS_TO, 'Sala', 'sala_id'),
			'idioma' => array(self::BELONGS_TO, 'Idioma', 'idioma_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'funcion_id' => 'Funcion',
			'sala_id' => 'Sala',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'precio' => 'Precio',
			'idioma_id' => 'Idioma',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('funcion_id',$this->funcion_id);
		$criteria->compare('sala_id',$this->sala_id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('idioma_id',$this->idioma_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SalaFuncion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
