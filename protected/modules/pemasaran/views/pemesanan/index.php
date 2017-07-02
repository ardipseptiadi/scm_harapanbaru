<?php
/* @var $this PemesananController */

$this->breadcrumbs=array(
	'Pemesanan',
);
?>
<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue">Pesanan</h3>
		
		<div class="button-groups">
			<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('pemasaran/pemesanan/create'); ?>">Tambah</a>
			<a class="btn btn-primary" href="<?php //echo Yii::app()->createUrl('admin/jabatan/admin'); ?>">Manage</a>
		</div>
		
		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Data Pesanan
		</div>
		<div>
			<?php 
			$this->widget('HarapanBaruGrid', array(
				'id'=>'dynamic-table',
				'dataProvider'=>$dataProvider,
				'columns'=>array(
					'no_order',
					array(
						'header'=>'Pelanggan',
						'value'=>'$data->idPelanggan->nama'
					),
					'tgl_pesan',
					'tgl_kirim',
					array(
						'header'=>'Aksi',
						'name'=>'aksi',
						'value' => '
							CHtml::link("Detail",
								array(
									"pemesanan/detail",
									"id"=>"1"
								),
								array(
									// "onclick"=>"js:removecartitem(".
									// 								$data["id"].",".
									// 								$data["id_part"].");",
									"class" => "btn btn-info btn-xs",
								)
							);',
						'type' => 'raw',
					)
				),
			)); 
			?>
		</div>
	</div>
</div>
