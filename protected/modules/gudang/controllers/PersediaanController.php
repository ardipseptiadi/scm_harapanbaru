<?php

class PersediaanController extends Controller
{
	public function actionIndex()
	{
		$model = new PartStock('search');
		$dataProvider = new CActiveDataProvider($model,array(
			'pagination' => array(
				'pageSize' =>20,
			),
		));

		$this->render('index',get_defined_vars());
	}

	public function actionCreate()
	{
		$model = new PartStock;
		$this->render('create',get_defined_vars());
	}

	public function actionTambah($id)
	{
		$model = PartStock::model()->findByPk($id);

		if(isset($_POST[get_class($model)])){
			$model->qty_in_hand = $model->qty_in_hand + $_POST[get_class($model)]['added_qty'];
			$model->last_update = date('Y-m-d h:i:s');
			if($model->update()){
				$this->redirect(['index']);
			}
		}

		$this->render('tambah',get_defined_vars());
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
