<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Formulir Pendaftaran.xls");?>

<table width="100%" align="center">
    <center>
        <h3>LAPORAN DATA PENDAFTARAN SISWA BARU <br>
            SMAN I IV KOTO
        </h3>
    </center>

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
        </tr>
        <?php  } ?>
    </table></td>
  </tr>
</table>

