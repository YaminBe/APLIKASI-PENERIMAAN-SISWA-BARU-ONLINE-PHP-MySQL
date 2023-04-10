
	<div class="row">
			<div class="col-lg-12">
				<!-- alert-->
<div class="alert bg-info" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong><em class="fa fa-lg fa-success">&nbsp;</em> Selamat Datang ! </strong> <?php echo $data ['nama_lengkap']; ?> &nbsp;
<a href="?page=siswa&action=update_formulir">
<button class="btn btn-default"> <span class="glyphicon glyphicon-hand-right"></span> Silahkan Lengakapi Data Disini !! </button></a>
</div>
<!-- end-alert--> 
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
			<a href="?page=siswa&action=update_formulir">
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="glyphicon glyphicon-edit" style="font-size: 63px; color: dodgerblue;"></em>
							<div class="medium"><b>Lengkapi Formulir</b></div>				
						</div>
					</div>
				</div>
			</a>
				<a href="?page=siswa&action=detail">
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="glyphicon glyphicon-print" style="font-size: 63px;"></em>
							<div class="medium"><b>Cetak Formulir</b></div>

						</div>
					</div>
				</div>
				</a>
				<a href="?page=siswa&action=status">
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="glyphicon glyphicon-check" style="font-size: 63px; color: #e65100;"></em>
							<div class="medium"><b>Status Penerimaan</b></div>
						</div>
					</div>
				</div>
				</a>
				<a href="?page=siswa&action=panduan">
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="glyphicon glyphicon-book" style="font-size: 63px; color: #aa00ff;"></em>
							<div class="medium"><b>Panduan</b></div>
						</div>
					</div>
				</div>
				</a>
			</div><!--/.row-->