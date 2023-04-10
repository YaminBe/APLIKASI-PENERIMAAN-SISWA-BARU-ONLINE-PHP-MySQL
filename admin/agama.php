<div class="panel panel-info">
<div class="panel-heading">
	<b><span class="glyphicon glyphicon-check" style="font-size: 20px;"></span>DATA AGAMA</b>
	<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
</div>
<div class="panel-body">
	<table class="tabble table bordered table-striped table table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Agama</th>
				<th>Nama Agama</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql=mysql_query("SELECT * FROM tb_agama");
				$no=1;
				while ($data= mysql_fetch_array($sql)) {		  

				 ?>
			<tr>
				<td><?php echo $no++; ?> </td>
				<td><?php echo $data['kode_agama']; ?> </td>
				<td><?php echo $data['nama_agama']; ?></td>
				<td>

<a href="" data-toggle="modal" data-target="#edit<?php echo $data['kode_agama']; ?>"><button type="button" class="btn btn-success"  data-toggle="tooltip" data-placement="left" title="Ubah Data"> Edit
</button></a>
<!--- Modal EDIT-->

<div class="modal fade" id="edit<?php echo $data['kode_agama']; ?>" tabindex="-1" role="dialog">
               
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">

<div class="modal-header">
<h4 class="modal-title" id="defaultModalLabel">Edit Data Agama</h4>
</div>

<div class="modal-body">
<div class="row clearfix">
<form action="" method="post" enctype="multipart/form-data">
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
	<label class="form-label">Kode Agama</label>
<input type="text" name="kode_agama" class="form-control" value="<?php echo $data['kode_agama']; ?>"/>

</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
	<label class="form-label">Nama Agama</label>
<input type="text" name="nama_agama" class="form-control" value="<?php echo $data['nama_agama']; ?>" />

</div>
</div>
</div>



</div>


</div>
<div class="modal-footer">
<input type="submit" name="update" class="btn btn-info" value="SIMPAN">
<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
</div>
</form>
<?php 
include 'inc/koneksi.php';
 // Script update data
    if (isset($_REQUEST['update'])) {
        $kode_agama = $_REQUEST['kode_agama'];  
        $nama_agama = $_REQUEST['nama_agama'];  

         mysql_query("UPDATE tb_agama SET 
                                      nama_agama='$nama_agama'
                                      WHERE kode_agama='$kode_agama'") or die(mysql_error());
          ?>
<script type="text/javascript">
alert(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=admin&action=agama";     
</script>
<?php 
}
 ?>

</div>
</div>
</div>
</div>
<!-- Akhir Modal Edit-->





					<a href="?page=admin&action=hapus_agama&kdjab=<?php echo $data['kode_agama']; ?>"> <button class="btn btn-danger">Hapus</button> </a>
				</td>
			</tr>
			<?php 	} ?>
		</tbody>
	</table>
	<!-- Large modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Data</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

			<div class="panel panel-info">
			<div class="panel-heading">
			<b><span class="glyphicon glyphicon-check" style="font-size: 20px;"></span> TAMBAH DATA AGAMA</b>
			</div>
			<div class="panel-body">
					                 <?php 
include'inc/koneksi.php';
$carikode = mysql_query("select max(kode_agama) from tb_agama") or die(mysql_error());
$datakode = mysql_fetch_array($carikode);
if ($datakode) {
$nilaikode = substr($datakode[0], 1);
$kode = (int) $nilaikode;
$kode = $kode + 1;
$hasilkode= "A" .str_pad($kode, 3, "0", STR_PAD_LEFT);
} else{
$hasilkode = "A001";
}
?> 
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
		<fieldset>	
					<div class="form-group">
					<label class="col-md-3 control-label"  for="name">Kode Agama</label>
					<div class="col-md-9">
						<input id="name" name="kode_agama" type="text" class="form-control" value="<?php echo "$hasilkode";?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="name">Nama Agama</label>
					<div class="col-md-9">
						<input id="name" name="nama_agama" type="text" class="form-control" placeholder="Masukkan Nama Agama">
					</div>
				</div>
						
			<center>
					<div class="form-group">
					<input type="submit" name="simpan" class="btn btn-success" value="Simpan">
					<input type="reset" name="" class="btn btn-danger" value="Reset">
				</div>
			</center>
			</div>
			</fieldset>



		</form>
		<?php
$kode_agama = @$_POST['kode_agama'];
$nama_agama = @$_POST['nama_agama'];

$simpan = @$_POST['simpan'];

if ($simpan){
if ($kode_agama == "" || $nama_agama == "") {
?>
<script type="text/javascript">             
alert("Oops...", "Inputan tidak boleh kosong !!:(", "error");
</script>
<?php

}else{
mysql_query("INSERT INTO tb_agama VALUES ('$kode_agama','$nama_agama')") or die(mysql_error());
          ?>
<script type="text/javascript">
alert(" Sukses !", "Data berhasil Di simpan!", "success")
window.location.href="?page=admin&action=agama";     
</script>
<?php 
}



}
?>



			</div>
			</div>

      
    </div>
  </div>
</div>




	

</div>

</div><!--/.col-->
