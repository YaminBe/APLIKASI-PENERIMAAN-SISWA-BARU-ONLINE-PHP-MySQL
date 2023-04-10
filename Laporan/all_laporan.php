<?php 
include 'inc/koneksi.php';
 ?>
	<div class="col-md-112">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="fa fa-database" style="font-size: 23px;"></span> <b>Laporan Data Pendaftar</b>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>

<span class="pull-right">
<a target="_blank" href="Laporan/all_print.php"><button class="btn btn-primary btn-lg"><span style="font-size: 20px;" class="glyphicon glyphicon-print"></span> Print </button></a>
<a target="_blank" href="Laporan/all_pdf.php"><button class="btn btn-danger btn-lg"><span style="font-size: 20px;" class="glyphicon glyphicon-save-file"></span> PDF </button></a>
<a target="_blank" href="Laporan/all_excell.php">
	<button class="btn btn-success btn-lg"><span style="font-size: 20px;" class="glyphicon glyphicon-duplicate"></span> Excell </button>
</a>

</span>
					</div>

		<div class="panel-body">
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
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql=mysql_query("SELECT * FROM tb_siswa");
				$no=1;
				while ($data= mysql_fetch_array($sql)) {		  

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
                    <td>
					<a target="_blank" href="Laporan/print_id.php?kdsis=<?php echo $data['kode_siswa']?>">
						<button type="button" class="btn btn-info">
					<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
					</button>
					</a>
					<a target="_blank" href="Laporan/print_id.php?kdsis=<?php echo $data['kode_siswa']?>">
						<button type="button" class="btn btn-danger">
					<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
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