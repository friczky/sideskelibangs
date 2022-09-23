<?php 
include ('../header.php');
include ('../sidebar.php');

$id = $_GET['id'];

$Tampil = mysqli_query($connect, "SELECT * FROM tb_berita WHERE judul='$id'");
while($row = mysqli_fetch_array($Tampil)){
	?>

	<!-- page content -->
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Edit Data Berita</h3>
				</div>

				<div class="title_right">
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="row">
				<div class="col-md-12">
					<div class="x_panel">
						<div class="x_title">
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />
							<form action="update-berita.php" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
								<input type="hidden" name="id" class="form-control" value="<?php echo $row['id_berita'] ?>" required="required" >
								<div class="item form-group">
									<label class="col-form-label col-md-1">Tanggal Upload</label>
									<div class="col-md-3 col-sm-12 ">
										<input type="date" name="tgl_upload" class="form-control" value="<?php echo $row['tgl_upload'] ?>" required="required" >
									</div>
								</div>

								<div class="item form-group">
									<label class="col-form-label col-md-1">Judul</label>
									<div class="col-md-11 col-sm-12 ">
										<input type="text" name="judul" class="form-control" placeholder="Judul Blog" required="required" value="<?php echo $row['judul'] ?>">
									</div>
								</div>

								<div class="item form-group">
									<label class="col-form-label col-md-1">Penulis</label>
									<div class="col-md-11 col-sm-12 ">
										<input type="text" name="penulis" class="form-control" placeholder="Nama Penulis" required="required" value="<?php echo $row['penulis'] ?>">
									</div>
								</div>

								<div class="item form-group">
									<label class="col-form-label col-md-1">Kategori</label>
									<div class="col-md-11 col-sm-12 ">
										<select class="form-control" name="kategori">
											<option><?php echo $row['kategori'] ?></option>
											<option value="Politik">Politik</option>
											<option value="Ekonomi">Ekonomi</option>
											<option value="Sports">Sports</option>
											<option value="Sosial">Sosial</option>
										</select>
									</div>
								</div>


								<div class="item form-group">
									<label class="col-form-label col-md-1">Deskripsi</label>
									<div class="col-md-11 col-sm-12 ">
										<textarea name="deskripsi" id="isi"><?php echo $row['deskripsi'] ?></textarea>
									</div>
								</div>
								<br>

								<img src="gambar/<?php echo $row['foto'] ?>" width="150px" height="120px" /></br><br>

								<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br><br>

								<input name="foto" id="gambar" type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
								


								<div class="item form-group">
									<p style="color: red">Upload Thumbnail .png | .jpg | .jpeg </p>
								</div>
								<div class="ln_solid"></div>
								<div class="item form-group">
									<div class="col-md-12 col-sm-12">
										<a href="data-berita.php" class="btn btn-warning"> Cancel</a>
										<input type="submit" name="" value="Submit" class="btn btn-primary">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<?php 
include ('../footer.php')
?>