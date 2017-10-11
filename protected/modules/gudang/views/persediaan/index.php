<?php
/* @var $this PersediaanController */

$this->breadcrumbs=array(
	'Persediaan',
);
?>
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Pesanan</h3>

		<div class="button-groups" style="display:none">
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('gudang/persediaan/create'); ?>">Tambah</a>
			<a class="btn btn-primary" href="<?php //echo Yii::app()->createUrl('admin/jabatan/admin'); ?>">Manage</a>
		</div>

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Data Persediaan
		</div>
		<div>
			<h3>Data Persediaan Bulan <?=date('F');?></h3>

			<?php $form=$this->beginWidget('CActiveForm', [
			    'id'=>'my-form',
					'htmlOptions'=>['class'=>'form-inline'],
			    'enableAjaxValidation'=>true,
			    'clientOptions'=>[
			        'validateOnSubmit'=>true
			    ]
			]); ?>
			    <div class="form-group">
			        <?php echo $form->labelEx($model,'part_name'); ?>
			        <?php echo $form->textField($model,'part_name',['class'=>'tanggal']); ?>
			        <?php echo $form->error($model,'part_name'); ?>
			    </div>
			    <?php echo CHtml::submitButton('Cari'); ?>
			<?php $this->endWidget(); ?>

			<?php
			$this->widget('HarapanBaruGrid', array(
				'id'=>'dynamic-table',
				'dataProvider'=>$dataProvider,
				'columns'=>array(
					array(
						'header'=>'Nama Part',
						'value'=>'$data->idPart->nama_part'
					),
					array(
						'header'=>'Sisa Stok',
						'name'=>'qty_in_hand',
					),
					array(
						'header' => 'Safety Stock',
						'value' => '$data->safety_stock()'
					),
					array(
						'header' => 'Status',
						'value' => '$data->status()'
					),
					array(
						'header'=>'Aksi',
						'name'=>'aksi',
						'value' => '
							CHtml::link("Tambah",
								array(
									"persediaan/tambah",
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
Yii::app()->clientScript->registerScript('part_stock_jquery', '
	$(\'.tanggal\').datepicker({
		format:"mm-yyyy",
		startView:1,
		maxViewMode:1,
		minViewMode:1,
		autclose:true
	})
');
 ?>
