<?php

/**
 * This is the model class for table "hb_part_safety".
 *
 * The followings are the available columns in table 'hb_part_safety':
 * @property integer $id_safety
 * @property integer $id_part
 * @property integer $jumlah
 * @property integer $bulan
 * @property integer $tahun
 */
class PartSafety extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hb_part_safety';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_part, jumlah, bulan, tahun', 'required'),
			array('id_part, jumlah, bulan, tahun', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_safety, id_part, jumlah, bulan, tahun', 'safe', 'on'=>'search'),
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
			'id_safety' => 'Id Safety',
			'id_part' => 'Id Part',
			'jumlah' => 'Jumlah',
			'bulan' => 'Bulan',
			'tahun' => 'Tahun',
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

		$criteria->compare('id_safety',$this->id_safety);
		$criteria->compare('id_part',$this->id_part);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('bulan',$this->bulan);
		$criteria->compare('tahun',$this->tahun);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PartSafety the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function updateSafety($bln,$thn,$id)
	{
		$data = $this->findByAttributes(['bulan'=>ltrim($bln,'0'),'tahun'=>$thn,'id_part'=>$id]);
		if(!$data)
			$data = $this;
		$data->id_part = $id;
		$data->bulan = $bln;
		$data->tahun = $thn;
		$data->jumlah = RiwayatPersediaan::model()->getRiwayat($bln,$thn);
		if($data->save()){
			return true;
		}
		return false;
	}
}
