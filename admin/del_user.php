<?php 
include 'inc/koneksi.php';
$kdsis=$_GET['kdsis'];
mysql_query("delete from tb_siswa where kode_siswa='$kdsis' ") or die(mysql_error());
 ?>
 <script type="text/javascript">
 	alert("Data Telah Terhapus !!");
 	window.location.href="?page=admin&action=user";
 </script>