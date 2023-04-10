
		
<?php
include 'inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysql_query("select * from tb_siswa where kode_siswa = '$kdsis'") or die(mysql_error());
$data = mysql_fetch_array($sql);
?>

	<div class="col-md-10">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<center>
							<b>PENENTUAN KELULUSAN</b>
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
						</center>

					</div>
					<div class="panel-body">
						<center>
							<img src="assets/gambar/user/<?php echo $data ['foto']; ?>" alt="..." class="img-thumbnail" width="100" height="40" style="border: 3px solid silver; border-radius: 8%;">
						</center>
						<form action="" method="post">
<table class="table table-striped">
		<thead>
		<tr style="color: dodgerblue;">
			<th>STATUS PENERIMAAN</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Status</td>
			<td><b style="color: dodgerblue;"><?php echo $data['keterangan']; ?></b>
			</td>					
		</tr>
				<tr>
			<td>Tentukan</td>
			<td></b>
<div class="form-group">
<label>Pilih Salah Satu !!</label>
<div class="checkbox">
<label>
<input name="keterangan" type="checkbox" value="DITERIMA" style=" height: 20px;
    width: 20px;
    margin-right: 5px;
    vertical-align: middle;">&nbsp; <b>DITERIMA</b>
</label>
</div>
<div class="checkbox">
<label>
<input name="keterangan" type="checkbox" value="TIDAK DITERIMA" style=" height: 20px;
    width: 20px;
    margin-right: 5px;
    vertical-align: middle;">&nbsp; <b>TIDAK DITERIMA</b>
</label>
</div>
<div class="checkbox">
<label>
<input name="keterangan" type="checkbox" value="CADANGAN" style=" height: 20px;
    width: 20px;
    margin-right: 5px;
    vertical-align: middle;">&nbsp; <b>CADANGAN</b>
</label>
</div>									
</div>
<input type="submit" name="proses" class="btn btn-primary btn-lg" value="PROSES">

			</td>					
		</tr>
	</tbody>

</table>
</form>
	<?php
include 'inc/koneksi.php';
if (@$_POST['proses']) {
@$keterangan = mysql_real_escape_string($_POST['keterangan']);


mysql_query("UPDATE tb_siswa SET keterangan='$keterangan' WHERE kode_siswa='$kdsis' ") or die(mysql_error());
  ?>

<script type="text/javascript">
	alert(" Suskse !! Data berhasil di PROSES !! ")

window.location.href="?page=admin&action=penentuan";     
</script>
<?php 
}?>


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