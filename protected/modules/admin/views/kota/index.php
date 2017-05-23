<?php
/* @var $this KotaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kotas',
);

$this->menu=array(
	array('label'=>'Create Kota', 'url'=>array('create')),
	array('label'=>'Manage Kota', 'url'=>array('admin')),
);
?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Kota</h3>
		
		<p>
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('admin/jabatan/create'); ?>">Tambah</a>
		</p>
		
		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Data Kota
		</div>
		<div>
			<?php $this->widget('HarapanBaruGrid', array(
				'id'=>'dynamic-table',
				'dataProvider'=>$dataProvider,
				'columns'=>array(
					'id_kota',
					'id_provinsi',
					'nama'
				),
			)); ?>
		</div>
	</div>
</div>
