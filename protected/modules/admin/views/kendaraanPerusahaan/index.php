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

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Kendaraan Perusahaan</h3>
		
		<p>
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('admin/kendaraanPerusahaan/create'); ?>">Tambah</a>
		</p>
		
		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Data Kendaraan Perusahaan
		</div>
		<div>
			<?php $this->widget('HarapanBaruGrid', array(
				'id'=>'dynamic-table',
				'dataProvider'=>$dataProvider,
				'columns'=>array(
					'id_kendaraan',
					'id_jenis_kendaraan',
					'id_petugas',
					'no_polisi',
					'status'
				),
			)); ?>
		</div>
	</div>
</div>
