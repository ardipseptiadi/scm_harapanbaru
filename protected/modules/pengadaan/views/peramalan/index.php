<?php
/* @var $this PeramalanController */

$this->breadcrumbs=array(
	'Peramalan',
);
?>
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Peramalan</h3>

		<div class="button-groups">
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('pengadaan/peramalan/create'); ?>">Tambah</a>
			<a class="btn btn-primary" style="display:none" href="<?php //echo Yii::app()->createUrl('admin/jabatan/admin'); ?>">Manage</a>
		</div>

		<div class="clearfix">
			<div class="pull-right tableTools-container">
				<?php $form = $this->beginWidget('CActiveForm', array(
	                    'id'          => 'form-filter-peramalan',
	                    'action'      => Yii::app()->createUrl($this->route),
	                    'method'      => 'post',
	                    'htmlOptions' => array('class' => 'form-inline'),
	                ));?>
					<div class="form-group">
            <?php echo $form->labelEx($model, 'Bulan'); ?>
						<?php echo $form->textField($model, 'peramalan', [
                                'class'            => 'form-control filter-control tanggal',
                                'value'            => (!empty($model->peramalan) ? $model->peramalan : date('m-Y')),
                                // 'data-date-format' => 'mm-yyyy',
                                'readonly'         => 'readonly',
                            ]
                            ); ?>
					</div>
					<div class="form-group">
						<?php echo CHtml::htmlButton('<i class="fa fa-search"></i> Cari',
                                    array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
					</div>
					<?php $this->endWidget();?>
			</div>
		</div>
		<div class="table-header">
			Data Peramalan Bulan <?=isset($model->peramalan)?$model->peramalan:date('m-Y')?>
		</div>
		<div>
			<?php
			$this->widget('HarapanBaruGrid', array(
				'id'=>'dynamic-table',
				'dataProvider'=>$model->monthly(),
				'columns'=>array(
					array(
						'header'=>'Nama Part',
						'name' => 'idPart.nama_part',
					),
					// array(
					// 	'header'=>'Bulan Peramalan',
					// 	'name'=>'peramalan',
					// ),
					array(
						'header' => 'Hasil',
						'name' => 'hasil'
					),
					// array(
					// 	'header' => 'Status',
					// 	'value' => '$data->status()'
					// ),
					array(
						'header'=>'Aksi',
						'name'=>'aksi',
						'value' => '
							CHtml::link("Update",
								array(
									"peramalan/update",
									"id"=>"$data->id_part"
								)
							);',
						'type' => 'raw',
					),
				),
			));
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
