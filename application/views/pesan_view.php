<!DOCTYPE html>
<html>
<head>
	<title>Pesan</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/new.css">
	<style type="text/css">
		overflow-x:hidden; 
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
	</style>

	<!-- <script type="text/javascript">
		function like() {
			var a = document.getElementById("tambah");
			a.innerHTML+="<div class="col-lg-7"> <input type="text" name="makanan" id="makanan" class="form-control input_with_text" placeholder="Masukkan Nama Makanan"> </div>";
		}
	</script> -->
</head>
<body>
<div id="home" class="w3ls-banner" > 
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
<div class="row" id="pertama" style="margin-left: 10px; margin-right: 10px;">
	<div class="row">
		<div class="col-lg-3">
			<div>
				<img src="<?php echo base_url();?>assets/images/food1.jpg">
				<div class="overlay">
    				<div class="newtext">Hello World</div>
    				<div class="newtext">adad</div>
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
					<form action="<?php echo base_url();?>index.php/pesan/tambah" method="post" enctype="multipart/form-data">
						<div class="form-body">
							<div class="form-group">
								<label for="kantin" class="control-label col-lg-4"> Nama Makanan </label>
									<div class="col-lg-7">
										<select id="maem" name="maem" class="form-control">
												<?php
													foreach ($menu as $o) {
														echo '<option value="'.$o->ID_MENU.'">'.$o->NAMA_MENU.'</option>';
													}
												?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label for="kantin" class="control-label col-lg-4"> Kantin </label>
									<div class="col-lg-7">
										<select id="kantin" name="kantin" class="form-control">
												<?php
													foreach ($kantin as $o) {
														echo '<option value="'.$o->ID_KANTIN.'">'.$o->NAMA_KANTIN.'</option>';
													}
												?>
										</select>
									</div>
							</div>
							<div class="form-group">
					<label class="control-label col-lg-4"> Jumlah </label>
						<div class="col-lg-7">
							<input type="number" name="meow" class="form-control">
						</div>
							</div>
							<div class="form-group">	
					<div class="col-lg-6">
						<input type="submit" name="submit" value="Tambah" class="col-lg-6 btn btn-primary btn-md btn-block button">
					</div>
					<div class="col-lg-6">
						<input type="reset" name="submit" value="Reset" class="col-lg-6 btn btn-primary btn-md btn-block button">
					</div>
							</div>
						</div>
					</form>
			</div>
			</div>
		</div>	
	</div>
</div>
</div>
<div id="profil">
	<div class="row">
		<div class="form-body" style="margin-left: 10px; margin-right:10px;">
			<div class="form-group">
				<div class="card col-lg-4">
						<div class="card" style="background-color:#d5e2de">
 						 <img src="<?php echo base_url();?>assets/images/jalu.jpg" alt="John" style="width:100%">
						  <h1>Orang ganteng</h1>
  							<p class="title" style="text-align:center">ganteng banget </p>
  							<p style="text-align:center">Harvard University</p>
 							 <div style="margin: 24px 0;" align="center">
  							  	<a href="#"><i class="fa fa-instagram"></i></a> 
 							    <a href="#"><i class="fa fa-facebook"></i></a>    
 								<a href="#"><i class="fa fa-github"></i></a> 
							 </div>
						<p><button>Contact</button></p>
							</div>
						</div>
			</div>
			<div class="form-group">
				<div class="card col-lg-4">
						<div class="card" style="background-color:#d5e2de">
 						 <img src="<?php echo base_url();?>assets/images/jalu.jpg" alt="John" style="width:100%">
						  <h1>Orang ganteng</h1>
  							<p class="title" style="text-align:center">ganteng banget </p>
  							<p style="text-align:center">Harvard University</p>
 							 <div style="margin: 24px 0;" align="center">
  							  	<a href="#"><i class="fa fa-instagram"></i></a> 
 							    <a href="#"><i class="fa fa-facebook"></i></a>    
 								<a href="#"><i class="fa fa-github"></i></a> 
							 </div>
						<p><button>Contact</button></p>
							</div>
						</div>
			</div>
			<div class="form-group">
				<div class="card col-lg-4">
						<div class="card" style="background-color:#d5e2de">
 						 <img src="<?php echo base_url();?>assets/images/jalu.jpg" alt="John" style="width:100%">
						  <h1>Orang ganteng</h1>
  							<p class="title" style="text-align:center">ganteng banget </p>
  							<p style="text-align:center">Harvard University</p>
 							 <div style="margin: 24px 0;" align="center">
  							  	<a href="#"><i class="fa fa-instagram"></i></a> 
 							    <a href="#"><i class="fa fa-facebook"></i></a>    
 								<a href="#"><i class="fa fa-github"></i></a> 
							</div>
								<p><button>Contact</button></p>
							</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>