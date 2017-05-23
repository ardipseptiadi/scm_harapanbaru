<?php
/* @var $this PartLevelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Part Levels',
);

$this->menu=array(
	array('label'=>'Create PartLevel', 'url'=>array('create')),
	array('label'=>'Manage PartLevel', 'url'=>array('admin')),
);
?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Part Level</h3>
		
		<p>
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('admin/jabatan/create'); ?>">Tambah</a>
		</p>
		
		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Data Part Level
		</div>
		<div>
			<?php $this->widget('HarapanBaruGrid', array(
				'id'=>'dynamic-table',
				'dataProvider'=>$dataProvider,
				'columns'=>array(
					'id_part_level',
					'part_level_desc',
				),
			)); ?>
		</div>
	</div>
</div>
