<?php

class PengadaanController extends Controller
{
	public function init()
	{
		Yii::import('application.modules.admin.models.*');
	}

	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Pengadaan',array(
			'criteria' => array(
				'condition'=>'is_deleted = 0',
				'order'=>'created_at DESC',
			),
			'pagination' => array(
				'pageSize' =>20,
			),
		));
		$this->render('index',get_defined_vars());
	}

	public function actionTambah()
	{
		$model = new Pengadaan;
		$model->no_pengadaan = $this->generateNoPengadaan();
		$part = Part::model()->findAll(array('order' => 'nama_part'));
    $list_part = CHtml::listData($part,'id_part', 'nama_part');

		if(isset($_POST['Pengadaan']))
		{
			$model->attributes = $_POST['Pengadaan'];
			$model->no_pengadaan = $this->generateNoPengadaan();
			$model->created_at = date('Y-m-d h:i:s');
			if($model->save())
			{
				$data_detail = Yii::app()->session['cart'];
				foreach($data_detail as $detail){
					$p_detail = new PengadaanDetail();
					$p_detail->id_pengadaan = $model->getPrimaryKey();
					$p_detail->id_part = $detail["id_part"];
					$p_detail->qty_pengadaan = $detail["qty"];
					$p_detail->created_at = date('Y-m-d h:i:s');
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
		foreach ($data as $item) {
			if($item["id_part"] == $id_part){
				echo CJSON::encode(['responseText'=>'part telah dipilih','status'=>false]);
				return false;exit;
			}
		}
		if(count($data)<1){
			$id = 1;
		}else{
			$id = count($data) +1;
		}
		$prd = Part::model()->findByPk($id_part);
		array_push($data,['id'=>$id,'id_part'=>$id_part,'nama'=>$prd->nama_part,'qty'=>$qty]);
		Yii::app()->session['cart'] = $data;
		echo CJSON::encode(['responseText'=>'berhasil','status'=>true]);
	}

	public function actionRemoveCart()
	{
		$id = Yii::app()->request->getPost('id');
		$id_part = Yii::app()->request->getPost('id');
		$data = Yii::app()->session['cart'];
		unset($data[($id-1)]);
		Yii::app()->session['cart'] = $data;
	}

	public function actionGetPeramalan()
	{
		$id_part = $_POST['id_part'];
		$peramalan = Peramalan::model()->findByAttributes(['id_part'=>$id_part]);
		if($peramalan){
			echo CJSON::encode(['responseText'=>'berhasil','status'=>true,'hasil'=>$peramalan->hasil]);
		}else{
			echo CJSON::encode(['responseText'=>'gagal','status'=>false,'hasil'=>'-']);
		}
	}

	public function actionDetail($id)
	{
		$dataProvider = new CActiveDataProvider('PengadaanDetail',array(
			'criteria' => array(
				'condition'=>"id_pengadaan = {$id} AND is_deleted = 0",
				'order'=>'created_at DESC',
			),
			'pagination' => array(
				'pageSize' =>20,
			),
		));
		$this->render('detail',get_defined_vars());
	}

	public function actionHapus($id)
	{
		if($id){
			$model = Pengadaan::model()->findByPk($id);
			$model->is_deleted = 1;
			$model->update();
			$this->redirect(['index']);
		}else{
			throw new Exception("ID Tidak Ditemukan", 1);
		}
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
