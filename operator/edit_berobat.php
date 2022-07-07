<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin RSUD Curup</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	



</head>

<body>
	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"><span>RSUD Curup</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Admin
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
									<span>Account Settings</span>
								</li>
								<!-- <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li> -->
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
	<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Data Pasien Terdaftar</span></a></li>	
						<li><a href="data_pasien_berobat.php"><i class="icon-list-alt"></i><span class="hidden-tablet">
							Data Pasien Berobat
						</span></a></li>
					<!-- 
						<li><a href="table.html"><i class="icon-book"></i><span class="hidden-tablet"> Buku</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Perpustakaan</span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Data Peminjaman</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Peminjaman</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Pengembalian</span></a></li>
								<li><a class="submenu" href="submenu4.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Rekap</span></a></li>
							</ul>	
						</li> -->
						<!-- <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">


				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="index.php">Home</a> 
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Data Pasien Berobat</a>
						<i class="icon-angle-right"></i>
					</li>
					<li>
						
						<a href="#"> Edit Data Pasien Berobat</a>
					</li>
				</ul>


				<!-- KONTEN DISINI !!! -->

				
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							
							<?php
							require "connect.php";
							$id_pasienEdit = $_GET['id'];
							//$tampilEdit="SELECT * FROM buku WHERE id_buku =".$id_bukuEdit;
							$tampilEdit= "SELECT *
							FROM pasien
							LEFT JOIN berobat ON pasien.id = berobat.id
							WHERE no=".$id_pasienEdit;
							$queryEdit=mysqli_query($link,$tampilEdit);
							$dataEdit = mysqli_fetch_array($queryEdit);
							?>   

							<!--FORM START -->
							<form class="form-horizontal" action=<?php echo "proses_edit_berobat.php?id=".$_GET['id'] ?> method="POST">
								<fieldset>
									

									<div class="control-group">
										<label class="control-label" for="date01">Tanggal Berobat</label>
										<div class="controls">
											<input name="tglberobat" type="text" class="input-xlarge datepicker" id="date01" 
											<?php
											echo "value='".$dataEdit["tanggal_berobat"]."'";
											?> >
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="selectError3">Poli</label>
										<div class="controls" >
											<select name="poli" id="selectError3">

												<?php
												echo "<option value=\"".$dataEdit["poli"]."\"  selected>".$dataEdit["poli"]."</option>";
												?> >

											

												<option value="umum">Poli Umum</option>
												<option value="tht">Poli THT</option>
												<option value="penyakit dalam">Poli Penyakit Dalam</option>
												<option value="syaraf">Poli Syaraf</option>
												<option value="anak">Poli Anak</option>
												<option value="kebidanan">Poli Kebidanan</option>
												<option value="psikiatri">Poli Psikiatri</option>
												<option value="mata">Poli Mata</option>
												<option value="gigi">Poli Gigi</option>
												<option value="kulitdankelamin">Poli Penyakit Kulit & Kelamin</option>
												<option value="jiwa">Poli Penyakit Jiwa</option>

											</select>	
										</select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="selectError3">Metode Pembayaran</label>
									<div class="controls" >
										<select name="metode_pembayaran" id="selectError3">

											<?php
											echo "<option value=\"".$dataEdit["metode_pembayaran"]."\" selected>".$dataEdit["metode_pembayaran"]."</option>";
											?> >

											<option value="umum">Pembayaran Umum</option>
											<optgroup label="BPJS">
												<option value="askes">ASKES </option>
												<option value="kis">KIS</option>
												<option value="jamkesda">JAMKESDA</option>
												<option value="jamkesmas">JAMKESMAS</option>
												<option value="jampersal">JASMPERSAL</option>

											</select>	
										</select>
									</div>
								</div>
								<!----------------->


									<!-- <div class="control-group">
										<label class="control-label">Uneditable input</label>
										<div class="controls">
											<span class="input-xlarge uneditable-input">Some value here</span>
										</div>
									</div> -->

									<div class="control-group">
										<label class="control-label" for="focusedInput">Nama Pasien</label>
										<div class="controls">
											<input name="namapasien" class="input-xlarge focused" id="focusedInput" type="text" <?php
											echo "value='".$dataEdit["nama_pasien"]."'";
											?> disabled>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="focusedInput">Tempat Lahir</label>
										<div class="controls">
											<input name="tempatlahir" class="input-xlarge focused" id="focusedInput" type="text" <?php
											echo "value='".$dataEdit["tempat_lahir"]."'";
											?> disabled>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="date01">Tanggal Lahir</label>
										<div class="controls">
											<input name="tgllahir" type="text" class="input-xlarge datepicker" id="date01" 
											<?php
											echo "value='".$dataEdit["tanggal_lahir"]."'";
											?> disabled>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="focusedInput">Umur</label>
										<div class="controls">
											<input name="umur"  class="input-xlarge focused" id="focusedInput" type="number" <?php
											echo "value='".$dataEdit["umur"]."'";
											?>disabled>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="focusedInput">Alamat</label>
										<div class="controls">
											<input name="alamat" class="input-xlarge focused" id="focusedInput" type="text" <?php
											echo "value='".$dataEdit["alamat"]."'";
											?> disabled>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="selectError3">Jenis Kelamin</label>
										<div class="controls" >
											<select name="jeniskelamin" id="selectError3">

												<?php

												if ($dataEdit["jenis_kelamin"] == "laki-laki"){
													echo "<option disabled selected>Laki-Laki</option>
													<option disabled >Perempuan</option>";
												}else{
													echo "<option disabled >Laki-Laki</option>
													<option disabled selected>Perempuan</option>";
												}
												
												?>
												
											</select>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="focusedInput">Telepon/Hp</label>
										<div class="controls">
											<input name="hp" class="input-xlarge focused" id="focusedInput" type="text" <?php
											echo "value='".$dataEdit["telepon"]."'";
											?> disabled>
										</div>
									</div>
									
									

									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button class="btn"> <a style="text-decoration: none;color:#FFFFFF" href="data_pasien_berobat.php">Cancel</a></button>
									</div>
								</fieldset>
							</form>
							
						</div>
					</div><!--/span-->
					
				</div><!--/row-->

				<!-- SELESAI KONTEN -->



			</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>

	<script src="js/jquery-ui-1.10.0.custom.min.js"></script>

	<script src="js/jquery.ui.touch-punch.js"></script>

	<script src="js/modernizr.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.cookie.js"></script>

	<script src='js/fullcalendar.min.js'></script>

	<script src='js/jquery.dataTables.min.js'></script>

	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>

	<script src="js/jquery.chosen.min.js"></script>

	<script src="js/jquery.uniform.min.js"></script>

	<script src="js/jquery.cleditor.min.js"></script>

	<script src="js/jquery.noty.js"></script>

	<script src="js/jquery.elfinder.min.js"></script>

	<script src="js/jquery.raty.min.js"></script>

	<script src="js/jquery.iphone.toggle.js"></script>

	<script src="js/jquery.uploadify-3.1.min.js"></script>

	<script src="js/jquery.gritter.min.js"></script>

	<script src="js/jquery.imagesloaded.js"></script>

	<script src="js/jquery.masonry.min.js"></script>

	<script src="js/jquery.knob.modified.js"></script>

	<script src="js/jquery.sparkline.min.js"></script>

	<script src="js/counter.js"></script>

	<script src="js/retina.js"></script>

	<script src="js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
