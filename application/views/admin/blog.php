<div class="main-content container-fluid">
  <div class="card-body">
    <a href="blogs/add_blog">
      <button type="submit" class="btn btn-success mr-1 mb-1">Tambah</button>
    </a>
  </div>
        <div class="row">
        	<?php foreach ($blog as $data) : ?>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="row no-gutters">
                            <div class="col-md-12 col-lg-4">
                                <img src="<?= base_url(). '/assets/blog/' . $data->gambar ?>" alt="element 01"
                                    class="h-100 w-100 rounded-left">
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <div class="card-body">
                                    <p class="card-text text-ellipsis">
                                    	<?= $data->judul ?>
                                    </p>
                                    <a href="<?= base_url() . 'admin/blog/edit/'. $data->id_blog?>"><button class="btn btn-info">Edit</button></a>
                                    <a href="<?= base_url() . 'admin/blog/hapus/'. $data->id_blog?>"><button class="btn btn-danger">Hapus</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
</div>