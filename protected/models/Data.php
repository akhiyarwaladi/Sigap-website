<?php

/**
 * This is the model class for table "data".
 *
 * The followings are the available columns in table 'data':
 * @property integer $id_data
 * @property integer $id_alat
 * @property string $ph
 * @property string $do
 * @property string $suhu
 * @property string $status
 * @property string $waktu
 *
 * The followings are the available model relations:
 * @property Alat $idAlat
 */
class Data extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ph, do, suhu, status', 'required'),
			array('id_data, id_alat', 'numerical', 'integerOnly'=>true),
			array('ph, do, suhu, status', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_data, id_alat, ph, do, suhu, status, waktu', 'safe', 'on'=>'search'),
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
			'idAlat' => array(self::BELONGS_TO, 'Alat', 'id_alat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_data' => 'Id Data',
			'id_alat' => 'Id Alat',
			'ph' => 'Ph',
			'do' => 'Do',
			'suhu' => 'Suhu',
			'status' => 'Status',
			'waktu' => 'Waktu',
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

		$criteria->compare('id_data',$this->id_data);
		$criteria->compare('id_alat',$this->id_alat);
		$criteria->compare('ph',$this->ph,true);
		$criteria->compare('do',$this->do,true);
		$criteria->compare('suhu',$this->suhu,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('waktu',$this->waktu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Data the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
