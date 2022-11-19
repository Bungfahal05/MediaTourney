<div class="main-content container-fluid">
  <div class="garis">
    <div class="garis-text">Pilih Tournamnet</div>
  </div>
  <div class="row">
    <?php foreach ($data->result() as $row) : ?>
    <div class="col-xl-4 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <img style="height: 200px;" src="<?= base_url() . 'assets/tourney/' . $row->gambar ?>" class="card-img-top img-fluid" alt="singleminded">
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
                <span class="textleft">Oleh</span>
                <span class="textright"><?= $row->oleh ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="col mt-2">
    <?php echo $pagination; ?>
    </div>
  </div>