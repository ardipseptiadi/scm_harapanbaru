<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pemesanan-form',
	'htmlOptions'=>array('class'=>'form-horizontal'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are requireds.</p>-->

	<?php echo $form->errorSummary($model); ?>

  <div class="form-group">
		<?php echo $form->labelEx($model,'bln_ramal',['class'=>'col-sm-2 control-label']); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'bln_ramal',array('size'=>50,'maxlength'=>50,'class'=>'bln_form')); ?>
		</div>
		<?php echo $form->error($model,'bln_ramal'); ?>
	</div>

  <div class="form-group">
		<?php echo $form->labelEx($model,'bln_data',['class'=>'col-sm-2 control-label']); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'bln_data',array('size'=>50,'maxlength'=>50,'class'=>'bln_form')); ?>
		</div>
		<?php echo $form->error($model,'bln_data'); ?>
	</div>

  <div class="form-group">
    <?php echo $form->labelEx($model,'id_part',['class'=>'col-sm-2 control-label']); ?>
    <div class="col-sm-10">
      <?php echo $form->dropDownList($model,'id_part',$list_part,['empty'=>'Pilih']); ?>
    </div>
    <?php echo $form->error($model,'id_part'); ?>
  </div>

	<div class="form-actions center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-sm btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>
