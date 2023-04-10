

<?php
include 'inc/koneksi.php';
$kdjab = @$_GET['kdjab'];
mysql_query("delete from tb_agama where kode_agama = '$kdjab'") or die(mysql_error());
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=agama";       
 </script>


