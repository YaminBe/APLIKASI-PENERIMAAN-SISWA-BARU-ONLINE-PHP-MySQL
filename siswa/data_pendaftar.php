<?php 
include 'inc/koneksi.php';
 ?>
	<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span class="fa fa-database" style="font-size: 23px;"></span>
						<b>Data Pendaftar</b> 
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>

		<div class="panel-body">
<?php $jml =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa"));?>
<br>
<button class="btn btn-primary" type="button">
Jumlah Pendaftar <span class="badge"><?php echo "".$jml." ";?></span>
</button>
<br>
<br>
<div class="table-responsive">
	



		<table class="table table-striped table table-bordered table table-hover" id="data">
			<thead>
				<tr>			
					<th>No.</th>
					<th>Kode Siswa</th>
					<th>Nama Siswa</th>
					<th>Jk</th>
					<th>Tempat,Tgl Lahir</th>
					<th>Alamat</th>
					<th>Asal Sekolah</th>
					<th>Keterangan</th>
					<th>Foto</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql=mysql_query("SELECT * FROM tb_siswa");
				$no=1;
				while ($data= mysql_fetch_array($sql)) {
				 	# code...
				  

				 ?>
				<tr>				
					<td><?php echo $no++; ?>. </td>
					<td><?php echo $data['kode_siswa']; ?> </td>
					<td><?php echo $data['nama_lengkap']; ?> </td>
					<td><?php echo $data['jenis_kelamin']; ?> </td>
					<td><?php echo $data['tempat']; ?>, <?php echo $data['tgl_lahir']; ?>  </td>
					<td><?php echo $data['alamat']; ?> </td>
					<td><?php echo $data['asal_sekolah']; ?> </td>
					<td><?php echo $data['keterangan']; ?> </td>
					<td><img src="assets/gambar/user/<?php echo $data ['foto']; ?>" style="
                    border: 3px solid silver;
                    border-radius: 100%;" width="50" height="50"> </td>
				</tr>
				<?php }?>
				
			</tbody>
		</table>
		</div>
	
						
					</div>
				</div>
			</div>