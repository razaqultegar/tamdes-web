<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
		<title>Buku Tamu | Desa Contoh</title>
		<link href="<?php echo base_url('assets/form/css/bootstrap.min.css');?>" rel="stylesheet" />
		<link href="<?php echo base_url('assets/form/css/paper-bootstrap-wizard.css');?>" rel="stylesheet" />
		<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url('assets/form/css/themify-icons.css');?>" rel="stylesheet">
	</head>

	<body>
		<div class="image-container set-full-height">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="wizard-container">
							<div class="card wizard-card" data-color="green" id="wizard">
								<form action="<?php echo base_url(). 'selamat_datang/add'; ?>" method="post">
									<div class="wizard-header">
										<h3 class="wizard-title">Aplikasi Buku Tamu</h3>
										<p class="category">Selamat datang, silahkan isi data diri Anda dengan benar.</p>
									</div>
									<div class="wizard-navigation">
										<div class="progress-with-circle">
									    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
										</div>
										<ul>
											<li>
												<a href="#personal" data-toggle="tab">
													<div class="icon-circle">
														<i class="ti-user"></i>
													</div>
													Personal
												</a>
											</li>
											<li>
												<a href="#alamat" data-toggle="tab">
													<div class="icon-circle">
														<i class="ti-direction-alt"></i>
													</div>
													Alamat
												</a>
											</li>
											<li>
												<a href="#lainlain" data-toggle="tab">
													<div class="icon-circle">
														<i class="ti-menu-alt"></i>
													</div>
													Lain-lain
												</a>
											</li>
										</ul>
									</div>
									<div class="tab-content">
										<div class="tab-pane" id="personal" style="margin-top: 50px;">
											<div class="row">
												<div class="col-sm-5 col-sm-offset-1">
													<div class="form-group">
														<label>Tanggal Datang <small class="text-danger">*</small></label>
														<input name="tgldatang" type="date" class="form-control">
													</div>
												</div>
												<div class="col-sm-5">
													<div class="form-group">
														<label>No. KTP <small class="text-danger">*</small></label>
														<input name="noktp" type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-5 col-sm-offset-1">
													<div class="form-group">
														<label>Nama Lengkap <small class="text-danger">*</small></label>
														<input name="nama" type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-5">
													<div class="form-group">
														<label>No. Telp <small class="text-danger">*</small></label>
														<input name="notel" type="number" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="alamat" style="margin-top: 50px;">
											<div class="row">
											<div class="col-sm-5 col-sm-offset-1">
													<div class="form-group">
														<label>Alamat Asal <small class="text-danger">*</small></label>
														<textarea class="form-control" name="alamatasal" placeholder="" rows="9"></textarea>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="form-group">
														<label>Alamat Tujuan <small class="text-danger">*</small></label>
														<textarea class="form-control" name="alamattujuan" placeholder="" rows="9"></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="lainlain" style="margin-top: 50px;">
											<div class="row">
												<div class="col-sm-5 col-sm-offset-1">
													<div class="form-group">
														<label>Lama Tinggal <small class="text-danger">*</small></label>
														<input name="lama" type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-5">
													<div class="form-group">
														<label>Keperluan <small class="text-danger">*</small></label>
														<input name="keperluan" type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-10 col-sm-offset-1">
													<div class="form-group">
														<label>Keterangan</label>
														<textarea class="form-control" name="keterangan" placeholder="" rows="6"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wizard-footer">
										<div class="pull-right">
											<button type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next'>Lanjut</button>
											<button type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' data-toggle="modal" data-target="#exampleModal">Selesai</button>
										</div>
										<div class="pull-left">
											<button type='button' class='btn btn-previous btn-default btn-wd' name='previous'>Kembali</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
	      </div>
	    </div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="<?php echo base_url('assets/form/js/jquery-2.2.4.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/form/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/form/js/jquery.bootstrap.wizard.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/form/js/paper-bootstrap-wizard.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/form/js/jquery.validate.min.js');?>" type="text/javascript"></script>
</html>
