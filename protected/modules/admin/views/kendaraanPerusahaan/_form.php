<?php
/* @var $this KendaraanPerusahaanController */
/* @var $model KendaraanPerusahaan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kendaraan-perusahaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<fieldset>
		<?php echo $form->labelEx($model,'id_jenis_kendaraan'); ?>
		<?php echo $form->textField($model,'id_jenis_kendaraan'); ?>
		<?php echo $form->error($model,'id_jenis_kendaraan'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'id_petugas'); ?>
		<?php echo $form->textField($model,'id_petugas'); ?>
		<?php echo $form->error($model,'id_petugas'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'no_polisi'); ?>
		<?php echo $form->textField($model,'no_polisi',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'no_polisi'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</fieldset>

	<div class="form-actions center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-sm btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>