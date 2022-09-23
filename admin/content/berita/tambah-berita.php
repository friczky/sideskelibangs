<?php 
include ('../header.php');
include ('../sidebar.php');
?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Tambah Berita</h3>
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
						<form action="simpan-berita.php" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="col-form-label col-md-1">Tanggal Upload</label>
								<div class="col-md-3 col-sm-12 ">
									<input type="date" name="tgl_upload" class="form-control" required="required" >
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-1">Judul</label>
								<div class="col-md-11 col-sm-12 ">
									<input type="text" name="judul" class="form-control" placeholder="Judul Blog" required="required">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-1">Penulis</label>
								<div class="col-md-11 col-sm-12 ">
									<input type="text" name="penulis" class="form-control" placeholder="Nama Penulis" required="required">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-1">Kategori</label>
								<div class="col-md-11 col-sm-12 ">
									<select class="form-control" name="kategori">
										<option>-- Pilih Kategori --</option>
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
									<textarea name="deskripsi" id="isi"></textarea>
								</div>
							</div>
							<br>

							<div class="item form-group">
								<a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"></a>
								<input type="file" name="foto" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" >
							</div>

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

		<?php 
		include ('../footer.php')
	?>