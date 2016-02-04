<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $sNombre
 * @property string $sApellido
 * @property string $sEmail
 * @property string $sPassword
 * @property integer $bActivo
 * @property string $dUltimoLogin
 * @property integer $idRol
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sNombre, sApellido, sEmail, sPassword, bActivo, dUltimoLogin, idRol', 'required'),
			array('bActivo, idRol', 'numerical', 'integerOnly'=>true),
			array('sNombre, sApellido, sEmail, sPassword, dUltimoLogin', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuario, sNombre, sApellido, sEmail, sPassword, bActivo, dUltimoLogin, idRol', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'sNombre' => 'S Nombre',
			'sApellido' => 'S Apellido',
			'sEmail' => 'S Email',
			'sPassword' => 'S Password',
			'bActivo' => 'B Activo',
			'dUltimoLogin' => 'D Ultimo Login',
			'idRol' => 'Id Rol',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('sNombre',$this->sNombre,true);
		$criteria->compare('sApellido',$this->sApellido,true);
		$criteria->compare('sEmail',$this->sEmail,true);
		$criteria->compare('sPassword',$this->sPassword,true);
		$criteria->compare('bActivo',$this->bActivo);
		$criteria->compare('dUltimoLogin',$this->dUltimoLogin,true);
		$criteria->compare('idRol',$this->idRol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
