<?php
/* @var $this KendaraanPerusahaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kendaraan Perusahaans',
);

$this->menu=array(
	array('label'=>'Create KendaraanPerusahaan', 'url'=>array('create')),
	array('label'=>'Manage KendaraanPerusahaan', 'url'=>array('admin')),
);
?>

<h1>Kendaraan Perusahaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
