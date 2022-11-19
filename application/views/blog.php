<div class="main-content container-fluid">
  <div class="page-title" >
    <div class="row text-center">
      <h3>Cari Team</h3>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <?php foreach ($blog as $data) : ?>
        <div class="col-xl-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-content">
              <img class="card-img img-fluid" src="<?= base_url(). '/assets/blog/' . $data->gambar ?>" alt="Card image">
              <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                <div class="overlay-content">
                  <p class="card-text text-ellipsis">
                    <?= $data->judul ?>
                  </p>
                </div>
                <div class="overlay-status">
                  <p class="mb-25"></p>
                </div>
                <div class="overlay-status">
                  <p class="mb-25"><small><?= $data->kategori ?></small> • 
                  <small><?= date_indo(date($data->publish)) ?></small></p>
                  <a href="#" class="btn btn-outline-white btn-sm">Check More </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="col mt-2">
    <?php echo $pagination; ?>
    </div>
</div>