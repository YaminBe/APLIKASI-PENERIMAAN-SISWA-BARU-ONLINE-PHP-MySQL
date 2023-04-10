<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title> PSB Online SMAN I IV Koto</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="starter-template/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="starter-template/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
  <style type="text/css">
    .footer-copyright{
      background-color: #3e2723;
    }
  </style>

</head>
<body>
  <nav class="brown darken-4 lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><b style="color: #29b6f6;">PSB</b> <b>Online</b> <b style="font-size: 18px; font-family: FZYaoTi;">SMAN I IV Koto</b></a>


       <ul class="right hide-on-med-and-down">
        <li><a href="?page=index">Home <i class="material-icons left">home</i> </a></li>
        <li><a href="?page=daftar">Mendaftar <i class="material-icons left">border_color</i></a></li>
        <li><a href="?page=profil">Profil Sekolah <i class="material-icons left">school</i></a></li>
        <li><a href="?page=grafik">Grafik <i class="material-icons left">insert_chart</i></a></li>       
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login<i class="material-icons right">person</i></a></li>
         <li><a href="?page=lokasi">Lokasi</a></li>
        <!--<li><a href="?page=admin">Login Admin</a></li>
        <li><a href="?page=login">Login Siswa</a></li> -->
      </ul>
      <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Login</a></li>
  <li><a target="_blank" href="admin_login.php">Admin</a></li>
  <li class="divider"></li>
  <li><a target="_blank" href="login1.php">Siswa</a></li>
</ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="?page=index">Home</a></li>
        <li><a href="?page=daftar">Mendaftar</a></li>
        <li><a href="?page=profil">Profil Sekolah</a></li>
        <li><a href="?page=profil">Grafik</a></li>
        <li><a href="?page=admin">Login Admin</a></li>
        <li><a href="?page=login">Login Siswa</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<div class="container">
  <div class="section">

      <div class="valign-wrapper">
  <i class="material-icons">label_outline</i>/<b> <?php echo date (" d F Y") ?></b>  
</div>
<!--<a class="waves-effect brown darken-4 waves-light btn"><i class="material-icons left">collections_bookmark</i>Daftar</a>
<a class="waves-effect brown darken-4 waves-light btn"><i class="material-icons left">collections_bookmark</i>Petunjuk</a>
<a class="waves-effect brown darken-4 waves-light btn"><i class="material-icons left">collections_bookmark</i>Data Pendaftar</a>
<a class="waves-effect brown darken-4 waves-light btn"><i class="material-icons left">collections_bookmark</i>Data Pendaftar</a>-->
  



      <ul class="collection"></ul>
      <div class="card-panel z-depth-5"  style="min-height: 400px;">
        <?php 
          error_reporting(0);
        $page=@$_GET['page'];
        if (@$page=="index") {
          include 'Home.php';
          # code...
        }elseif ($page=="daftar") {
          include 'register.php';
        
        }elseif ($page=="admin") {
             include 'admin_login.php';
        }elseif ($page=="aksi") {
             include 'inc/aksi.php';

        }elseif ($page=="login") {
             include 'siswa_login.php';             
        }elseif ($page=="lihat") {
             include 'siswa/data_pendaftar.php';             
        }elseif ($page=="profil") {
             include 'profil.php';             
        }elseif ($page=="grafik") {
             include 'admin/grafik.php';             
        }elseif ($page=="petunjuk") {
             include 'siswa/panduan.php';             
        }elseif ($page=="lokasi") {
             include 'lokasi.php';             
        }elseif ($page=="") {
          include 'Home.php';
          # code...
        }else{
          echo "404 ! ERROR Todak ditemukan !!";
        }

         ?>
           

          </div>


        



        
      
  </div>
</div>

  

  <footer class="page-footer light-blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">PSB Online</h5>
          <p class="grey-text text-lighten-4">
          
            Sistem Informasi Penerimaan Siswa Baru SMAN 1 IV Koto Merupakan sistem informasi berbasis web yang dibangun menggunakan Bahasa Pemrograman PHP database MySQL. Sedangkan Front End dari Sistem Informasi ini menggunakan Framework Materializecss dan Bootstrap Agar tampilan terlihat Menarik <br>

          </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Manfaat</h5>
          <ul>
            <li><a class="white-text" href="#!">
               Dengan adanya Sistem Informasi PSB Online di SMAN 1 IV Koto diharapkan dapat membantu Calon siswa untuk melakukan Pendaftaran Tanpa harus datang ke sekolah untuk melakukan Pendaftaran, dan dapat menghemat biaya dan Waktu.
            </a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">SMAN 1 IV KOTO</h5>
          <ul>
            <li><a class="white-text" href="#!">
              merupakan salah satu sekolah yang terletak di Kabupaten Agam, tentu saja sekolah ini tidak akan kalah dengan sekolah-sekolah lainnya yang mempunyai akreditasi lebih baik.
              
            </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright" style="background-color: #3e2723;">
      <div class="container">
      <b>Desain by </b>  Deni Khairani <a class="orange-text text-lighten-3" href="">|| PSB Online SMAN 1 IV KOTO</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="starter-template/js/materialize.js"></script>
  <script src="starter-template/js/init.js"></script>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
  <script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#data').DataTable();
  });
</script>
  <script type="text/javascript">
     $(document).ready(function(){
      $('.carousel').carousel();
    });
  </script>

  </body>
</html>
