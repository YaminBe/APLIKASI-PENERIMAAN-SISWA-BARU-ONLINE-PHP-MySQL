			<!-- alert-->
<div class="alert bg-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong><em class="fa fa-lg fa-success">&nbsp;</em>Perhatian !! </strong> <?php echo $data ['nama_lengkap']; ?> &nbsp; <span class="glyphicon glyphicon-hand-right"></span> Kartu ini Dibawa Ketika Pendaftaran Ulang Ke Sekolah 
</div>
<!-- end-alert--> 	

 <?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysql_query("select * from tb_siswa where kode_siswa = '$sesi'") or die(mysql_error());
$data = mysql_fetch_array($sql_formulir);
?>

	<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-file" style="font-size: 23px;"></span>
							<b>KARTU PENDAFTARAN</b>
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
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
			<td><b style="color: dodgerblue;"><?php echo $data['keterangan']; ?></b></td>					
		</tr>
	</tbody>

</table>

					</div>
				</div>
			</div>
		
	<div class="col-md-2">
<a target="_blank" href="Laporan/print_id.php?kdsis=<?php echo $data['kode_siswa']?>">
	<button type="button" class="btn btn-primary btn-lg" style="width: 130px;">
  <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
</button>
</a>
<br>
<br>
<a target="_blank" href="Laporan/cetak_pdf_id.php?kdsis=<?php echo $data['kode_siswa']?>">
<button type="button" class="btn btn-danger btn-lg" style="width: 130px;">
  <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Pdf
</button>
</a>
<br>
<br>
<a target="_blank" href="Laporan/cetak_excell_id.php?kdsis=<?php echo $data['kode_siswa']?>">
<button type="button" class="btn btn-success btn-lg" style="width: 130px;">
  <span class="glyphicon glyphicon-file" aria-hidden="true"></span> Excell
</button></a>
	</div>