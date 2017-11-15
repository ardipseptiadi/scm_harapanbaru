<?php

/**
 * This is the model class for table "hb_pengiriman".
 *
 * The followings are the available columns in table 'hb_pengiriman':
 * @property integer $id_kirim
 * @property string $no_pengiriman
 * @property string $tgl_kirim
 * @property integer $id_karyawan
 * @property string $no_polisi
 * @property integer $status_kirim
 * @property integer $id_pesanan
 * @property integer $id_kendaraan
 */
class Pengiriman extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hb_pengiriman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pesanan', 'required'),
			array('id_karyawan, status_kirim, id_pesanan, id_kendaraan', 'numerical', 'integerOnly'=>true),
			array('no_pengiriman', 'length', 'max'=>30),
			array('no_polisi', 'length', 'max'=>20),
			array('tgl_kirim', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kirim, no_pengiriman, tgl_kirim, id_karyawan, no_polisi, status_kirim, id_pesanan, id_kendaraan', 'safe', 'on'=>'search'),
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
			'id_kirim' => 'Id Kirim',
			'no_pengiriman' => 'No Pengiriman',
			'tgl_kirim' => 'Tgl Kirim',
			'id_karyawan' => 'Id Karyawan',
			'no_polisi' => 'No Polisi',
			'status_kirim' => 'Status Kirim',
			'id_pesanan' => 'Id Pesanan',
			'id_kendaraan' => 'Id Kendaraan',
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

		$criteria->compare('id_kirim',$this->id_kirim);
		$criteria->compare('no_pengiriman',$this->no_pengiriman,true);
		$criteria->compare('tgl_kirim',$this->tgl_kirim,true);
		$criteria->compare('id_karyawan',$this->id_karyawan);
		$criteria->compare('no_polisi',$this->no_polisi,true);
		$criteria->compare('status_kirim',$this->status_kirim);
		$criteria->compare('id_pesanan',$this->id_pesanan);
		$criteria->compare('id_kendaraan',$this->id_kendaraan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pengiriman the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateNoPengiriman()
	{
		$criteria = new CDbCriteria();
		$criteria->select= "t.no_pengiriman";
		$criteria->condition= "t.no_pengiriman IS NOT NULL AND t.no_pengiriman != ''";
		$criteria->order = "t.created_at DESC";
		$criteria->limit="1";

		return $this->find($criteria);
	}
}
