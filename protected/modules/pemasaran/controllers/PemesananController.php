<?php

class PemesananController extends Controller
{
	public function init()
	{
		Yii::import('application.modules.admin.models.*');
	}

	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Pesanan',array(
			'criteria' => array(
				'order'=>'created_date DESC',
			),
			'pagination' => array(
				'pageSize' =>20,
			),
		));
		$this->render('index',get_defined_vars());
	}

	public function actionCreate()
	{
		$model = new Pesanan();

		$pelanggan = Pelanggan::model()->findAll(array('order' => 'nama'));
    	$list_pelanggan = CHtml::listData($pelanggan,'id_pelanggan', 'nama');

		$part = Part::model()->findAll(array('order' => 'nama_part'));
    	$list_part = CHtml::listData($part,'id_part', 'nama_part');

		if(isset($_POST['Pesanan']))
		{
			$model->attributes = $_POST['Pesanan'];
			$model->id_pembayaran = $model->generatePembayaran();
			$model->created_date = date('Y-m-d h:i:s');
			if($model->save())
			{
				$data_detail = Yii::app()->session['cart'];
				foreach($data_detail as $detail){
					$p_detail = new PesananDetail();
					$p_detail->id_pesanan = $model->getPrimaryKey();
					$p_detail->id_part = $detail["id_part"];
					// $p_detail->no_order = $p_order;
					$p_detail->qty = $detail["qty"];
					$p_detail->save();
				}
				unset(Yii::app()->session['cart']);
				$this->redirect(array('index'));
			}
		}

		if(!Yii::app()->session['cart']){
			Yii::app()->session['cart'] = [];
		}
		$dt =Yii::app()->session['cart'];
		$cart = new CArrayDataProvider($dt,array(
							'keyField'=>'id'
						));
		$this->render('create',get_defined_vars());
	}

	public function actionAddCart()
	{
		$id_part = Yii::app()->request->getPost('id_part');
		$qty = Yii::app()->request->getPost('qty');
		$data = Yii::app()->session['cart'];
		if(count($data)<1){
			$id = 1;
		}else{
			$id = count($data) +1;
		}
		$prd = Part::model()->findByPk($id_part);
		array_push($data,['id'=>$id,'id_part'=>$id_part,'nama'=>$prd->nama_part,'qty'=>$qty]);
		Yii::app()->session['cart'] = $data;

	}

	public function actionRemoveCart()
	{
		$id = Yii::app()->request->getPost('id');
		$id_part = Yii::app()->request->getPost('id');
		$data = Yii::app()->session['cart'];
		unset($data[($id-1)]);
		Yii::app()->session['cart'] = $data;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pemesanan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionDetail($id)
	{
		$dataProvider = new CActiveDataProvider('PesananDetail',array(
			'criteria' => array(
				'condition'=>'id_pesanan = '.$id,
				'order'=>'created_date DESC',
			),
			'pagination' => array(
				'pageSize' =>20,
			),
		));
		$this->render('detail',get_defined_vars());
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}