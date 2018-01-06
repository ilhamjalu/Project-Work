<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/new.css">
</head>
<body>
	<div class="container" style="margin-bottom: 1.1cm">
	<div id="penjual" style="margin-top:3.5cm">
		<h1>
			PENJUALAN
		</h1>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-body">
					<div class="form-group">
					<label for="kantin" class="control-label col-lg-5">Nama Kantin</label>
					<div class="col-lg-7 ">
						<input type="text" name="kantin" id="kantin" class="form-control input_with_text" placeholder="Masukkan Nama kantin">
					</div>
				</div>	
				<div class="form-group">
					<form action="#" method="post" enctype="multipart/form-data">
						<label for="gambar" class="control-label col-lg-5">Gambar</label>
						<div class="col-lg-7">
						<input type="file" name="gambar"  class="form-control">
						</div>
					</form>
				</div>
						<div class="form-group">
					<label for="makanan" class="control-label col-lg-5">Nama Makanan</label>
					<div class="col-lg-7 ">
						<input type="text" name="makanan" id="makanan" class="form-control input_with_text" placeholder="Masukkan Nama Makanan">
					</div>
				</div>
				<div class="form-group">
					<label for="harga" class="control-label col-lg-5">Harga</label>
					<div class="col-lg-7">
						<input type="text" name="harga" id="harga" class="form-control input_with_text" placeholder="harga">
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
	<div class="row">
		<div class="row">
			<div class="col-lg-12">
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
					  	<div class="panel panel-info">
							<div class="panel-heading">Data Penjual</div>
					    	<div class="panel-body">
								<table border="0" cellpadding="4" cellspacing="0" class="datatable table table-striped table-bordered">
									<tr>
										<th>Gambar</th>
										<th>Nama Makanan</th>
										<th>Harga</th>
										<th>Aksi</th>
									</tr>
									<tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> 
                                              <a href="" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i>Lihat</a>
                                              <a href="" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>Hapus</a>
                                            </td>
                                        </tr>
								</table>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</body>
</html>