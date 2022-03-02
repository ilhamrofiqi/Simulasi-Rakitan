<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="google-site-verification" content="ok_m9XmI1JV1hck8vU1WgzVIQuNIf8AIxtvtHVt1tnU" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="asset/img/tap-logo.png">

	<title>Simulasi Rakitan By OneIt</title>

	<!-- Bootstrap core CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<link href="asset/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="asset/css/style.css" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>

	<div class="info">
		<div class="container">
			<div>
				<p>CS - 0896-8475-2092 / 0858-4394-6757 (WhatsApp)</p>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom navbar-custom py-3 sticky-top" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="https://oneit-solution.com/">
				<img class="brand" src="asset/img/oneit.png" width="50" height="50" alt="oneit"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="https://oneit-solution.com/produk/">Produk <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Marketplace</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item"
								href="https://www.tokopedia.com/oneitsolution">Tokopedia</a>
							<a class="dropdown-item"
								href="https://shopee.co.id/oneitsolutionsby">Shopee</a>
							<a class="dropdown-item"
								href="https://www.lazada.co.id/shop/one-it">Lazada</a>
							<a class="dropdown-item"
								href="https://www.bukalapak.com/u/oneit_sby">Bukalapak</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link active-custom" href="https://simulasi.oneit-solution.com/">Simulasi
							Rakitan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://oneit-solution.com/toko-komputer-dan-rakit-pc-gaming/">Official Store</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.youtube.com/c/OneITSolution">Youtube</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--<div class="header">-->
	<!--	<div class="container">-->
	<!--		<div>-->
	<!--			<img src="asset/img/perbaikan.png" class="img-fluid" alt="Responsive image">-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->

	<div class="header">
		<div class="container">
			<div>
				<h3>Simulasi Rakitan</h3>
			</div>
		</div>
	</div>
	
	<div class="update-harga">
		<div class="container">
			<div>
				<?php
					require_once "asset/konek/konek.php";
					$tanggalupdate = mysqli_query($connect, "SELECT * FROM tanggalupdate");
					while($row=mysqli_fetch_array($tanggalupdate)) {
				?>
				<p>Update Harga: <?php echo $row['tanggal'];?></p>
				<?php
						}
						?>
			</div>
		</div>
	</div>	

	<div class="simulasi">
		<div class="container">

			<!-- Brand -->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Brand</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="" id="brand-dropdown">
						<option value="0">Pilih Brand</option>
						<?php
						require_once "asset/konek/konek.php";
						$brand = mysqli_query($connect, "SELECT * FROM brand");
						while($row =mysqli_fetch_array($brand)) {
						?>
						<option value="<?php echo $row['id'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name1" id="nex1" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<br>

			<!-- Socket -->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Socket</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="" id="socket-dropdown">
						<option value="0">Pilih Brand Dahulu</option>
					</select>
					<input name="name1" id="nex1" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<br>

			<!-- Prosessor 1-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Processor</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n1" id="s1"
						onchange="updateHargax(this,document.getElementById('q1'),document.getElementById('p1'),document.getElementById('nex1'))">
						<option value="0">Pilih Socket Dahulu</option>
					</select>
					<input name="name1" id="nex1" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty1" id="q1"
						onchange="updateHarga(this.value, document.getElementById('s1'),document.getElementById('p1'))">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p1" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- Mothreboard 2-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Motherboard</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n2" id="s2"
						onchange="updateHargax(this,document.getElementById('q2'),document.getElementById('p2'),document.getElementById('nex2'))"
						style="font-size: medium;">
						<option value="0">Pilih Socket Dahulu</option>
					</select>
					<input name="name2" id="nex2" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty2" id="q2"
						onchange="updateHarga(this.value, document.getElementById('s2'),document.getElementById('p2'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p2" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- Harddisk 3-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Harddisk</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n3" id="s3"
						onchange="updateHargax(this,document.getElementById('q3'),document.getElementById('p3'),document.getElementById('nex3'))">
						<option value="0">Pilih Harddisk</option>
						<?php
						require_once "asset/konek/konek.php";
						$harddisk = mysqli_query($connect, "SELECT * FROM harddisk");
						while($row=mysqli_fetch_array($harddisk)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name3" id="nex3" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty3" id="q3"
						onchange="updateHarga(this.value, document.getElementById('s3'),document.getElementById('p3'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p3" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- RAM 4-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">RAM</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n4" id="s4"
						onchange="updateHargax(this,document.getElementById('q4'),document.getElementById('p4'),document.getElementById('nex4'))">
						<option value="0">Pilih RAM</option>
						<?php
						require_once "asset/konek/konek.php";
						$ram = mysqli_query($connect, "SELECT * FROM ram");
						while($row=mysqli_fetch_array($ram)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name4" id="nex4" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty4" id="q4"
						onchange="updateHarga(this.value, document.getElementById('s4'),document.getElementById('p4'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p4" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- SSD 5-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">SSD</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n5" id="s5"
						onchange="updateHargax(this,document.getElementById('q5'),document.getElementById('p5'),document.getElementById('nex5'))">
						<option value="0">Pilih SSD</option>
						<?php
						require_once "asset/konek/konek.php";
						$ssd = mysqli_query($connect, "SELECT * FROM ssd");
						while($row=mysqli_fetch_array($ssd)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name5" id="nex5" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty5" id="q5"
						onchange="updateHarga(this.value, document.getElementById('s5'),document.getElementById('p5'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p5" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- VGA 6-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">VGA</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n6" id="s6"
						onchange="updateHargax(this,document.getElementById('q6'),document.getElementById('p6'),document.getElementById('nex6'))"
						style="font-size: medium;">
						<option value="0">Pilih VGA</option>
						<?php
						require_once "asset/konek/konek.php";
						$vga = mysqli_query($connect, "SELECT * FROM vga");
						while($row=mysqli_fetch_array($vga)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name6" id="nex6" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty6" id="q6"
						onchange="updateHarga(this.value, document.getElementById('s6'),document.getElementById('p6'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p6" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- PSU 7-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Power Supply
					</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n7" id="s7"
						onchange="updateHargax(this,document.getElementById('q7'),document.getElementById('p7'),document.getElementById('nex7'))"
						style="font-size: medium;">
						<option value="0">Pilih Power Supply</option>
						<?php
						require_once "asset/konek/konek.php";
						$psu = mysqli_query($connect, "SELECT * FROM psu");
						while($row=mysqli_fetch_array($psu)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name7" id="nex7" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty7" id="q7"
						onchange="updateHarga(this.value, document.getElementById('s7'),document.getElementById('p7'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p7" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- Casing 8-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Casing</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n8" id="s8"
						onchange="updateHargax(this,document.getElementById('q8'),document.getElementById('p8'),document.getElementById('nex8'))"
						style="font-size: medium;">
						<option value="0">Pilih Casing</option>
						<?php
						require_once "asset/konek/konek.php";
						$casing = mysqli_query($connect, "SELECT * FROM casing");
						while($row=mysqli_fetch_array($casing)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name8" id="nex8" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty8" id="q8"
						onchange="updateHarga(this.value, document.getElementById('s8'),document.getElementById('p8'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p8" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- Keyboard 9-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Keyboard</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n9" id="s9"
						onchange="updateHargax(this,document.getElementById('q9'),document.getElementById('p9'),document.getElementById('nex9'))"
						style="font-size: medium;">
						<option value="0">Pilih Keyboard</option>
						<?php
						require_once "asset/konek/konek.php";
						$keyboard = mysqli_query($connect, "SELECT * FROM keyboard");
						while($row=mysqli_fetch_array($keyboard)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name9" id="nex9" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty9" id="q9"
						onchange="updateHarga(this.value, document.getElementById('s9'),document.getElementById('p9'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p9" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- mouse 10-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Mouse</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n10" id="s10"
						onchange="updateHargax(this,document.getElementById('q10'),document.getElementById('p10'),document.getElementById('nex10'))"
						style="font-size: medium;">
						<option value="0">Pilih Mouse</option>
						<?php
						require_once "asset/konek/konek.php";
						$mouse = mysqli_query($connect, "SELECT * FROM mouse");
						while($row=mysqli_fetch_array($mouse)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name10" id="nex10" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty10" id="q10"
						onchange="updateHarga(this.value, document.getElementById('s10'),document.getElementById('p10'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p10" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- monitor 11-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Monitor</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n11" id="s11"
						onchange="updateHargax(this,document.getElementById('q11'),document.getElementById('p11'),document.getElementById('nex11'))"
						style="font-size: medium;">
						<option value="0">Pilih Monitor</option>
						<?php
						require_once "asset/konek/konek.php";
						$monitor = mysqli_query($connect, "SELECT * FROM monitor");
						while($row=mysqli_fetch_array($monitor)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name11" id="nex11" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty11" id="q11"
						onchange="updateHarga(this.value, document.getElementById('s11'),document.getElementById('p11'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p11" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- CPU Cooler 12-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">CPU Cooler</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n12" id="s12"
						onchange="updateHargax(this,document.getElementById('q12'),document.getElementById('p12'),document.getElementById('nex12'))"
						style="font-size: medium;">
						<option value="0">Pilih CPU Cooler</option>
						<?php
						require_once "asset/konek/konek.php";
						$cpucooler = mysqli_query($connect, "SELECT * FROM cpucooler");
						while($row=mysqli_fetch_array($cpucooler)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name12" id="nex12" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty12" id="q12"
						onchange="updateHarga(this.value, document.getElementById('s12'),document.getElementById('p12'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p12" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- Fan 13-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Fan</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n13" id="s13"
						onchange="updateHargax(this,document.getElementById('q13'),document.getElementById('p13'),document.getElementById('nex13'))"
						style="font-size: medium;">
						<option value="0">Pilih Fan</option>
						<?php
						require_once "asset/konek/konek.php";
						$coolerfan = mysqli_query($connect, "SELECT * FROM fan");
						while($row=mysqli_fetch_array($coolerfan)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name13" id="nex13" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty13" id="q13"
						onchange="updateHarga(this.value, document.getElementById('s13'),document.getElementById('p13'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p13" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- Ups 14-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Ups</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n14" id="s14"
						onchange="updateHargax(this,document.getElementById('q14'),document.getElementById('p14'),document.getElementById('nex14'))"
						style="font-size: medium;">
						<option value="0">Pilih Ups</option>
						<?php
						require_once "asset/konek/konek.php";
						$ups = mysqli_query($connect, "SELECT * FROM ups");
						while($row=mysqli_fetch_array($ups)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name14" id="nex14" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty14" id="q14"
						onchange="updateHarga(this.value, document.getElementById('s14'),document.getElementById('p14'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p14" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- Headset 15-->
			<div class="row">
				<div class="col-sm-2">
					<p class="text-left" style="font-size: medium; margin-top: 6px; font-style: normal;">Headset</p>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="n15" id="s15"
						onchange="updateHargax(this,document.getElementById('q15'),document.getElementById('p15'),document.getElementById('nex15'))"
						style="font-size: medium;">
						<option value="0">Pilih Headset</option>
						<?php
						require_once "asset/konek/konek.php";
						$headset = mysqli_query($connect, "SELECT * FROM headset");
						while($row=mysqli_fetch_array($headset)) {
							?>
						<option value="<?php echo $row['harga'];?>"><?php echo $row['nama'];?></option>
						<?php
						}
						?>
					</select>
					<input name="name15" id="nex15" type="hidden" value="0">
				</div>
				<div class="col-sm-1">
					<select class="form-control" name="qty15" id="q15"
						onchange="updateHarga(this.value, document.getElementById('s15'),document.getElementById('p15'))"
						style="font-size: medium;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
				</div>
				<div class="col-sm-2">
					<input id="p15" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

			<!-- Total-->
			<div class="row">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-7">
				</div>
				<div class="col-sm-1">
					<p class="text-left" style="font-size: medium; margin-top: 6px;">TOTAL</p>
					<input name="totalx" id="totalx" type="hidden" value="15">
				</div>
				<div class="col-sm-2">
					<input name="totali" id="totali" class="form-control" type="text" value="0"
						style="text-align:right; font-size: medium;" disabled="">
				</div>
			</div>
			<br>

		</div>
	</div>


	<div class="footer">
		<div class="container">
			<div>
				<p>Copyright 2021 - One IT Team</p>
			</div>
		</div>
	</div>


	<!-- Bootstrap core JavaScript -->
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>

	<!-- Javascript Dropdown -->
	<script>
		$(document).ready(function () {
			$('#brand-dropdown').on('change', function () {
				var brand_id = this.value;
				$.ajax({
					url: "code/socket.php",
					type: "POST",
					data: {
						brand_id: brand_id
					},
					cache: false,
					success: function (result) {
						$("#socket-dropdown").html(result);
						$('#s1').html('<option value="0">Pilih Socket Dahulu</option>');
						$('#s2').html('<option value="0">Pilih Socket Dahulu</option>');
					}
				});
			});
			$('#socket-dropdown').on('change', function () {
				var socket_id = this.value;
				$.ajax({
					url: "code/prosessor.php",
					type: "POST",
					data: {
						socket_id: socket_id
					},
					cache: false,
					success: function (result) {
						$("#s1").html(result);
					}
				});
			});
			$('#socket-dropdown').on('change', function () {
				var socket_id = this.value;
				$.ajax({
					url: "code/motherboard.php",
					type: "POST",
					data: {
						socket_id: socket_id
					},
					cache: false,
					success: function (result) {
						$("#s2").html(result);
					}
				});
			});
		});
	</script>

	<!-- JavaScript Rakitan -->
	<script type="text/javascript">
		function digit_grouping(nStr) {
			nStr += '';
			x = nStr.split(',');
			x1 = x[0];
			x2 = x.length > 1 ? '.' + x[1] : '';
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + '.' + '$2');
			}
			return x1 + x2;
		}

		function removeCommas(nStr) {
			return nStr.replace('.', '');
		}

		function updateHargax(obj, qty, prc, nm) {
			prc.value = qty.value * obj.value;
			nm.value = obj.options[obj.selectedIndex].text;
			var tot = document.getElementById('totalx').value;
			var totali = 0;
			for (i = 1; i <= tot; i++) {
				totali = totali + parseInt(removeCommas(document.getElementById('p' + i).value));
			}
			document.getElementById('totali').value = totali;
			document.getElementById('totali').value = digit_grouping(document.getElementById('totali').value);
		}

		function updateHarga(obj, qty, prc) {
			prc.value = qty.value * obj;
			var tot = document.getElementById('totalx').value;
			var totali = 0;
			for (i = 1; i <= tot; i++) {
				totali = totali + parseInt(removeCommas(document.getElementById('p' + i).value));
			}
			document.getElementById('totali').value = totali;
			document.getElementById('totali').value = digit_grouping(document.getElementById('totali').value);
		}

		function getData() {
			var i, j, k;
			var name, prc, qty;
			name = "";
			prc = "";
			qty = "";
			for (i = 1; i < 41; i++) {
				if (document.getElementById("s" + i).selectedIndex != 0) {
					name = name + "name[]=" + document.getElementById("s" + i).options[document.getElementById("s" + i)
						.selectedIndex].text + "&";
					qty = qty + "qty[]=" + document.getElementById("q" + i).value + "&";
					prc = prc + "prc[]=" + document.getElementById("s" + i).options[document.getElementById("s" + i)
						.selectedIndex].id + "&";
				}
				document.getElementById("linker").href = "print.php?" + name + qty + prc;
			}
		}
	</script>

</body>

</html>