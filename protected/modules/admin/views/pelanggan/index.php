<?php
/* @var $this PelangganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelanggans',
);

$this->menu=array(
	array('label'=>'Create Pelanggan', 'url'=>array('create')),
	array('label'=>'Manage Pelanggan', 'url'=>array('admin')),
);
?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Pelanggan</h3>
		
		<p>
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('admin/jabatan/create'); ?>">Tambah</a>
		</p>
		
		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Data Pelanggan
		</div>
		<div>
			<?php $this->widget('HarapanBaruGrid', array(
				'id'=>'dynamic-table',
				'dataProvider'=>$dataProvider,
				'columns'=>array(
					'id_pelanggan',
					'id_kota',
					'nama',
					'alamat'
				),
			)); ?>
		</div>
	</div>
</div>
