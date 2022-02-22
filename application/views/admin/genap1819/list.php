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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/genap1819s/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Pengajar</th>
										<th>Matkul</th>
										<th>Ruangan</th>
										<th>Hari</th>
										<th>Jam</th>
										<th>Kelas</th>
										<th>Tanggal Mengajar</th>
										<th>Status</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($genap1819s as $genap1819): ?>
									<tr>
										<td width="150">
											<?php echo $genap1819->pengajar ?>
										</td>
										<td width="150">
											<?php echo $genap1819->matkul ?>
										</td>
										<td width="150">
											<?php echo $genap1819->ruang ?>
										</td>
										<td width="150">
											<?php echo $genap1819->hari ?>
										</td>
										<td width="150">
											<?php echo $genap1819->jam ?>
										</td>
										<td width="150">
											<?php echo $genap1819->kelas ?>
										</td>
										<td width="150">
											<?php echo $genap1819->tanggal ?>
										</td>
										<td width="150">
											<?php echo $genap1819->status ?>
										</td>
										<td width="150">
											<?php echo $genap1819->alasan ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/genap1819s/edit/'.$genap1819->id_jadwal) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/genap1819s/delete/'.$genap1819->id_jadwal) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>