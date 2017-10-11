<?php

class PeramalanController extends Controller
{
	public function actionIndex()
	{
		$model = new Peramalan;
		if(isset($_POST[get_class($model)]))
			$model->attributes = $_POST[get_class($model)];
		// var_dump($_POST);
		$this->render('index',get_defined_vars());
	}

	public function actionCreate()
	{
		$model = new Peramalan;

		$part = Part::model()->findAll(array('order' => 'nama_part'));
    $list_part = CHtml::listData($part,'id_part', 'nama_part');
		
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
