
<?php
include 'inc/koneksi.php';
$sql = mysql_query("SELECT *FROM tb_siswa ORDER BY kode_siswa DESC LIMIT 1") or die(mysql_error());
$data = mysql_fetch_array($sql);

?>
<i class="close material-icons">school</i> 
 <center><div class="chip"  style="font-size: 22px;"><b style="color: #03a9f4;">Selamat !!</b> Akun Anda Telah Terdaftar Sebagai Calon Siswa !!<i class="close material-icons">close</i> </div></center>
<div class="row">
        <div class="col s12 m12">
          <div class="card">
            <div class="card-content black-text">
              <span class="card-title">
               
                  
              </span>
            
<b>Berikut Adalah Username dan Password Anda</b>
<table class="centered">
<tr>

    <th>
        <div class="chip" style="font-size: 15px;"><b>Username</b> : <b style="color: red;"><?php echo $data ['username']; ?></b><i class="close material-icons">close</i> </div>
    </th>
</tr>
    <tr>
    <th>
      <div class="chip" style="font-size: 15px;"><b>Password</b> : <b style="color: red;"> <?php echo $data ['pass']; ?></b><i class="close material-icons">close</i> </div>
      
    </th>
</tr>
</table>
<center><a target="_blank" href="login1.php" class="btn waves-effect waves-light blue lighten-2 pulse"><i class="material-icons right">lock_open</i>Login Disini</a></center>

            </div>
         
          </div>
        </div>
      </div>
