<div class="row">
<div class="col-lg-6">
<div class="panel panel-primary">
<div class="panel-heading"><span class="glyphicon glyphicon-user" style="font-size: 25px;"></span> User Siswa</div>
<div class="panel-body">
	<?php $jml =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa"));?>
	<?php $jml1 =mysql_num_rows(mysql_query("SELECT * FROM tb_user"));?>
<br>
<button class="btn btn-primary" type="button">
Jumlah User <span class="badge"><?php echo "".$jml." ";?></span>
</button>
<table class="table table-striped table table-condensed table table-hover">
<thead>
	<tr>
	<th>No.</th>
	<th>Kode</th>
	<th>Username</th>
	<th>Password</th>
	<th>Nama Lengkap</th>
	<th>Action</th>
	</tr>
</thead>							
<tbody>
	<?php
	$sql=mysql_query("select * from tb_siswa") or die(mysql_error());
	$no=1;
	while ($data=mysql_fetch_array($sql)) {
	 	# code...
	?>
	<tr>
	<td><?php echo $no++; ?>.</td>
	<td><?php echo $data['kode_siswa']; ?></td>
	<td><?php echo $data['username']; ?></td>
	<td><?php echo $data['pass']; ?></td>
	<td><?php echo $data['nama_lengkap']; ?></td>
	<td>
<a href="?page=admin&action=edituser&kdsis=<?php echo $data['kode_siswa'];?>"><span style="color: dodgerblue; font-size: 20px;" class="glyphicon glyphicon-edit"></span>
</a>
<a href="?page=admin&action=deluser&kdsis=<?php echo $data['kode_siswa'];?>"><span style="color: red; font-size: 20px;" class="glyphicon glyphicon-remove" aria-hidden="true">
</a>
	
	</td>
	</tr>
	<?php  }  ?>
</tbody>
</table>




							
		
	</div>
</div>
</div>

<!-- BATAS GRID-->
<div class="col-lg-6">
<div class="panel panel-info">
<div class="panel-heading"><span class="glyphicon glyphicon-education" style="font-size: 25px;"></span> User Admin&Kepsek</div>
<div class="panel-body">
	<button class="btn btn-danger" type="button">
Jumlah User <span class="badge"><?php echo "".$jml1." ";?></span>
</button>
	<table class="table table-striped table table-condensed table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nama Lengkap</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql=mysql_query("SELECT * FROM tb_user") or die(mysql_error());
			$no=1;
			while ($data=mysql_fetch_array($sql)) {
			 	# code...
			 

			 ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['pass']; ?></td>
				<td><?php echo $data['nama_lengkap']; ?></td>
				<td>
					<a href="?page=admin&action=editadmin&kdsis=<?php echo $data['kode_user'];?>"><span class="glyphicon glyphicon-edit" style="color: dodgerblue; font-size: 20px;"></span></a>
					<a href="?page=admin&action=deladmin&kdsis=<?php echo $data['kode_user'];?>"><span class="glyphicon glyphicon-remove" style="color: orangered; font-size: 20px;"></span></a>
				</td>
			</tr>
			<?php  } ?>
		</tbody>
		
	</table>
	<!-- Button trigger modal -->
<center>
	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
<span class="glyphicon glyphicon-plus-sign"></span> Tambah
</button>
</center>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <span class="glyphicon glyphicon-user" style="font-size: 23px;"></span><b> Tambah User Admin & Kepsek</b></h4>
      </div>
      <?php 
include'inc/koneksi.php';
$carikode = mysql_query("select max(kode_user) from tb_user") or die(mysql_error());
$datakode = mysql_fetch_array($carikode);
if ($datakode) {
$nilaikode = substr($datakode[0], 1);
$kode = (int) $nilaikode;
$kode = $kode + 1;
$hasilkode= "U" .str_pad($kode, 3, "0", STR_PAD_LEFT);
} else{
$hasilkode = "U001";
}
?>
      <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div  class="from-group">
        	<label>Kode</label>
        	<input type="text" name="kode_user" value="<?php echo "$hasilkode";?>" class="form-control">        	
        </div>
        <div  class="from-group">
        	<label>Nama Lengkap</label>
        	<input type="text" name="nama_lengkap" class="form-control">        	
        </div>
        <div  class="from-group">
        	<label>Username</label>
        	<input type="text" name="username" class="form-control">        	
        </div>
        <div  class="from-group">
        	<label>Password</label>
        	<input type="text" name="password" class="form-control">        	
        </div>
        <div  class="from-group">
        	<label>Ulangi Password</label>
        	<input type="text" name="pass" class="form-control">        	
        </div>
        <br>
         <div  class="from-group">
			<div class="demo-radio-button">
			<input name="level" value="admin" type="radio" id="radio_30" class="with-gap radio-col-light-blue"/>
			<label for="radio_30">Admin/Panitia PSB</label> <br>
			<input name="level" value="kepsek" type="radio" id="radio_31" class="with-gap radio-col-light-blue"/>
			<label for="radio_31">Kepala Sekolah</label>
			</div>       	
        </div>
        <br>
        <div  class="from-group">
        	<label>Foto User</label>
        	<input type="file" name="gambar" class="form-control">        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
      </div>
	</div>
	</form>
	<?php
	$kode_user = @$_POST['kode_user'];
	$nama_lengkap = @$_POST['nama_lengkap'];
	$username = @$_POST['username'];
	$password=md5(@$_POST['password']);
	$pass = @$_POST['pass'];
	$level = @$_POST['level'];


      $sumber = @$_FILES['gambar']['tmp_name'];
      $target = 'assets/gambar/user/';
      $nama_gambar = @$_FILES['gambar']['name'];


      $simpan_data = @$_POST['simpan']; 

      if ($simpan_data) {

        if ($kode_user == "" || $nama_lengkap == "" || $username == "" || $password == "" || $pass == "" || $level== "" || $nama_gambar == ""){
                   ?>

                   <script type="text/javascript">
                  
         alert("Oops...Inputan tidak boleh kosong !!");
                   </script>
                   <?php
           
       } else{


        $pindah = move_uploaded_file($sumber, $target.$nama_gambar);

        if ($pindah) {
          mysql_query("insert into tb_user values ('$kode_user','$username','$password','$pass','$nama_lengkap','$level','$nama_gambar')") or die (mysql_error());
           ?>

         <script type="text/javascript">
          alert(" Sukses ! Data berhasil disimpan!")
         
         window.location.href="?page=admin&action=user";     
         </script>
         <?php

       } else{


        ?>
         <script type="text/javascript">
                  
         alert("Oops...", "gambar gagal disimpan  !!:(", "error");
          </script>         

        <?php
       }

        }

        }
      

     ?>  
  </div>
</div>

</div>
</div>
</div>
</div>

