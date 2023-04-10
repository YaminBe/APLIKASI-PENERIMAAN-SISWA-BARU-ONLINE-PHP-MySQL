<?php 
@session_start();
include 'inc/koneksi.php';
ob_start();
if (@$_SESSION['kepsek']) {
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Halaman Admin PSB SMA IV Koto</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
	
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
if (@$_SESSION['kepsek']) {
$sesi = @$_SESSION['kepsek'];
}

$sql_formulir = mysql_query("select * from tb_user where kode_user = '$sesi'") or die(mysql_error());
$data = mysql_fetch_array($sql_formulir);
?>
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span style="font-size: 30px;"><b>PSB</b></span> <b> Online</b> SMAN I IV KOTO</a>
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
					<img src="assets/gambar/user/<?php echo $data ['gambar']; ?> " class="img-responsive" alt="" style="border: 3px solid silver; border-radius: 8%;" width="60" height="60" >
					<br>
					<b style="color: dodgerblue;"><?php echo date (" d F Y") ?></b>

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
				<img src="assets/gambar/user/<?php echo $data ['gambar']; ?>" class="img-responsive" alt="" style="
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
			<li  class="active"><a href="Hal_kepsek.php"><em class="fa fa-home" style="font-size: 23px;">&nbsp;</em> Home</a></li>
			<li><a href="?page=admin&action=profil"><em class="glyphicon glyphicon-education" style="font-size: 23px;"> </em> Profil Sekolah</a></li>
			<!--<li><a href="?page=admin&action=formulir"><em class="fa fa-edit" style="font-size: 23px;">&nbsp;</em> Formulir Pendaftar</a></li>-->
			<li><a href="?page=admin&action=penentuan"><em class="glyphicon glyphicon-check" style="font-size: 23px;"></em> Penentuan</a></li>
			<li><a href="?page=admin&action=lihat"><em class="fa fa-database" style="font-size: 23px;">&nbsp;</em> Data Pendaftar</a></li>	
			
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-print" style="font-size: 23px;">&nbsp;</em> Laporan <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="?page=admin&action=all_laporan">
						<span class="glyphicon glyphicon-list-alt" style="font-size: 23px;">&nbsp;</span> Laporan PSB
					</a></li>				
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-bar-chart" style="font-size: 23px;">&nbsp;</em> Grafik <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="?page=admin&action=grafik">
						<span class="fa fa-pie-chart" style="font-size: 23px;">&nbsp;</span> Grafik Kelulusan
					</a></li>
					<li><a class="" href="?page=admin&action=grafik1">
						<span class="fa fa-line-chart" style="font-size: 23px;">&nbsp;</span> Grafik Gender
					</a></li>				
				</ul>
			</li>
			<!--<li><a href="?page=admin&action=user"><em class="fa fa-gear" style="font-size: 23px;">&nbsp;</em>Setting User</a></li>-->
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user"></em>
				</a></li>
				<li><b>PSB Online</b></li>
				<li><b style="color: dodgerblue;"><?php echo date (" d F Y") ?></b></li>
			</ol>
		</div><!--/.row-->
		<hr>
		
	
		<!--INI KONTEN-->

<?php 
$page = @$_GET['page'];
$action = @$_GET['action'];
if ($page=="admin") {
	if ($action=="") {
		include 'admin/formulir.php';
	}elseif ($action=="penentuan") {
		include 'admin/penentuan.php';
	}elseif ($action=="lihat") {
		include 'admin/data_pendaftar.php';
	}elseif ($action=="detail") {
		include 'admin/detail_formulir.php';
	}elseif ($action=="proses") {
		include 'admin/proses_penentuan.php';
	}elseif ($action=="hapus") {
		include 'admin/hapus.php';
	}elseif ($action=="user") {
		include 'admin/manage_user.php';
	}elseif ($action=="edituser") {
		include 'admin/edit_user.php';
	}elseif ($action=="deluser") {
		include 'admin/del_user.php';
	}elseif ($action=="all_laporan") {
		include 'Laporan/all_laporan.php';
	}elseif ($action=="formulir") {
		include 'admin/formulir.php';
	}elseif ($action=="editsiswa") {
		include 'admin/edit_formulir.php';
	}elseif ($action=="profil") {
		include 'profil.php';
	}elseif ($action=="grafik") {
		include 'admin/grafik.php';
	}elseif ($action=="grafik1") {
		include 'admin/grafik1.php';
	}elseif ($action=="editadmin") {
		include 'admin/edit_user_admin.php';
	}elseif ($action=="deladmin") {
		include 'admin/del_admin.php';
	}

}elseif ($page=="") {
	include 'kepsek/Home_kepsek.php';
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
	
</body>
</html>





<?php 
}else{
	header("location:/lumino/index.php");
}
 ?>