<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Data Master </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/pelanggan'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Pelanggan
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/karyawan'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Karyawan
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/petugas'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Petugas
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/supplier'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Supplier
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/part'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									PART
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/jabatan'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Jabatan
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/kendaraanPerusahaan'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Kendaraan Perusahaan
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/jenisKendaraanPerusahaan'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Jenis Kendaraan Perusahaan
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/kota'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Kota
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/partBrand'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Part Brand
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/partType'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Part Type
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo Yii::app()->createUrl('admin/partLevel'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Part Level
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>