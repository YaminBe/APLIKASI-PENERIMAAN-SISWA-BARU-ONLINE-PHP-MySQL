 <!-- Content-->
            <div class="card-content black-text">
              <span class="card-title"><i class="material-icons prefix">mode_edit</i> <h5>Pendaftaran Calon Siswa</h5></span>
               <ul class="collection"></ul>
                <div class="card-panel"> 
                <?php 
include'inc/koneksi.php';
$carikode = mysql_query("select max(kode_siswa) from tb_siswa") or die(mysql_error());
$datakode = mysql_fetch_array($carikode);
if ($datakode) {
$nilaikode = substr($datakode[0], 1);
$kode = (int) $nilaikode;
$kode = $kode + 1;
$hasilkode= "S" .str_pad($kode, 3, "0", STR_PAD_LEFT);
} else{
$hasilkode = "S001";
}
?>                 
                  <form action="" method="post" enctype="multipart/form-data" class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">label_outline</i>
                        <input name="kode_siswa" value="<?php echo "$hasilkode";?>" id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Kode Siswa</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">person_pin</i>
                        <input name="nama_lengkap" id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Nama Lengkap</label>
                      </div>                  
                       <div class="input-field col s6">
                        <i class="material-icons prefix">perm_identity</i>
                        <input name="username" id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Username</label>
                      </div>
                       <div class="input-field col s6">
                        <i class="material-icons prefix">lock_outline</i>
                        <input name="password" id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Password</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">lock_outline</i>
                        <input name="pass" id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Ulangi Password</label>
                      </div>
                      <div class="input-field col s12">
                        <i class="material-icons prefix">add_location</i>
                        <input name="alamat" id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Alamat</label>
                      </div>
                      <input type="file" name="foto">
                       <!-- <div class="file-field input-field col s12">
                        <div class="waves-effect brown darken-3 waves-light btn-large">
                        <span>Foto</span>
                        <input name="foto" type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                        	harus dids
                        </div>
                        </div> -->
                         <div class="input-field col s12">
                         	<input name="simpan" type="submit" value="SIMPAN" class="btn waves-effect light-blue waves-light">

                          <button name="simpan" class="btn waves-effect light-blue waves-light" type="submit" name="action">Daftar
                          <i class="material-icons right">create</i>
                          </button>
                          <button class="btn waves-effect red accent-3 waves-light" type="reset" name="action">Reset
                          <i class="material-icons right">loop</i>
                          </button>
                      </div>

                    </div>                    
                  </form>
        <?php
      $kode_siswa = @$_POST['kode_siswa'];
        $username = @$_POST['username'];      
      $password=md5(@$_POST['password']);
      $pass = @$_POST['pass'];
      $nama_lengkap = @$_POST['nama_lengkap'];
      $alamat = @$_POST['alamat'];
      $siswa = @$_POST['siswa'];
      $sedang_diproses = @$_POST['sedang_diproses'];
      $sumber = @$_FILES['foto']['tmp_name'];
      $target = '../assets/gambar/user/';
      $nama_gambar = @$_FILES['foto']['name'];


      $simpan_data = @$_POST['simpan']; 

      if ($simpan_data) {

        if ($kode_siswa == "" || $username == "" || $password == "" || $pass == "" || $nama_lengkap == "" || $alamat== "" || $siswa == "" || $nama_gambar==""){
                   ?>

                   <script type="text/javascript">
                  
         alert("Gagal Menyimpan...", "Inputan harus diisi, silahkan Lengkapi lagi !!:(", "error");
                   </script>
                   <?php
           
       } else{


        $pindah = move_uploaded_file($sumber, $target.$nama_gambar);

        if ($pindah) {
          mysql_query("insert into tb_siswa values ('$kode_siswa','$username','$password','$pass','$nama_lengkap','','','','','','$alamat','','','','','','','','','','$siswa','$nama_gambar')") or die (mysql_error());
           ?>

         <script type="text/javascript">
          alert(" Sukses !", "Data berhasil disimpan!", "success");     
         </script>
         <?php

       } else{


        ?>
         <script type="text/javascript">
                  
         alert("Oops...", "gambar gagal disimpan  !!:(", "error");
          </script>         

        <?php
       }

        }

        }
      

     ?>
       

                </div>
            </div>
            <!--END Content-->