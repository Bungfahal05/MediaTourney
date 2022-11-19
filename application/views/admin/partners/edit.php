<div class="main-content container-fluid">
	<div class="card-body">
		<a href="<?= base_url()?>admin/partner">
			<button type="submit" class="btn btn-danger mr-1 mb-1">Kembali</button>
    </a>
	</div>
	<section id="basic-vertical-layouts">
		<div class="row match-height">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title text-center">Edit Partner</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
						<?php foreach ($partner as $row) : ?>
						<form  enctype="multipart/form-data" class="form form-vertical" action="<?= base_url(). 'admin/partner/update' ?>" method="POST">
							<div class="form-body">
								<div class="row">
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="first-name-icon">Nama Partner</label>
											<div class="position-relative">
												<input type="hidden" name="id_partner" value="<?= $row->id_partner ?>">
												<input type="text" class="form-control" placeholder="Nama Team" name="nama_partner" value="<?= $row->nama_partner ?>">
												<div class="form-control-icon">
													<i data-feather="globe"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="mobile-id-icon">Instagram</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Instagram" name="instagram" value="<?= $row->instagram ?>">
												<div class="form-control-icon">
													<i data-feather="instagram"></i>
												</div>
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