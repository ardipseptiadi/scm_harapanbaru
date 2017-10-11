<?php
/* @var $this PartController */
/* @var $model Part */

$this->breadcrumbs=array(
	'Persediaan'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List Part', 'url'=>array('index')),
// 	array('label'=>'Manage Part', 'url'=>array('admin')),
// );
?>


<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Tambah Persediaan</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">

					<?php $this->renderPartial('_form', get_defined_vars()); ?>
				</div>
			</div>
		</div>
	</div>


</div>
