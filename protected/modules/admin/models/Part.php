<?php

/**
 * This is the model class for table "hb_part".
 *
 * The followings are the available columns in table 'hb_part':
 * @property integer $id_part
 * @property integer $id_parent
 * @property integer $id_brand
 * @property integer $id_part_level
 * @property integer $id_part_type
 * @property string $part_code
 * @property string $nama_part
 * @property integer $berat
 * @property string $keterangan
 * @property string $satuan
 * @property integer $hpp
 * @property integer $harga
 *
 * The followings are the available model relations:
 * @property PartBrand $idBrand
 * @property PartLevel $idPartLevel
 * @property PartType $idPartType
 */
class Part extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hb_part';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_parent, id_brand, id_part_level, id_part_type, nama_part', 'required'),
			array('id_parent, id_brand, id_part_level, id_part_type, berat, hpp, harga', 'numerical', 'integerOnly'=>true),
			array('part_code', 'length', 'max'=>15),
			array('nama_part', 'length', 'max'=>50),
			array('satuan', 'length', 'max'=>10),
			array('keterangan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_part, id_parent, id_brand, id_part_level, id_part_type, part_code, nama_part, berat, keterangan, satuan, hpp, harga', 'safe', 'on'=>'search'),
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
			'idBrand' => array(self::BELONGS_TO, 'PartBrand', 'id_brand'),
			'idPartLevel' => array(self::BELONGS_TO, 'PartLevel', 'id_part_level'),
			'idPartType' => array(self::BELONGS_TO, 'PartType', 'id_part_type'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_part' => 'Id Part',
			'id_parent' => 'Id Parent',
			'id_brand' => 'Id Brand',
			'id_part_level' => 'Id Part Level',
			'id_part_type' => 'Id Part Type',
			'part_code' => 'Part Code',
			'nama_part' => 'Nama Part',
			'berat' => 'Berat',
			'keterangan' => 'Keterangan',
			'satuan' => 'Satuan',
			'hpp' => 'Hpp',
			'harga' => 'Harga',
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

		$criteria->compare('id_part',$this->id_part);
		$criteria->compare('id_parent',$this->id_parent);
		$criteria->compare('id_brand',$this->id_brand);
		$criteria->compare('id_part_level',$this->id_part_level);
		$criteria->compare('id_part_type',$this->id_part_type);
		$criteria->compare('part_code',$this->part_code,true);
		$criteria->compare('nama_part',$this->nama_part,true);
		$criteria->compare('berat',$this->berat);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('satuan',$this->satuan,true);
		$criteria->compare('hpp',$this->hpp);
		$criteria->compare('harga',$this->harga);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Part the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
