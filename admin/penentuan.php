<?php 
include 'inc/koneksi.php';
 ?>
	<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><span class="glyphicon glyphicon-check" style="font-size: 23px;"></span><b> Penentuan Kelulusan</b> 
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
					<th>Nama Siswa</th>
					<th>Jk</th>
					<th>Asal Sekolah</th>					
					<th>Status</th>
					<th>Foto</th>
					<th>Tindakan</th>
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
					<td><?php echo $data['nama_lengkap']; ?> </td>
					<td><?php echo $data['jenis_kelamin']; ?> </td>
					<td><?php echo $data['asal_sekolah']; ?> </td>				
                   <td><?php echo $data['keterangan']; ?> </td>
                   	<td><img src="assets/gambar/user/<?php echo $data ['foto']; ?>" style="
                    border: 3px solid silver;
                    border-radius: 100%;" width="50" height="50"> </td>
                    <td>
<a href="?page=admin&action=detail&kdsis=<?php echo $data['kode_siswa']; ?>">
	<button type="button" class="btn btn-primary">
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Cek Data
</button>
</a>
<a href="?page=admin&action=proses&kdsis=<?php echo $data['kode_siswa']; ?>">
	<button type="button" class="btn btn-danger">
<span class="glyphicon glyphicon-record" aria-hidden="true"></span> Proses
</button>
</a>

                    </td>
				</tr>
				<?php }?>
				
			</tbody>
		</table>
		</div>
	
						
					</div>
				</div>
			</div>