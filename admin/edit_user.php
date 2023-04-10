<?php
include 'inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysql_query("select * from tb_siswa where kode_siswa = '$kdsis'") or die(mysql_error());
$data = mysql_fetch_array($sql);

?>
<div class="row">
<div class="col-lg-12">

<div class="panel panel-primary">
<div class="panel-heading">
<span class="glyphicon glyphicon-edit" style="font-size: 23px;"></span>
<b>Edit User Siswa</b></div>
<div class="panel-body">
<div class="col-md-12">
<form action="" method="post">     	
<div class="form-group">
<label>Kode</label>
<input name="kode_siswa" type="text" class="form-control" value="<?php echo $data['kode_siswa']; ?> ">
</div>

<div class="form-group">
<label>Username</label>
<input name="username" type="text" class="form-control" value="<?php echo $data['username']; ?> ">
</div>

<div class="form-group">
<label>Password</label>
<input name="pass" type="text" class="form-control" value="<?php echo $data['pass']; ?> ">
</div>
<input type="submit" name="edit" class="btn btn-primary" value="Edit Data">

</div>
</form>
<?php
include 'inc/koneksi.php';
if (@$_POST['edit']) {
@$username = mysql_real_escape_string($_POST['username']);
@$pass = mysql_real_escape_string($_POST['pass']);
@$level = mysql_real_escape_string($_POST['level']);
mysql_query("update tb_siswa set username='$username',pass='$pass',password =md5('$pass') where kode_siswa='$kdsis' ") or die(mysql_error());
  ?>
<script type="text/javascript">
alert(" Data Telah Terubah !!");
window.location.href="?page=admin&action=user";     
</script>
<?php 
}



?> 

</div>
</div>
</div>


	</div>
</div>


</div>


				