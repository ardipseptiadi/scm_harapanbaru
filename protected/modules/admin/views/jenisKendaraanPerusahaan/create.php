<?php
/* @var $this JenisKendaraanPerusahaanController */
/* @var $model JenisKendaraanPerusahaan */

$this->breadcrumbs=array(
	'Jenis Kendaraan Perusahaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisKendaraanPerusahaan', 'url'=>array('index')),
	array('label'=>'Manage JenisKendaraanPerusahaan', 'url'=>array('admin')),
);
?>

<h1>Create JenisKendaraanPerusahaan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>