<?php
/* @var $this PartLevelController */
/* @var $data PartLevel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_part_level')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_part_level), array('view', 'id'=>$data->id_part_level)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('part_level_desc')); ?>:</b>
	<?php echo CHtml::encode($data->part_level_desc); ?>
	<br />


</div>