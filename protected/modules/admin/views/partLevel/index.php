<?php
/* @var $this PartLevelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Part Levels',
);

$this->menu=array(
	array('label'=>'Create PartLevel', 'url'=>array('create')),
	array('label'=>'Manage PartLevel', 'url'=>array('admin')),
);
?>

<h1>Part Levels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
