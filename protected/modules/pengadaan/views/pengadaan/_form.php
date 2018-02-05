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
		<?php echo $form->labelEx($model,'no_pengadaan',['class'=>'col-sm-2 control-label']); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'no_pengadaan',array('size'=>50,'maxlength'=>50,'disabled'=>true)); ?>
		</div>
		<?php echo $form->error($model,'no_pengadaan'); ?>
	</div>

  <div class="form-group">
		<?php echo $form->labelEx($model,'tgl_pengadaan',['class'=>'col-sm-2 control-label']); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'tgl_pengadaan',array('size'=>50,'maxlength'=>50,'class'=>'tgl_form')); ?>
		</div>
		<?php echo $form->error($model,'tgl_pengadaan'); ?>
	</div>

    <div class="form-group">
				<label class="control-label col-sm-2">Pilih Part</label>
        <div class="col-sm-8">
            <?php  echo CHtml::dropDownList('part', 'data_p',
                $list_part,
                array('empty' => '(Pilih Part)',
                                'class' => 'form-control'
                    )); ?>


        </div>
    </div>

		<div class="form-group">
			<label class="control-label col-sm-2">Peramalan</label>
			<div class="col-sm-3">
				<?php echo CHtml::textField('ramal','',['id'=>'ramal','class'=>'form-control','readonly'=>true]) ?>
			</div>
			<div class="col-sm-3">
				<?php echo CHtml::textField('ramal_bulat','',['id'=>'ramal_bulat','class'=>'form-control','readonly'=>true]) ?>
			</div>
			<div class="col-sm-3">
				<?php echo CHtml::numberField('qty', '',
	                array('id'=>'qty',
	                        'class'=>'form-control',
	                'width'=>11,
	                'maxlength'=>11,
	                        'placeholder'=>'Quantity',
	                    )); ?>
			</div>
			<div class="col-sm-2">
<?php echo CHtml::button('Tambah', array('class' => 'addCart')); ?>
			</div>
		</div>

		<p id="add_cart_info"></p>

    <div>
		<?php
			$total = 0;
			foreach ($cart->rawData as $data_cart) {
				$total += ($data_cart['qty']*$data_cart['harga']);
			}
			$asd_123 = array(1=>"Supplier 1",
								 2=>"Supplier 2",
								 3=>"Supplierasd 3");
			$this->widget('zii.widgets.grid.CGridView',array(
					'id' => 'cart-grid',
					'dataProvider' => $cart,
					'summaryText' => false,
					'columns' => array(
						array(
							'name' => 'Produk',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["nama"])'
						),
						array(
							'name' => 'Qty',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["qty"])'
						),
						array(
							'name' => 'Harga',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["harga"])'
						),
						array(
							'name' => 'Supplier',
							'type' => 'raw',
							'value'=> function($data){
								$lst_sp = [];
								if(isset($data['list_supp'])){
									$lst_sp = json_decode($data['list_supp']);
									}
								return CHtml::dropDownList("supplier_part","",$lst_sp,['empty'=>'--Pilih--']);
							},
						),
						array(
							'name' => 'Subtotal',
							'type' => 'raw',
							'value' => function($data){
								return $data['qty']*$data['harga'];
								},
							'footer'=> $total
						),
						array(
							'header' => 'Aksi',
              'value' => '
                          CHtml::button("Hapus",
                              array(
                                  "id" => $data["id"],
                                  "onclick"=>"js:removecartitem(".
                                                                  $data["id"].",".
                                                                  $data["id_part"].");",
                                  "class" => "btn btn-danger btn-xs",
                              )
                          );',
              'type' => 'raw',
						),
					),
			));
		?>
	</div>

	<div class="form-actions center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-sm btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>
