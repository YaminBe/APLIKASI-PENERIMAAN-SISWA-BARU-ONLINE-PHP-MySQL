
		
<?php
include 'inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysql_query("select * from tb_siswa where kode_siswa = '$kdsis'") or die(mysql_error());
$data = mysql_fetch_array($sql);
?>

	<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">
						<center>
							<b>DETAIL DATA CALON SISWA</b>		
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em>

							</span>
						</center>

					</div>
					<div class="panel-body">
						<center>
							<img src="assets/gambar/user/<?php echo $data ['foto']; ?>" alt="..." class="img-thumbnail" width="100" height="40" style="border: 3px solid silver; border-radius: 8%;">
						</center>
<table class="table table-striped">
	<thead>
		<tr style="color: dodgerblue;">
			<th>DATA SISWA</th>
			<th></th>
		
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Kode Siswa</td>
			<td><?php echo $data['kode_siswa']; ?></td>	
		</tr>
			<tr>
			<td>NISN</td>
			<td><?php echo $data['nisn']; ?></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td><?php echo $data['nama_lengkap']; ?></td>
		</tr>
			<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
		</tr>
			<tr>
			<td>Tempat,Tanggal Lahir</td>
			<td><?php echo $data['tempat']; ?>,<?php echo $data['tgl_lahir']; ?></td>
		</tr>
			<tr>
			<td>Anaka ke</td>
			<td><?php echo $data['anak_ke']; ?></td>
		</tr>
			<tr>
			<td>Jumlah Saudara</td>
			<td><?php echo $data['jml_saudara']; ?></td>
		</tr>
		</tr>
			<tr>
			<td>Agama</td>
			<td><?php echo $data['agama']; ?></td>
		</tr>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $data['alamat']; ?></td>
					
		</tr>
	</tbody>
	<thead>
		<tr style="color: dodgerblue;">
			<th>MASUK SEKOLAH/MADRASAH</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Asal Sekolah</td>
			<td><?php echo $data['asal_sekolah']; ?></td>
		</tr>
		<tr>
			<td>Nilai STTB/Ijazah</td>
			<td><?php echo $data['nilai_ijazah']; ?></td>
					
		</tr>
	</tbody>
	<thead>
		<tr style="color: dodgerblue;">
			<th>NILAI UJIAN AKHIR NASIONAL SLTP</th>
			<th></th>
		
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Matematika</td>
			<td><?php echo $data['nilai1']; ?></td>					
		</tr>
			<tr>
			<td>Bahasa Inggris</td>
			<td><?php echo $data['nilai2']; ?></td>					
		</tr>
			<tr>
			<td>Bahasa Indonesia</td>
			<td><?php echo $data['nilai3']; ?></td>					
		</tr>
			<tr>
			<td>Ilmu Pengetahuan Alam</td>
			<td><?php echo $data['nilai4']; ?></td>					
		</tr>
			<tr>
			<td>Ilmu Pengetahuan Sosial</td>
			<td><?php echo $data['nilai5']; ?></td>				
		</tr>
	</tbody>
		<thead>
		<tr style="color: dodgerblue;">
			<th>STATUS PENERIMAAN</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Status</td>
			<td>
				<b style="color: dodgerblue;"><?php echo $data['keterangan']; ?></b>			
			</td>								
		</tr>
		<tr>
			<td></td>
			<td><a href="?page=admin&action=proses&kdsis=<?php echo $data['kode_siswa']; ?>">
	<button type="button" class="btn btn-info" style="width: 130px;">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Lanjut
</button>
</a></td>
		</tr>
	
	</tbody>
	

</table>

					</div>
				</div>
			</div>
