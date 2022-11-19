<div class="main-content container-fluid">
  <div id="kategori">
      <div class="garis">
        <div class="garis-text">Pilih Game</div>
        <p>Pilih Game & Lihat Tournamentnya Sekarang!!!</p>
      </div>
    <?php foreach ($kategori as $data) : ?>
      <a href="<?= base_url() . $data->link ?>">
        <figure>
          <img src="<?= base_url(). '/assets/kategori/'.$data->gambar ?>" class="games" />
          <figcaption><?= $data->kategori ?></figcaption>
        </figure>
      </a>
    <?php endforeach; ?>
  </div>
      <div class="garis">
        <div class="garis-text">Pilih Tournament</div>
      </div>
  <div class="container-fluid">
    <div class="row">
      <?php foreach ($tourney as $row) : ?>
    <div class="col-xl-4 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <img style="height: 200px;" src="<?= base_url(). '/assets/tourney/'.$row->gambar ?>" class="card-img-top img-fluid" alt="singleminded">
          <div class="card-body">
            <div class="header">
              <h5 class="judul"><?= $row->nama ?></h5>
            </div>
            <div class="tipe">
              <h5><?= $row->tipe ?></h5>
            </div>
            <div class="tournament">
              <div class="box">
                <span class="textleft">Pendaftaran : </span>
                <span class="textright">Rp <?= number_format($row->biaya, 0,',','.') ?></span>
              </div>
              <div class="box">
                <span class="textleft">Mulai Turnamnet :</span>
                <span class="textright"><?= date_indo(date($row->event)) ?></span>
              </div>
              <div class="box">
                <span class="textleft">Oleh : </span>
                <span class="textright"><?= $row->oleh ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php endforeach; ?>
      <div class="btn-group mb-3" role="group" aria-label="Basic example">
        <a href="tournament" class="btn btn-danger"><button type="button" class="btn btn-danger">Lihat Lainnya...</button></a>
      </div>
    </div>
  </div>
      <div class="garis">
        <div class="garis-text">Artikel Terbaru</div>
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
</div>