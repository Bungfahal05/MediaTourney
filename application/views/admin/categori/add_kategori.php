<div class="main-content container-fluid">
	<div class="card-body">
		<a href="<?= base_url()?>admin/kategori">
			<button type="submit" class="btn btn-danger mr-1 mb-1">Kembali</button>
    </a>
	</div>
	<section id="basic-vertical-layouts">
		<div class="row match-height">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title text-center">Tambah Kategori</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
						<form  enctype="multipart/form-data" class="form form-vertical" action="<?= base_url(). 'admin/categori/add_kategori/Tambah' ?>" method="POST">
							<div class="form-body">
								<div class="row">
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="first-name-icon">Nama Kategori</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Nama Kategori" name="kategori">
												<div class="form-control-icon">
													<i data-feather="globe"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="email-id-icon">Link</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Link" name="link">
												<div class="form-control-icon">
													<i data-feather="link-2"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<label>Banner</label>
										<div class="form-file">
											<input type="file" class="form-file-input" id="customFile" name="gambar">
											<label class="form-file-label" for="customFile">
												<span class="form-file-text" name="gambar">Choose file...</span>
												<span class="form-file-button btn-primary "><i data-feather="upload"></i></span>
											</label>
										</div>
									</div>
									<div class="col-12 d-flex justify-content-end">
										<button type="submit" class="btn btn-primary mr-1 mt-3">Submit</button>
										<button type="reset" class="btn btn-light-secondary mr-1 mt-3">Reset</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>