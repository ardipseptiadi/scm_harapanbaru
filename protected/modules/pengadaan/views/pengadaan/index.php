<?php
/* @var $this PeramalanController */

$this->breadcrumbs=array(
	'Pengadaan',
);
?>
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Pengadaan</h3>

		<div class="button-groups">
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('pengadaan/pengadaan/tambah'); ?>">Tambah</a>
			<a class="btn btn-primary" style="display:none" href="<?php //echo Yii::app()->createUrl('admin/jabatan/admin'); ?>">Manage</a>
		</div>

		<div class="clearfix">
			<div class="pull-right tableTools-container">
				<?php $form = $this->beginWidget('CActiveForm', array(
	                    'id'          => 'form-filter-pengadaan',
	                    'action'      => Yii::app()->createUrl($this->route),
	                    'method'      => 'post',
	                    'htmlOptions' => array('class' => 'form-inline'),
	                ));?>
					<div class="form-group">
					</div>
					<div class="form-group">
						<?php echo CHtml::htmlButton('<i class="fa fa-search"></i> Cari',
                                    array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
					</div>
					<?php $this->endWidget();?>
			</div>
		</div>
		<div class="table-header">
			Data Pengadaan
		</div>
		<div>
			<?php
			// $this->widget('HarapanBaruGrid', array(
			// 	'id'=>'dynamic-table',
			// 	'dataProvider'=>$dataProvider,
			// 	'columns'=>array(
			// 		array(
			// 			'header'=>'Nama Part',
			// 			'name' => 'idPart.nama_part',
			// 		),
			// 		// array(
			// 		// 	'header'=>'Bulan Peramalan',
			// 		// 	'name'=>'peramalan',
			// 		// ),
			// 		array(
			// 			'header' => 'Hasil',
			// 			'name' => 'hasil'
			// 		),
			// 		// array(
			// 		// 	'header' => 'Status',
			// 		// 	'value' => '$data->status()'
			// 		// ),
			// 		array(
			// 			'header'=>'Aksi',
			// 			'name'=>'aksi',
			// 			'value' => '
			// 				CHtml::link("Update",
			// 					array(
			// 						"peramalan/update",
			// 						"id"=>"$data->id_part"
			// 					)
			// 				);',
			// 			'type' => 'raw',
			// 		),
			// 	),
			// ));
			?>
		</div>
	</div>
</div>
<?php
Yii::app()->clientScript->registerScript('list-pasien', '
$(\'.tanggal\').datepicker({
		format: "mm-yyyy",
		viewMode: "months",
		minViewMode: "months"
}).on(\'changeDate\', function (ev) {
		 $(\'.datepicker\').hide();
});

', CClientScript::POS_END);
