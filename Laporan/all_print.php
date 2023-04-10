<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 24px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style3 {font-family: Arial, Helvetica, sans-serif}
.style7 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<table width="100%" align="center">
  <tr>
    <td><div align="right"><span class="style2"><img src="agam.png" width="137" height="103" /></span></div></td>
    <td colspan="18"><div align="center">
      <p class="style1">LAPORAN DATA PENDAFTARAN SISWA BARU </p>
      <p class="style2">SEKOLAH MENENGAH ATAS NEGERI (SMAN) I IV KOTO</p>
      <p class="style2"><hr align="center" size="5" color="#000000" /> 
      </p>
    </div></td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="89" colspan="19"><table width="100%" border="1" style="border-collapse: collapse;">
      <tr>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">No</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Kode</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">NISN</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Nama Siswa </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Gender</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">TTL</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Anak Ke </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Jml Saudara </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Agama</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Alamat</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Asal Sekolah </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Nilai STTB </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Matetematika</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">B.Inggris</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">B.Indonesia</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">IPA</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">IPS</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><span class="style3">Keterangan</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="#0099FF"><div align="center"><span class="style3">Foto</span></div></td>
        </tr>
        <?php 
        include '../inc/koneksi.php';
        $sql=mysql_query("SELECT * FROM tb_siswa") or die(mysql_error());
        $no=1;
        while ($data= mysql_fetch_array($sql)) {      

         ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['kode_siswa']; ?></td>
        <td><?php echo $data['nisn']; ?></td>
        <td><?php echo $data['nama_lengkap']; ?></td>
        <td><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['tempat']; ?>, <?php echo $data['tgl_lahir']; ?></td>
        <td><?php echo $data['anak_ke']; ?></td>
        <td><?php echo $data['jml_saudara']; ?></td>
        <td><?php echo $data['agama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['asal_sekolah']; ?></td>
        <td><?php echo $data['nilai_ijazah']; ?></td>
        <td><?php echo $data['nilai1']; ?></td>
        <td><?php echo $data['nilai2']; ?></td>
        <td><?php echo $data['nilai3']; ?></td>
        <td><?php echo $data['nilai4']; ?></td>
        <td><?php echo $data['nilai5']; ?></td>
        <td><?php echo $data['keterangan']; ?></td>
        <td><img src="../assets/gambar/user/<?php echo $data['foto']; ?>" width="58" height="37" /></td>
        </tr>
        <?php  } ?>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>
