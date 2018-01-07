<!DOCTYPE html>
<html>
<head>
	<title>Pesan</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/new.css">
	<style type="text/css">
		overflow-x:hidden; 
	</style>

	<!-- <script type="text/javascript">
		function like() {
			var a = document.getElementById("tambah");
			a.innerHTML+="<div class="col-lg-7"> <input type="text" name="makanan" id="makanan" class="form-control input_with_text" placeholder="Masukkan Nama Makanan"> </div>";
		}
	</script> -->
</head>
<body>
<div id="home" class="w3ls-banner"> 
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
							<div class="w3layouts-banner-top">
								<div class="banner-dott">
									<div class="container">
										<div data-aos="fade-left" class="agileits-banner-info">
											<h3>Welcome to our</h3>
											<h3>Canteen</h3>
											<p>SMK TELKOM MALANG</p>
										</div>
									</div>	
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
<div class="row" id="pertama">
	<div class="row">
		<div class="col-lg-3">
			<div>
				<img src="<?php echo base_url();?>assets/images/food1.jpg">
				<div class="overlay">
    				<div class="newtext">Hello World</div>
  				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<img src="<?php echo base_url();?>assets/images/food1.jpg">
			<div class="overlay">
    				<div class="newtext">Hello World</div>
  				</div>
		</div>
		<div class="col-lg-3">
			<img src="<?php echo base_url();?>assets/images/food1.jpg">
			<div class="overlay">
    				<div class="newtext">Hello World</div>
  				</div>
		</div>
		<div class="col-lg-3">
			<img src="<?php echo base_url();?>assets/images/food1.jpg">
			<div class="overlay">
    				<div class="newtext">Hello World</div>
  				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div>
				<img src="<?php echo base_url();?>assets/images/food1.jpg">
				<div class="overlay">
    				<div class="newtext">Hello World</div>
  				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<img src="<?php echo base_url();?>assets/images/food1.jpg">
			<div class="overlay">
    				<div class="newtext">Hello World</div>
  				</div>
		</div>
		<div class="col-lg-3">
			<img src="<?php echo base_url();?>assets/images/food1.jpg">
			<div class="overlay">
    				<div class="newtext">Hello World</div>
  				</div>
		</div>
		<div class="col-lg-3">
			<img src="<?php echo base_url();?>assets/images/food1.jpg">
			<div class="overlay">
    				<div class="newtext">Hello World</div>
  				</div>
		</div>
	</div>
</div>
<div id="kedua">
	<div class="row">
		<div id="mesen">
	<div class="col-lg-6 col-xs-12">
		<div id="foto">
			<img id="gambar" src="<?php echo base_url();?>assets/images/food1.jpg">
		</div>
	</div>
		<div class="col-lg-6 col-xs-12" id="embo">
			<div id="kaka">
			<h1>
				PEMESANAN
			</h1>
				<div class="row">
				<div class="form-body">
				<div class="form-group">
					<label for="nama" class="control-label col-lg-4">Nama Pemesan</label>
					<div class="col-lg-7">
						<input type="text" name="nama" id="nama" class="form-control input_with_text" placeholder="Masukkan Nama Pemesan">
					</div>
				</div>
				<div class="form-group">
					<label for="makanan" class="control-label col-lg-4">Nama Makanan</label>
					<div class="col-lg-7">
						<input type="text" name="makanan" id="makanan" class="form-control input_with_text" placeholder="Masukkan Nama Makanan">
					</div>
					<div class="col-lg-1">
						<span class="fa fa-plus-square" aria-hidden="true" onclick="like()"></span>
					</div>
				</div>

				<!-- <div class="form-group" id="tambah">
					
					
				</div> -->

				<div class="form-group">
					<label for="kelas" class="control-label col-lg-4">Kelas</label>
					<div class="col-lg-7">
						<input type="text" name="kelas" id="kelas" class="form-control input_with_text" placeholder="Masukkan Kelas">
					</div>
				</div>
				<div class="form-group">
					<label for="kantin" class="control-label col-lg-4"> Kantin </label>
					<div class="col-lg-7">
						<select id="kantin" class="form-control">
							<option value=""> Pilih Kantin </option>
							<option value=""> ilham </option>
							<option value=""> Jalu </option>
							<option value=""> Prakosa </option>
							<option value=""> Ganteng </option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4"> Jumlah </label>
						<div class="col-lg-7">
							<input type="number" class="form-control">
						</div>
				</div>
				<div class="form-group">	
					<div class="col-lg-6">
						<button class="col-lg-6 btn btn-primary btn-md btn-block button" type="button" id="tombol"><b>Pesan</b></button>
					</div>
					<div class="col-lg-6">
						<button class="col-lg-6 btn btn-primary btn-md btn-block button" type="button" id="tombol"><b>Kembali</b></button>
					</div>
				</div>
			</div>
			</div>
			</div>
		</div>	
	</div>
</div>
</body>
</html>