<?php 
@session_start();
include 'inc/koneksi.php';
ob_start();
if (@$_SESSION['siswa']) {
 ?>
 <!-- HTML-->
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Halaman Siswa PSB SMAN 1 IV Koto</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
	<style type="text/css">
		.navbar navbar-custom navbar-fixed-top{
			background-color:#3e2723;
		}
	</style>
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color:#3e2723;">
		    <?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysql_query("select * from tb_siswa where kode_siswa = '$sesi'") or die(mysql_error());
$data = mysql_fetch_array($sql_formulir);
?>
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span style="font-size: 30px;">PSB</span> <b> Online</b> SMAN I IV KOTO</a>
				<ul class="nav navbar-top-links navbar-right">	
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-user"></em>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div>
									<b><?php echo $data ['nama_lengkap']; ?></b>
								</div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div>
					<img src="assets/gambar/user/<?php echo $data ['foto']; ?> " class="img-responsive" alt="" style="border: 3px solid silver; border-radius: 8%;" width="60" height="60" >
					<br>
					<b><?php echo date (" d F Y") ?></b>

								</div>
							</a></li>
							<li class="divider"></li>
							<li><a href="inc/logout.php">
								<div><em class="fa fa-power-off" style="font-size: 20px;"></em> <b>Logout</b>
								</div>
							</a></li>
						</ul>
					</li>
				</ul>				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="assets/gambar/user/<?php echo $data ['foto']; ?>" class="img-responsive" alt="" style="
                    border: 3px solid dodgerblue;
                    border-radius: 100%;">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $data ['nama_lengkap']; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span><?php echo $data ['level']; ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li  class="active"><a href="Hal_siswa.php"><em class="fa fa-home" style="font-size: 23px;">&nbsp;</em> Home</a></li>
			<li><a href="?page=siswa&action=profil"><em class="glyphicon glyphicon-education" style="font-size: 23px;"></em> Profil Sekolah</a></li>		
			<!--<li><a href="?page=siswa"><em class="fa fa-edit">&nbsp;</em> Lengkapi Formulir</a></li>-->
			<li><a href="?page=siswa&action=update_formulir"><em class="fa fa-edit" style="font-size: 23px;">&nbsp;</em>Lengkapi Formulir</a></li>
		
			<li><a href="?page=siswa&action=status"><em class="glyphicon glyphicon-check" style="font-size: 23px;"></em> Penerimaan</a></li>
				<li><a href="?page=siswa&action=detail"><em class="fa fa-print" style="font-size: 23px;">&nbsp;</em> Cetak Formulir</a></li>
			<li><a href="?page=siswa&action=view_data"><em class="fa fa-database" style="font-size: 23px;">&nbsp;</em> Data Pendaftar</a></li>
			
				<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-bar-chart" style="font-size: 23px;">&nbsp;</em> Grafik <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="?page=siswa&action=grafik">
						<span class="fa fa-pie-chart" style="font-size: 23px;">&nbsp;</span> Grafik Kelulusan
					</a></li>
					<li><a class="" href="?page=siswa&action=grafik1">
						<span class="fa fa-line-chart" style="font-size: 23px;">&nbsp;</span> Grafik Gender
					</a></li>				
				</ul>
			</li>	
			<li><a href="?page=siswa&action=panduan"><em class="fa fa-book" style="font-size: 23px;">&nbsp;</em> Panduan</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user"></em>
				</a></li>
				<li><b>PSB Online</b></li>
				<li><b style="color: dodgerblue;"> <?php echo date (" d F Y") ?></b></li>
			</ol>
		</div><!--/.row-->
		<hr>
		
	
		<!--INI KONTEN-->

<?php 
$page = @$_GET['page'];
$action = @$_GET['action'];
if ($page=="siswa") {
	if ($action=="") {
		include 'siswa/formulir.php';
	}elseif ($action=="update_formulir") {
		include 'siswa/update_formulir.php';
	}elseif ($action=="detail") {
		include 'siswa/detail_formulir.php';
	}elseif ($action=="view_data") {
		include 'siswa/data_pendaftar.php';
	}elseif ($action=="status") {
		include 'siswa/status_penerimaan.php';
	}elseif ($action=="panduan") {
		include 'siswa/panduan.php';
	}elseif ($action=="profil") {
		include 'profil.php';
	}elseif ($action=="grafik") {
		include 'admin/grafik.php';
	}elseif ($action=="grafik1") {
		include 'admin/grafik1.php';
	}

}elseif ($page=="") {
	include 'siswa/Home_siswa.php';
	# code...
}else{
	echo "404 !! Notfonud";
}
?>










		
	</div>	<!--/.main-->
	  

   <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chart.min.js"></script>
	<script src="assets/js/chart-data.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/custom.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('#data').DataTable();
	});
</script>
	<script type="text/javascript">
		$('#myAlert').on('closed.bs.alert', function () {
  // do something…
})
	</script>
	
</body>
</html>

 <!--END HTML-->



<?php 
}else{
	header("location:/lumino/index.php");
}
 ?>
