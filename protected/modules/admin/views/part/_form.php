<?php
/* @var $this PartController */
/* @var $model Part */
/* @var $form CActiveForm */
?>


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

	<fieldset>
		<?php echo $form->labelEx($model,'id_parent'); ?>
		<?php echo $form->textField($model,'id_parent'); ?>
		<?php echo $form->error($model,'id_parent'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'id_brand'); ?>
		<?php echo $form->textField($model,'id_brand'); ?>
		<?php echo $form->error($model,'id_brand'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'id_part_level'); ?>
		<?php echo $form->textField($model,'id_part_level'); ?>
		<?php echo $form->error($model,'id_part_level'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'id_part_type'); ?>
		<?php echo $form->textField($model,'id_part_type'); ?>
		<?php echo $form->error($model,'id_part_type'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'part_code'); ?>
		<?php echo $form->textField($model,'part_code',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'part_code'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'nama_part'); ?>
		<?php echo $form->textField($model,'nama_part',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_part'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'berat'); ?>
		<?php echo $form->textField($model,'berat'); ?>
		<?php echo $form->error($model,'berat'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'satuan'); ?>
		<?php echo $form->textField($model,'satuan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'satuan'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'hpp'); ?>
		<?php echo $form->textField($model,'hpp'); ?>
		<?php echo $form->error($model,'hpp'); ?>
	</fieldset>

	<fieldset>
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</fieldset>

	<div class="form-actions center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-sm btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>
