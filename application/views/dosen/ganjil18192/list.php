<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("dosen/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("dosen/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("dosen/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("dosen/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					
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
									<?php foreach ($ganjil1819s2 as $ganjil18192): ?>
									<tr>
										<td width="150">
											<?php echo $ganjil18192->pengajar ?>
										</td>
										<td width="150">
											<?php echo $ganjil18192->matkul ?>
										</td>
										<td width="150">
											<?php echo $ganjil18192->ruang ?>
										</td>
										<td width="150">
											<?php echo $ganjil18192->hari ?>
										</td>
										<td width="150">
											<?php echo $ganjil18192->jam ?>
										</td>
										<td width="150">
											<?php echo $ganjil18192->kelas ?>
										</td>
										<td width="150">
											<?php echo $ganjil18192->tanggal ?>
										</td>
										<td width="150">
											<?php echo $ganjil18192->status ?>
										</td>
										<td width="150">
											<?php echo $ganjil18192->alasan ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('dosen/ganjil1819s2/edit/'.$ganjil18192->id_jadwal) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('dosen/ganjil1819s2/delete/'.$ganjil18192->id_jadwal) ?>')"
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
			<?php $this->load->view("dosen/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("dosen/_partials/scrolltop.php") ?>
	<?php $this->load->view("dosen/_partials/modal.php") ?>

	<?php $this->load->view("dosen/_partials/js.php") ?>

<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>