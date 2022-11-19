<div class="main-content container-fluid">
  <div class="page-title" >
    <div class="row text-center">
      <h3>Cari Team</h3>
    </div>
  </div>
  <div class="row">
    <?php foreach ($data->result() as $row) : ?>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">
                            <img style="height: 150px;" src="<?= base_url() . 'assets/team/' . $row->logo ?>" alt="element 02"
                                class="mb-1">
                            <h3 class="card-title"><?= $row->nama_team ?></h3>
                            <p class="card-text">Instagram : <?= $row->instagram ?></p>
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