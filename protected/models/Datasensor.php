<?php

/**
 * This is the model class for table "datasensor".
 *
 * The followings are the available columns in table 'datasensor':
 * @property integer $id
 * @property string $id_alat
 * @property double $suhu
 * @property double $ph
 * @property double $do
 * @property double $hasil
 * @property integer $status
 * @property string $create_at
 */
class Datasensor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datasensor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_alat, suhu, ph, do, hasil, status, create_at', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('suhu, ph, do, hasil', 'numerical'),
			array('id_alat', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_alat, suhu, ph, do, hasil, status, create_at', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'id_alat' => 'Id Alat',
			'suhu' => 'HPsp (Set point)',
			'ph' => 'HPc',
			'do' => 'Uk',
			'hasil' => 'Operation time',
			'status' => 'Status',
			'create_at' => 'Waktu',
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
		$criteria->compare('id_alat',$this->id_alat,true);
		$criteria->compare('suhu',$this->suhu);
		$criteria->compare('ph',$this->ph);
		$criteria->compare('do',$this->do);
		$criteria->compare('hasil',$this->hasil);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_at',$this->create_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Datasensor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
