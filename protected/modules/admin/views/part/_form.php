<?php
/* @var $this PartController */
/* @var $model Part */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'part-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_parent'); ?>
		<?php echo $form->textField($model,'id_parent'); ?>
		<?php echo $form->error($model,'id_parent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_brand'); ?>
		<?php echo $form->textField($model,'id_brand'); ?>
		<?php echo $form->error($model,'id_brand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_part_level'); ?>
		<?php echo $form->textField($model,'id_part_level'); ?>
		<?php echo $form->error($model,'id_part_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_part_type'); ?>
		<?php echo $form->textField($model,'id_part_type'); ?>
		<?php echo $form->error($model,'id_part_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'part_code'); ?>
		<?php echo $form->textField($model,'part_code',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'part_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_part'); ?>
		<?php echo $form->textField($model,'nama_part',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_part'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berat'); ?>
		<?php echo $form->textField($model,'berat'); ?>
		<?php echo $form->error($model,'berat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'satuan'); ?>
		<?php echo $form->textField($model,'satuan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'satuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hpp'); ?>
		<?php echo $form->textField($model,'hpp'); ?>
		<?php echo $form->error($model,'hpp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->