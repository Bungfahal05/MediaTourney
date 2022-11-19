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
					<h4 class="card-title text-center">Edit Tournament</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
						<?php foreach ($blog as $row) : ?>
						<form  enctype="multipart/form-data" class="form form-vertical" action="<?= base_url(). 'admin/blog/update' ?>" method="POST">
							<div class="form-body">
								<div class="row">
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="first-name-icon">Judul</label>
											<div class="position-relative">
												<input type="hidden" name="id_blog" value="<?php echo $row->id_blog ?>">
												<input type="text" class="form-control" placeholder="Nama Tournament" name="judul" value="<?= $row->judul?>">
												<div class="form-control-icon">
													<i data-feather="globe"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Publish</label>
											<div class="position-relative">
												<input type="date" class="form-control" name="publish" value="<?= $row->publish ?>">
												<div class="form-control-icon">
													<i data-feather="watch"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Author</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Nama Author" name="author" value="<?= $row->author ?>">
												<div class="form-control-icon">
													<i data-feather="dollar-sign"></i>
												</div>
											</div>
										</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Deskripsi Tournament</label>
											<div class="position-relative">
												<textarea class="form-control" id="editor" name="deskripsi_blog" value="<?= $row->deskripsi_blog ?>"></textarea>
											</div>
										</div>
									</div>
									<div class="col-12 d-flex justify-content-end">
										<button type="submit" class="btn btn-primary mr-1 mt-3">Submit</button>
										<button type="reset" class="btn btn-light-secondary mr-1 mt-3">Reset</button>
									</div>
								</div>
							</div>
						</form>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>