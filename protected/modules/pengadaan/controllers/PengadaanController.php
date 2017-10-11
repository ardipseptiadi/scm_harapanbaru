<?php

class PengadaanController extends Controller
{
	public function init()
	{
		Yii::import('application.modules.admin.models.*');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionTambah()
	{
		$model = new Pengadaan;
		$model->no_pengadaan = $this->generateNoPengadaan();
		$part = Part::model()->findAll(array('order' => 'nama_part'));
    $list_part = CHtml::listData($part,'id_part', 'nama_part');

		if(!Yii::app()->session['cart']){
			Yii::app()->session['cart'] = [];
		}
		$dt =Yii::app()->session['cart'];
		$cart = new CArrayDataProvider($dt,array(
							'keyField'=>'id'
						));
		$this->render('tambah',get_defined_vars());
	}

	public function generateNoPengadaan()
	{
		$lastOrder = Pengadaan::model()->generateNoPengadaan();
		if($lastOrder){
			$arrTemp = explode('/',$lastOrder->no_pengadaan);
			$arrTemp[2] = $arrTemp[2]+1;
			$no_urut = str_pad($arrTemp[2],5,"0",STR_PAD_LEFT);
		}else{
			$no_urut = "00001";
		}
		return "PGD/".date("dmy")."/".$no_urut;
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
