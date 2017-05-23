<?php
/* @var $this KendaraanPerusahaanController */
/* @var $model KendaraanPerusahaan */

$this->breadcrumbs=array(
	'Kendaraan Perusahaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KendaraanPerusahaan', 'url'=>array('index')),
	array('label'=>'Manage KendaraanPerusahaan', 'url'=>array('admin')),
);
?>

<h1>Tambah Kendaraan Perusahaan</h1>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Default</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main no-padding">
					
					<?php $this->renderPartial('_form', array('model'=>$model)); ?>
				</div>
			</div>
		</div>
	</div>

	
</div>