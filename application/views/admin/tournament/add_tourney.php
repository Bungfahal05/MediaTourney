<div class="main-content container-fluid">
	<div class="card-body">
		<a href="<?= base_url()?>admin/tourney">
			<button type="submit" class="btn btn-danger mr-1 mb-1">Kembali</button>
    </a>
	</div>
	<section id="basic-vertical-layouts">
		<div class="row match-height">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title text-center">Tambah Tournament</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
						<form  enctype="multipart/form-data" class="form form-vertical" action="<?= base_url(). 'admin/tournament/add_tourney/Tambah' ?>" method="POST">
							<div class="form-body">
								<div class="row">
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="first-name-icon">Nama Tournament</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Nama Tournament" name="nama">
												<div class="form-control-icon">
													<i data-feather="globe"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="email-id-icon">Penyelenggara</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Penyelenggara" name="oleh">
												<div class="form-control-icon">
													<i data-feather="user"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="mobile-id-icon">Instagram</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Instagram" name="instagram">
												<div class="form-control-icon">
													<i data-feather="instagram"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Biaya</label>
											<div class="position-relative">
												<input type="number" class="form-control" placeholder="Biaya" name="biaya">
												<div class="form-control-icon">
													<i data-feather="dollar-sign"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Tanggal</label>
											<div class="position-relative">
												<input type="date" class="form-control" name="event">
												<div class="form-control-icon">
													<i data-feather="watch"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Slot</label>
											<div class="position-relative">
												<input type="number" class="form-control" placeholder="Slot" name="slot">
												<div class="form-control-icon">
													<i data-feather="user-plus"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Kategori</label>
											<select class="form-select" name="kategori">
												<option selected>Choose...</option>
												<?php foreach ($kategori as $row) : ?>
													<option><?= $row->kategori ?></option>
												<?php endforeach ?>
											</select>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Tipe</label>
											<select class="form-select" name="tipe">
												<option selected>Choose...</option>
												<?php foreach ($tipe as $row) : ?>
													<option><?= $row->tipe ?></option>
												<?php endforeach ?>
											</select>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Hadiah</label>
											<div class="position-relative">
												<input type="text" class="form-control" placeholder="Hadiah" name="hadiah">
												<div class="form-control-icon">
													<i data-feather="dollar-sign"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group has-icon-left">
											<label for="password-id-icon">Deskripsi Tournament</label>
											<div class="position-relative">
												<textarea class="form-control" id="editor" name="deskripsi"></textarea>
											</div>
										</div>
									</div>
									<div class="col-12">
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