<?php
/* @var $this PartBrandController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Part Brands',
);

$this->menu=array(
	array('label'=>'Create PartBrand', 'url'=>array('create')),
	array('label'=>'Manage PartBrand', 'url'=>array('admin')),
);
?>

<h1>Part Brands</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
