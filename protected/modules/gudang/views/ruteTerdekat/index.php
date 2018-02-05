
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Rute Terdekat</h3>

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Data pesanan berdasarkan data jarak pelanggan
		</div>
    <div>
      <?php
      $this->widget('zii.widgets.grid.CGridView',array(
					'id' => 'cart-grid',
					'dataProvider' => $dt,
					'summaryText' => false,
					'columns' => array(
						array(
							'name' => 'Ranking',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["ranking"])',
						),
						array(
							'name' => 'Pesanan',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["pesanan"])',
						),
						array(
							'name' => 'Pelanggan',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["pelanggan"])',
						),
						array(
							'name' => 'Jarak',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["jarak"])',
						),
					),
			)); ?>
    </div>
		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
</div>
