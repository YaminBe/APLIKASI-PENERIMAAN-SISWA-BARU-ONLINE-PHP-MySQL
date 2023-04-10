
<?php
include 'inc/koneksi.php';
$jml =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa"));
$lulus =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa WHERE keterangan='DITERIMA' "));
$tdlulus =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa WHERE keterangan='DITERIMA' "));
$cadangan =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa WHERE keterangan='TIDAK DITERIMA' "));
$cadangan =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa WHERE keterangan='CADANGAN' "));
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['JUMLAH CALON SISWA', <?php echo "".$jml." ";?>],
          ['DITERIMA', <?php echo "".$lulus." ";?>],
          ['TIDAK DITERIMA',<?php echo "".$tdlulus." ";?> ],
          ['CADANGAN',<?php echo "".$cadangan." ";?>]
        ]);

        var options = {
          title: 'Grafik Jumlah, Berdasarkan Kelulusan',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

  <div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-heading">
            <span class="fa fa-bar-chart" style="font-size: 23px;"></span>
            <b>Grafik Calon Siswa Baru SMA IV Koto</b>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
          </div>

              <div class="panel-body">
            <div class="canvas-wrapper">
              <div class="panel panel-primary" id="piechart_3d" style="height: 500px;"></div>

            </div>
          </div>
       
    </div>
  </div>
</div>
  </body>
</html>
