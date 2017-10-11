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
