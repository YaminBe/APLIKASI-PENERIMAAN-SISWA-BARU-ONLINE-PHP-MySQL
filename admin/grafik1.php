
<?php
include 'inc/koneksi.php';
$lk =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa WHERE jenis_kelamin='Laki-laki' "));
$pr =mysql_num_rows(mysql_query("SELECT * FROM tb_siswa WHERE jenis_kelamin='Perempuan' "));
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Language', 'Speakers (in millions)'],
          ['Laki-laki', <?php echo "".$lk." ";?>],
          ['Perempuan', <?php echo "".$pr." ";?>]
        ]);

      var options = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'Grafik Berdasarkan Jenis Kelamin',
        pieStartAngle: 100,
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      <div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-heading">
            <span class="fa fa-line-chart" style="font-size: 23px;"></span>
            <b>Grafik Berdasarkan Gender</b>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
          </div>

              <div class="panel-body">
            <div class="canvas-wrapper">
   <div id="piechart" style="width: 900px; height: 500px;"></div>
          </div>
          </div>
       
    </div>
  </div>
</div>
  </body>
</html>