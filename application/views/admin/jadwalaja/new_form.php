<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/jadwalajas/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/jadwalajas/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Pengajar*</label>
								<input class="form-control <?php echo form_error('pengajar') ? 'is-invalid':'' ?>"
								 type="text" name="pengajar" placeholder="Pengajar" />
								<div class="invalid-feedback">
									<?php echo form_error('pengajar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Matkul*</label>
								<input class="form-control <?php echo form_error('matkul') ? 'is-invalid':'' ?>"
								 type="text" name="matkul" placeholder="Matkul" />
								<div class="invalid-feedback">
									<?php echo form_error('matkul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Ruang*</label>
								<input class="form-control <?php echo form_error('ruang') ? 'is-invalid':'' ?>"
								 type="text" name="ruang" placeholder="Ruang" />
								<div class="invalid-feedback">
									<?php echo form_error('ruang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="hari">Hari*</label>
								<input class="form-control <?php echo form_error('hari') ? 'is-invalid':'' ?>"
								 type="text" name="hari" placeholder="Hari" />
								<div class="invalid-feedback">
									<?php echo form_error('hari') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jam">Jam*</label>
								 <select class="form-control <?php echo form_error('jam') ? 'is-invalid':'' ?>" name="jam">
								 	<option value="07.00-08.40">07.00-08.40</option>
								 	<option value="07.00-10.20">07.00-10.20</option>
									 <option value="07.00-12.00">07.00-12.00</option>
									 <option value="08.40-10.20">08.40-10.20</option>
									 <option value="08.40-12.00">08.40-12.00</option>
									 <option value="10.20-12.00">10.20-12.00</option>
									 <option value="13.00-14.40">13.00-14.40</option>
									 <option value="13.00-16.20">13.00-16.20</option>
									 <option value="13.00-18.00">13.00-18.00</option>
									 <option value="14.40-16.20">14.40-16.20</option>
								 </select>
								<div class="invalid-feedback">
									<?php echo form_error('jam') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kelas">Kelas*</label>
								<input class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>"
								 type="text" name="kelas" placeholder="Kelas" />
								<div class="invalid-feedback">
									<?php echo form_error('kelas') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal">Tanggal Mengajar*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" placeholder="Tanggal" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status">Status*</label>
								//select untuk dropdown
								 <select class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>" name="status">
								 	<option value="Waiting">Waiting</option>
									 <option value="Ya">Ya</option>
								 	<option value="Tidak">Tidak</option>
								 </select>
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alasan">Keterangan*</label>
								<input class="form-control <?php echo form_error('alasan') ? 'is-invalid':'' ?>"
								 type="text" name="alasan" placeholder="Keterangan" />
								<div class="invalid-feedback">
									<?php echo form_error('alasan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>