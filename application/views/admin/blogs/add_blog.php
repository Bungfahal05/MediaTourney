<div class="main-content container-fluid">
	<div class="card-body">
		<a href="<?= base_url()?>admin/blog">
			<button type="submit" class="btn btn-danger mr-1 mb-1">Kembali</button>
    </a>
	</div>
	<section id="basic-vertical-layouts">
		<div class="row match-height">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title text-center">Tambah Artikel</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
						<form  enctype="multipart/form-data" class="form form-vertical" action="<?= base_url(). 'admin/blogs/add_blog/tambah' ?>" method="POST">
							<div class="form-body">
								<div class="row">
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="first-name-icon">Judul Artikel</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Judul Artikel" name="judul">
												<div class="form-control-icon">
													<i data-feather="globe"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="first-name-icon">Author</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Nama Author" name="author">
												<div class="form-control-icon">
													<i data-feather="user"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="email-id-icon">Publish</label>
											<div class="position-relative">
												<input type="date" class="form-control" name="publish">
												<div class="form-control-icon">
													<i data-feather="watch"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="first-name-icon"></label>
											<div class="position-relative">
												<select class="form-control" name="kategori">
													<option>--Pilih Games--</option>
													<?php foreach ($kategori as $data) : ?>
														<option value="<?= $data->kategori ?>"><?= $data->kategori ?></option>
													<?php endforeach; ?>
												</select>
												<div class="form-control-icon">
													<i data-feather="tag"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Deskripsi Artikel</label>
											<div class="position-relative">
												<textarea name="deskripsi_blog" id="editor" rows="4" cols="80" class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div class="col-12">
										<label>Banner</label>
										<div class="form-file">
											<input type="file" class="form-file-input" id="customFile" name="gambar">
											<label class="form-file-label" for="customFile">
												<span class="form-file-text">Choose file...</span>
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