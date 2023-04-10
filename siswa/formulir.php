<div class="panel panel-info">
<div class="panel-heading">
	Formulir
	<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
</div>
<div class="panel-body">
	<div class="col-md-6">	
	<span class="label label-info" style="font-size: 16px;" >DATA SISWA</span>
</div>
<div class="col-md-6">	
	<span class="label label-info" style="font-size: 16px;">MASUK SEKOLAH / MADRASAH</span>
</div>
	 <br> <br>
<?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysql_query("select * from tb_siswa where kode_siswa = '$sesi'") or die(mysql_error());
$data = mysql_fetch_array($sql_formulir);
?>
	<form class="form-horizontal" action="" method="post">
		<fieldset>							
			<!-- Name input-->
<div class="col-md-6">			
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Kode Siswa</label>
	<div class="col-md-9">
		<input id="name" value="<?php echo $data ['kode_siswa']; ?>" name="kode_siwa" type="text" class="form-control">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Nama Siswa</label>
	<div class="col-md-9">
		<input id="name" name="nama_lengkap" type="text" placeholder="Your name" class="form-control" value="<?php echo $data ['nama_lengkap']; ?>">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Jenis Kelamin</label>
	<div class="col-md-9">
		<div class="radio">
			<label>
			<input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Laki-laki"<?php if ($data['jenis_kelamin'] == 'Laki-laki') {echo "checked";} ?>> Laki-laki
			</label>
			<label>
			<input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') {echo "checked";} ?> > Perempuan
			</label>
		</div>		
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Tempat Lahir</label>
	<div class="col-md-9">
		<input id="name" name="tempat" type="text" class="form-control"  value="<?php echo $data ['tempat']; ?>">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Tanggal Lahir</label>
	<div class="col-md-9">
		<input id="name" name="tgl_lahir" type="date" class="form-control" value="<?php echo $data ['tgl_lahir']; ?>">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Anak Ke</label>
	<div class="col-md-9">
		<input id="name" name="anak_ke" type="number" class="form-control" value="<?php echo $data ['anak_ke']; ?>">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Jumlah Saudara</label>
	<div class="col-md-9">
		<input id="name" name="jml_saudara" type="number" class="form-control" value="<?php echo $data ['jml_saudara']; ?>">
	</div>
</div>
	<div class="form-group">
	<label class="col-md-3 control-label" for="name">Agama</label>
	<div class="col-md-7">
			<select name="agama" class="form-control">
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			
		</select>
		
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Alamat</label>
	<div class="col-md-9">
		<textarea name="alamat" class="form-control" rows="3"> <?php echo $data['alamat']; ?> </textarea>
	</div>
</div>
	<div class="form-group">
	<label class="col-md-3 control-label" for="name"> Foto</label>
	<div class="col-md-9">
		<img src="assets/gambar/user/<?php echo $data ['foto']; ?>" alt="..." class="img-thumbnail" width="100" height="40">
		<input id="name" name="foto" type="file" class="form-control">
	</div>
</div>



</div>
		
			<!-- Email input-->
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label" for="email"> Asal Sekolah</label>
				<div class="col-md-9">
				<input id="email" name="asal_sekolah" type="text" placeholder="Asal Sekolah : SMP/MTS" value="<?php echo $data ['asal_sekolah']; ?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label" for="email">Nilai STTB / Ijazah</label>
				<div class="col-md-9">
				<input id="email" name="nilai_ijazah" type="text" class="form-control" value="<?php echo $data ['nilai_ijazah']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label" for="email">NISN</label>
				<div class="col-md-9">
				<input id="email" name="nisn" type="text" class="form-control" value="<?php echo $data ['nisn']; ?>">
				</div>
			</div>
		</div>

<div class="col-md-6">	
<span class="label label-info" style="font-size: 16px;" >NILAI UJIAN AKHIR NASIONAL SLTP</span>
</div>
<div class="col-md-6">
<table class="table table-striped">
<thead>
<tr>
	<th>No.</th>
	<th>Mata Pelajaran</th>
	<th>Nilai</th>
</tr>

</thead>
<tbody>	
<tr>
	<td>1.</td>
	<td>Matematika</td>
	<td> <input type="number" name="nilai1" class="form-control"> </td>
</tr>
<tr>
	<td>2.</td>
	<td>Bahasa Inggris</td>
	<td> <input type="number" name="nilai1" class="form-control"> </td>
</tr>
<tr>
	<td>3.</td>
	<td>Bahasa Indonesia</td>
	<td> <input type="number" name="nilai2" class="form-control"> </td>
</tr>
<tr>
	<td>4.</td>
	<td>Ilmu Pengetahuan Alam</td>
	<td> <input type="number" name="nilai3" class="form-control"> </td>
</tr>
<tr>
	<td>5.</td>
	<td>Ilmu Pengetahuan Sosial</td>
	<td> <input type="number" name="nilai4" class="form-control"> </td>
</tr>
<tr class="info">
	<td> <b>Status Penerimaan</b></td>
	<td>:</td>
	<td><?php echo $data['keterangan']; ?> </td>
</tr>
</tbody>
</table>
</div>
<!-- Email input-->
<div class="col-md-6">	
<span class="label label-info" style="font-size: 16px;" > REGISTER</span>
</div>


		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label" for="email"> Username</label>
				<div class="col-md-9">
				<input id="email" name="username" type="text" value="<?php echo $data ['username']; ?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label" for="email"> Password</label>
				<div class="col-md-9">
				<input id="email" name="pass" type="text" value="<?php echo $data ['pass']; ?>" class="form-control">
				</div>
			</div>
			
		</div>
			<!-- Form actions -->		
			<div class="form-group">				
				<div class="col-md-12 widget-left">
					<input type="submit" name="edit" class="btn btn-info" value="SIMPAN">
				    <input type="reset" class="btn btn-danger" value="RESET">
					<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
				</div>
			</div>
		
		</fieldset>
	</form>
	<?php
include 'inc/koneksi.php';
if (@$_POST['edit']) {
@$kode_user = mysql_real_escape_string($_POST['kode_user']);
@$username = mysql_real_escape_string($_POST['username']);
@$pass = mysql_real_escape_string($_POST['pass']);
@$nama_lengkap = mysql_real_escape_string($_POST['nama_lengkap']);
@$jenis_kelamin = mysql_real_escape_string($_POST['jenis_kelamin']);
@$tempat = mysql_real_escape_string($_POST['tempat']);
@$tgl_lahir = mysql_real_escape_string($_POST['tgl_lahir']);
@$anak_ke = mysql_real_escape_string($_POST['anak_ke']);
@$jml_saudara = mysql_real_escape_string($_POST['jml_saudara']);
@$agama = mysql_real_escape_string($_POST['agama']);
@$alamat = mysql_real_escape_string($_POST['alamat']);
@$asal_sekolah = mysql_real_escape_string($_POST['asal_sekolah']);
@$nilai_ijazah = mysql_real_escape_string($_POST['nilai_ijazah']);
@$nisn = mysql_real_escape_string($_POST['nisn']);
@$nilai1 = mysql_real_escape_string($_POST['nilai1']);
@$nilai2 = mysql_real_escape_string($_POST['nilai2']);
@$nilai3 = mysql_real_escape_string($_POST['nilai3']);
@$nilai4 = mysql_real_escape_string($_POST['nilai4']);
@$nilai5 = mysql_real_escape_string($_POST['nilai5']);

mysql_query("UPDATE tb_siswa SET username='$username',pass='$pass',password =md5('$pass'),nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',tempat='$tempat',tgl_lahir='$tgl_lahir',anak_ke='$anak_ke',jml_saudara='$jml_saudara',agama='$agama',alamat='$alamat',asal_sekolah='$asal_sekolah',nilai_ijazah='$nilai_ijazah',nisn='$nisn',nilai1='$nilai1',nilai2='$nilai2',nilai3='$nilai3',nilai4='$nilai4',nilai5='$nilai5' WHERE kode_siswa='$sesi' ") or die(mysql_error());
  ?>
<script type="text/javascript">

window.location.href="?page=siswa&action=detail";     
</script>
<?php 
}?>

</div>
</div>
</div><!--/.col-->
