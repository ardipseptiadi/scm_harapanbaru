<?php
/* @var $this PartLevelController */
/* @var $model PartLevel */

$this->breadcrumbs=array(
	'Part Levels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PartLevel', 'url'=>array('index')),
	array('label'=>'Manage PartLevel', 'url'=>array('admin')),
);
?>

<h1>Create PartLevel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>