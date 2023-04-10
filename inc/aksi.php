<?php
$kode_siswa = @$_POST['kode_siswa'];
$username = @$_POST['username'];
$password=md5(@$_POST['password']);
$pass = @$_POST['pass'];
$nama_lengkap = @$_POST['nama_lengkap'];
$alamat = @$_POST['alamat'];
$siswa = @$_POST['siswa'];
$sumber = @$_FILES['foto']['tmp_name'];
$target = 'assets/gambar/user/';
$nama_gambar = @$_FILES['gambar']['name'];
$simpan_data = @$_POST['foto']; 

if ($simpan_data) {

if ($kode_siswa=="" || $username=="" || $password=="" || $pass=="" ||$nama_lengkap=="" || $alamat=="" || $siswa=="" || $nama_gambar==""){
?>

<script type="text/javascript">

alert("Oops...Inputan tidak boleh kosong !!");
</script>
<?php

} else{


$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if ($pindah) {

	mysql_query("insert into tb_siswa values ('$kode_siswa','$username','$password','$pass','$nama_lengkap','','','','','','$alamat','','','','','','','','','','$siswa','$nama_gambar')") or die (mysql_error());
?>

<script type="text/javascript">
alert(" Sukses ! Data berhasil disimpan!")

window.location.href="?page=index";     
</script>
<?php

} else{


?>
<script type="text/javascript">

alert("Oops...gambar gagal disimpan  !!");
</script>         

<?php
}

}

}


?> 