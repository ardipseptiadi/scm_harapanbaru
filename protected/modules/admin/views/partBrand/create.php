<?php
/* @var $this PartBrandController */
/* @var $model PartBrand */

$this->breadcrumbs=array(
	'Part Brands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PartBrand', 'url'=>array('index')),
	array('label'=>'Manage PartBrand', 'url'=>array('admin')),
);
?>

<h1>Create PartBrand</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>