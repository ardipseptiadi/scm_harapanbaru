<?php
/* @var $this JenisKendaraanPerusahaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Kendaraan Perusahaans',
);

$this->menu=array(
	array('label'=>'Create JenisKendaraanPerusahaan', 'url'=>array('create')),
	array('label'=>'Manage JenisKendaraanPerusahaan', 'url'=>array('admin')),
);
?>

<h1>Jenis Kendaraan Perusahaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
