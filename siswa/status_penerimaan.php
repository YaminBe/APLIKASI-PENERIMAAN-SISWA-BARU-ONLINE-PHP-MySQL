
<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<center>
							<b> STATUS PENERIMAAN</b>
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
						</center>

					</div>
					<div class="panel-body">
						<center>
							<img src="assets/gambar/user/<?php echo $data ['foto']; ?>" alt="..." class="img-thumbnail" width="100" height="40" style="border: 3px solid silver; border-radius: 8%;">
						</center>
<div class="alert bg-info" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Informasi!</strong> Kelulusan Anda adalah :  <b style="color: red;"><?php echo $data['keterangan']; ?></b>
</div>
						<form action="" method="post">
<table class="table table-striped">
		<thead>
		<tr style="color: dodgerblue;">
			<th><b>STATUS PENERIMAAN</b></th>
			<th><th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>No.Pendaftaran</td>
			<td><b style="color: dodgerblue;"><?php echo $data['kode_siswa']; ?></b>
			</td>					
		</tr>
		<tr>
			<td>Nama Calon Siswa</td>
			<td><b style="color: dodgerblue;"><?php echo $data['nama_lengkap']; ?></b>
			</td>					
		</tr>
	
		<tr style="color: dodgerblue;">
			<td><b>STATUS PENERIMAAN</b></td>
			<td><div class="alert bg-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><b><?php echo $data['keterangan']; ?></b>
</div>
			</td>					
		</tr>
	</tbody>

</table>
</form>



					</div>
				</div>
			</div>
		
