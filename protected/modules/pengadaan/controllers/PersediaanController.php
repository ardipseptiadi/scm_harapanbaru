<?php
Yii::import('application.modules.pemasaran.models.*');
Yii::import('application.modules.admin.models.*');
Yii::import('application.modules.gudang.models.*');

class PersediaanController extends Controller
{
	public function actionIndex()
	{
		$model = new PartStock('search');
		$model->date_safety = date('m-Y');
		if(isset($_GET['PartStock']))
		{
			$model->date_safety = $_GET['PartStock']['date_safety'];
			$dates = $model->date_safety;
			$dates = explode('-',$dates);
			$model->bulan_safety = $dates[0];
			$model->tahun_safety = $dates[1];
		}
		$dataProvider = new CActiveDataProvider($model,array(
			'pagination' => array(
				'pageSize' =>20,
			),
		));
		$this->render('index',get_defined_vars());
	}

	public function actionUpdateAll()
	{
		$res = PartSafety::model()->hardUpdateSafety();
		return 'oke';
	}

	public function changeBulan($month)
	{
		$changedMonth = '';
		$bln = date('m',strtotime($month));
		switch ($bln) {
			case '01':
				$changedMonth = 'Januari';
				break;
			case '02':
				$changedMonth = 'Februari';
				break;
			case '03':
				$changedMonth = 'Maret';
				break;
			case '04':
				$changedMonth = 'April';
				break;
			case '05':
				$changedMonth = 'Mei';
				break;
			case '06':
				$changedMonth = 'Juni';
				break;
			case '07':
				$changedMonth = 'Juli';
				break;
			case '08':
				$changedMonth = 'Agustus';
				break;
			case '09':
				$changedMonth = 'September';
				break;
			case '10':
				$changedMonth = 'Oktober';
				break;
			case '11':
				$changedMonth = 'Nopember';
				break;
			case '12':
				$changedMonth = 'Desember';
				break;

			default:
				$changedMonth = 'Januari';
				break;
		}
		return $changedMonth;
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
