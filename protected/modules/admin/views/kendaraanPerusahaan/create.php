<?php
/* @var $this KendaraanPerusahaanController */
/* @var $model KendaraanPerusahaan */

$this->breadcrumbs=array(
	'Kendaraan Perusahaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KendaraanPerusahaan', 'url'=>array('index')),
	array('label'=>'Manage KendaraanPerusahaan', 'url'=>array('admin')),
);
?>

<h1>Create KendaraanPerusahaan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>