<?php

/**
 * This is the model class for table "entrada".
 *
 * The followings are the available columns in table 'entrada':
 * @property integer $id
 * @property integer $user_id
 * @property integer $num_asiento
 * @property string $fecha
 * @property string $hora
 * @property integer $sala_funcion_id
 *
 * The followings are the available model relations:
 * @property User $user
 * @property SalaFuncion $salaFuncion
 */
class Entrada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'entrada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, num_asiento, fecha, hora, sala_funcion_id', 'required'),
			array('user_id, num_asiento, sala_funcion_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, num_asiento, fecha, hora, sala_funcion_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'salaFuncion' => array(self::BELONGS_TO, 'SalaFuncion', 'sala_funcion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'num_asiento' => 'Num Asiento',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'sala_funcion_id' => 'Sala Funcion',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('num_asiento',$this->num_asiento);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('sala_funcion_id',$this->sala_funcion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Entrada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * retorna la capacidad de asientis que tiene una sa  de una determina sala funcon.
	 * @param int $idSalaFuncion la clave primaria de sala funcion.
	 * @return int $data capacidad de una sala. 
	 */

	public function numAsientoSala($idSalaFuncion){
		$data = Yii::app()->db->createCommand()
				->select('capacidad')
				->from('sala')
				->where('id=(select sala_id from sala_funcion where id='.$idSalaFuncion.')')
				->queryScalar();

		return $data;
	}

	/**
	 * obtiene la lista de asientos ocupados para una determinada sala funcion
	 * @param int $idSalaFuncion la clave primaria de sala funcion.
	 * @return array[] $data lista de asientos ocupados
	 */

	public function listAsientoOcupado($idSalaFuncion){
		$data = Yii::app()->db->createCommand()
				->select('num_asiento')
				->from('entrada')
				->where('sala_funcion_id='.$idSalaFuncion.'')
				->queryColumn();

		return $data;
	}



}
