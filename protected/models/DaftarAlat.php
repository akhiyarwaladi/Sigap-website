<?php

/**
 * This is the model class for table "dataalat".
 *
 * The followings are the available columns in table 'dataalat':
 * @property integer $id
 * @property string $kode
 * @property integer $tanggal_produksi
 * @property integer $status
 * @property string $registered_at
 */
class DaftarAlat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dataalat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode, tanggal_produksi, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode, tanggal_produksi, status, registered_at', 'safe', 'on'=>'search'),
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
			'kode' => 'Kode',
			'tanggal_produksi' => 'Tanggal Produksi',
			'status' => 'Status',
			'registered_at' => 'Registered At',
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
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('tanggal_produksi',$this->tanggal_produksi);
		$criteria->compare('status',$this->status);
		$criteria->compare('registered_at',$this->registered_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DaftarAlat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
