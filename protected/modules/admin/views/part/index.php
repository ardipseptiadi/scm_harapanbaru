<?php
/* @var $this PartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parts',
);

$this->menu=array(
	array('label'=>'Create Part', 'url'=>array('create')),
	array('label'=>'Manage Part', 'url'=>array('admin')),
);
?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Part</h3>
		
		<p>
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('admin/part/create'); ?>">Tambah</a>
		</p>
		
		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Data Part
		</div>
		<div>
			<?php $this->widget('HarapanBaruGrid', array(
				'id'=>'dynamic-table',
				'dataProvider'=>$dataProvider,
				'columns'=>array(
					'id_part',
					'id_parent',
					'id_brand',
					'id_part_level',
					'id_part_type',
					'part_code',
					'nama_part',
					'berat',
					'keterangan',
					'satuan',
					'hpp',
					'harga',
				),
			)); ?>
		</div>
	</div>
</div>
