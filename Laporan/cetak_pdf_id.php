<?php
error_reporting(0);
$nama_dokumen='FORMULIR PENDAFTARAN'; //Beri nama file PDF hasil.
define('mpdf60/');//lokasi folder mpdf
require_once("mpdf60/mpdf.php");
$mpdf=new mPDF('utf-8', 'A4-P'); // PDF mau L lanscape P potrait

$mpdf->setFooter('{PAGENO}');// memberikan footer nomor halaman

ob_start();
?>


		
<?php
include '../inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysql_query("select * from tb_siswa where kode_siswa = '$kdsis'") or die(mysql_error());
$data = mysql_fetch_array($sql);
?>

	<div class="col-md-12">
<div class="panel panel-default">
	<TABLE WIDTH="100%">
    <TR>
    <TD ALIGN="CENTER" WIDTH="20%"><IMG SRC="../Laporan/agam.png" WIDTH="100" height="40"></TD>

    <TD ALIGN="CENTER" WIDTH="60%"><FONT SIZE="5">
    	PEMERINTAH KABUPATEN AGAM<BR>
                 DINAS PENDIDIKAN, PEMUDA DAN OLAHRAGA<BR>
                 FORMULIR PENDAFTARAN SISWA BARU<BR>
    <FONT SIZE="6"><B>SMA NEGERI 1 IV KOTO<BR>
    <FONT SIZE="4"><I>JL. Lintas Bukittinggi-Maninjau Tlp. 0232-871594</FONT>
    </TD>
    <TD ALIGN="CENTER" WIDTH="20%"><IMG SRC="SMANSA.JPG" WIDTH="50%"></TD>
    </TR>
    </TABLE>
<hr style="border: 2px solid;">
														
						

					
					<div class="panel-body">
						<center>
							<img src="../assets/gambar/user/<?php echo $data ['foto']; ?>" alt="..." class="img-thumbnail" width="100" height="40" style="border: 3px solid silver; border-radius: 8%;">
						</center>
<table class="table table-striped">
	<thead>
		<tr style="color: dodgerblue;">
			<th>DATA SISWA</th>
			<th></th>
		
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Kode Siswa</td>
			<td><?php echo $data['kode_siswa']; ?></td>	
		</tr>
			<tr>
			<td>NISN</td>
			<td><?php echo $data['nisn']; ?></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td><?php echo $data['nama_lengkap']; ?></td>
		</tr>
			<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
		</tr>
			<tr>
			<td>Tempat,Tanggal Lahir</td>
			<td><?php echo $data['tempat']; ?>,<?php echo $data['tgl_lahir']; ?></td>
		</tr>
			<tr>
			<td>Anaka ke</td>
			<td><?php echo $data['anak_ke']; ?></td>
		</tr>
			<tr>
			<td>Jumlah Saudara</td>
			<td><?php echo $data['jml_saudara']; ?></td>
		</tr>
		</tr>
			<tr>
			<td>Agama</td>
			<td><?php echo $data['agama']; ?></td>
		</tr>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $data['alamat']; ?></td>
					
		</tr>
	</tbody>
	<thead>
		<tr style="color: dodgerblue;">
			<th>MASUK SEKOLAH/MADRASAH</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Asal Sekolah</td>
			<td><?php echo $data['asal_sekolah']; ?></td>
		</tr>
		<tr>
			<td>Nilai STTB/Ijazah</td>
			<td><?php echo $data['nilai_ijazah']; ?></td>
					
		</tr>
	</tbody>
	<thead>
		<tr style="color: dodgerblue;">
			<th>NILAI UJIAN AKHIR NASIONAL SLTP</th>
			<th></th>
		
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Matematika</td>
			<td><?php echo $data['nilai1']; ?></td>					
		</tr>
			<tr>
			<td>Bahasa Inggris</td>
			<td><?php echo $data['nilai2']; ?></td>					
		</tr>
			<tr>
			<td>Bahasa Indonesia</td>
			<td><?php echo $data['nilai3']; ?></td>					
		</tr>
			<tr>
			<td>Ilmu Pengetahuan Alam</td>
			<td><?php echo $data['nilai4']; ?></td>					
		</tr>
			<tr>
			<td>Ilmu Pengetahuan Sosial</td>
			<td><?php echo $data['nilai5']; ?></td>				
		</tr>
	</tbody>
		<thead>
		<tr style="color: dodgerblue;">
			<th>STATUS PENERIMAAN</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Status</td>
			<td><b style="color: dodgerblue;"><?php echo $data['keterangan']; ?></b></td>					
		</tr>
		<tr>
			<td>Waktu Penerimaan</td>
			<td><b> <?php echo date (" d F Y") ?></b></td>					
		</tr>
			<tr>
			<td>NB</td>
			<td><b style="color: red;">Perhatian !!</b> Mohon Bawa Kartu ini keteika Pendaftaran Ulang ke sekolah !!</td>					
		</tr>
	</tbody>

</table>

					</div>
				</div>
			</div>



<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>
