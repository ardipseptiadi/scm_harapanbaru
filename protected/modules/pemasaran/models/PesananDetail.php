<?php

/**
 * This is the model class for table "hb_pesanan_detail".
 *
 * The followings are the available columns in table 'hb_pesanan_detail':
 * @property integer $id_pesanan_detail
 * @property integer $id_pesanan
 * @property string $no_order
 * @property integer $id_part
 * @property integer $qty
 * @property double $disc
 * @property double $total
 * @property string $part_code
 * @property integer $status
 * @property string $created_date
 * @property integer $is_deleted
 */
class PesananDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hb_pesanan_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pesanan, id_part', 'required'),
			array('id_pesanan, id_part, qty, status, is_deleted', 'numerical', 'integerOnly'=>true),
			array('disc, total', 'numerical'),
			array('no_order, part_code', 'length', 'max'=>11),
			array('created_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pesanan_detail, id_pesanan, no_order, id_part, qty, disc, total, part_code, status, created_date, is_deleted', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		Yii::import('application.modules.admin.models.*');
		return array(
			'idPart' => array(self::BELONGS_TO,'Part','id_part')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pesanan_detail' => 'Id Pesanan Detail',
			'id_pesanan' => 'Id Pesanan',
			'no_order' => 'No Order',
			'id_part' => 'Id Part',
			'qty' => 'Qty',
			'disc' => 'Disc',
			'total' => 'Total',
			'part_code' => 'Part Code',
			'status' => 'Status',
			'created_date' => 'Created Date',
			'is_deleted' => 'Is Deleted',
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

		$criteria->compare('id_pesanan_detail',$this->id_pesanan_detail);
		$criteria->compare('id_pesanan',$this->id_pesanan);
		$criteria->compare('no_order',$this->no_order,true);
		$criteria->compare('id_part',$this->id_part);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('disc',$this->disc);
		$criteria->compare('total',$this->total);
		$criteria->compare('part_code',$this->part_code,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('is_deleted',$this->is_deleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PesananDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function afterSave()
	{
		// $mRi
	}
}
