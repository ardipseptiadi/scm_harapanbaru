<?php

class PengirimanController extends Controller
{
	public function init()
	{
		Yii::import('application.modules.admin.models.*');
		Yii::import('application.modules.pemasaran.models.*');
	}

	public function actionIndex()
	{
		$providerPesanan = new CActiveDataProvider('Pesanan',array(
			'pagination' => array(
				'pageSize' =>20,
			),
		));
		$providerKiriman = new CActiveDataProvider('Pengiriman',array(
			'pagination' => array(
				'pageSize' =>20,
			),
		));
		$this->render('index',get_defined_vars());
	}

	public function actionMonitoring()
	{
		$this->render('index');
	}

	public function actionGetDataPesanan($id)
	{
		$pesanan = Pesanan::model()->findByPk($id);
		// echo "helo";
		// $this->renderPartial('_form_kirim',get_defined_vars());
		echo CJSON::encode([
									'responseText'=>'berhasil',
									'status'=>true,
									'pesanan'=>[
													'no_order'=> $pesanan->no_order,
													'tgl_pesan' => $pesanan->tgl_pesan,
													'tgl_kirim' => $pesanan->tgl_kirim
												],
									'pengiriman'=>[
													'no_pengiriman' => $this->generateNoPengiriman()
												],
									]);
	}

	public function generateNoPengiriman()
	{
		$lastKiriman = Pengiriman::model()->generateNoPengiriman();
		if($lastKiriman){
			$arrTemp = explode('/',$lastKiriman->no_pengiriman);
			$arrTemp[2] = $arrTemp[2]+1;
			$no_urut = str_pad($arrTemp[2],5,"0",STR_PAD_LEFT);
		}else{
			$no_urut = "00001";
		}
		return "KRM/".date("dmy")."/".$no_urut;
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
