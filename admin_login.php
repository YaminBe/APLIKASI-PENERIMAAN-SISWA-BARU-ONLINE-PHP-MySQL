<?php 
@session_start();
include 'inc/koneksi.php';
if (@$_SESSION['admin'] ) {
header("location:Hal_admin.php");
}else if (@$_SESSION['kepsek']) {
 header("location: Hal_kepsek.php");
} else{
?>
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
  body{
    background-color:#40c4ff;
  }
    .footer-copyright{
      background-color: #3e2723;
    }
  </style>

</head>
<body>
<div class="container">
    <br>
  <br>
  <br>
   <div class="row">
        <div class="col s12 m12">
          <div class="card brown darken-4">
            <div class="card-content white-text">
              <span class="card-title"><center> <b style="color: #03a9f4;">PSB</b >Online <br>
              SMAN IV KOTO</center></span>

            </div>
            <div class="card-action">

              <div class="card white-grey darken-1">
            <div class="card-content black-text-text">
              <span class="card-title"><b>Login Admin / Kepala Sekolah</b></span> <br>
                <div class="row">
                  <div  class="col s12">
                    
                  <form class="col s12" action="" method="post">
                    <div class="row">
                    <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input name="user" type="text" class="validate">
                    <label for="icon_prefix">Username</label>
                    </div>
                    <div class="input-field col s12">
                    <i class="material-icons prefix">lock_outline</i>
                    <input name="pass" type="password" class="validate">
                    <label for="icon_telephone">Password</label>
                    </div>
                    </div>
                <input type="submit" name="login1" value="Login" class="waves-effect waves-light btn">
                <!-- koding login-->
<?php
$user = @$_POST['user'];
$pass = @$_POST['pass'];
$login1 = @$_POST['login1'];

if(isset($_POST['login1'])) {

if ($user == "" || $pass == "") {


?> <script type="text/javascript"> 
alert("username/password ga boleh kosong")</script>
<?php

} else{
$sql = mysql_query("SELECT * FROM tb_user WHERE username = '$user' AND password = md5('$pass') ") or die(mysql_error());
$data = mysql_fetch_array($sql);
$cek = mysql_num_rows($sql);
if ($cek >= 1) {
if ($data['level'] == "admin") {
@$_SESSION['admin'] = $data['kode_user'];
header("location:Hal_admin.php");
}elseif ($data['level'] == "kepsek") {
@$_SESSION['kepsek'] = $data['kode_user'];
header("location:Hal_kepsek.php");

}else{
echo "gagal";

}
}

}
}

?>
             <a href="index.php" class="waves-effect waves-light btn red"><i class="material-icons left">undo</i>Back</a>

                  </form>
                            <!-- koding login-->

 </div>


                </div>
            
              
            </div>
          </div>

           
            </div>
          </div>
        </div>
      </div>
</div>

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
    $('.materialboxed').materialbox();
  });
  </script>

  </body>
</html>
<?php 
}
 ?>
