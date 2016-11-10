<?php

/**
 * This is the model class for table "alat".
 *
 * The followings are the available columns in table 'alat':
 * @property integer $id_alat
 * @property integer $id_user
 * @property string $kode
 * @property string $keterangan
 * @property string $tgl_produksi
 *
 * The followings are the available model relations:
 * @property User $idUser
 * @property Data[] $datas
 */
class Alat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */


	protected function afterFind() {
        parent::afterFind();
         
   		$this->tgl_produksi=date('d F Y',  strtotime(str_replace("-", "", $this->tgl_produksi)));
	}
     
	protected function beforeSave() {
  		if(parent::beforeSave()){
   			$this->tgl_produksi=date('Y-m-d',  strtotime(str_replace(",", "", $this->tgl_produksi)));
            	return true;
        }else{
            return false;
        }
	}

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, kode, keterangan, tgl_produksi', 'required'),
			array('id_alat, id_user', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_alat, id_user, kode, keterangan, tgl_produksi', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'datas' => array(self::HAS_MANY, 'Data', 'id_alat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_alat' => 'Id Alat',
			'id_user' => 'Id User',
			'kode' => 'Kode',
			'keterangan' => 'Keterangan',
			'tgl_produksi' => 'Tgl Produksi',
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

		$criteria->compare('id_alat',$this->id_alat);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('tgl_produksi',$this->tgl_produksi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
