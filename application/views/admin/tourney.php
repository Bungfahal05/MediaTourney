<div class="main-content container-fluid">
  <div class="card-body">
    <a href="tournament/add_tourney">
      <button type="submit" class="btn btn-success mr-1 mb-1">Tambah</button>
    </a>
  </div>
        <!-- table with light -->
        <div class="table-responsive">
          <table class="table table-light mb-0">
            <thead>
              <tr>
                <th>No</th>
                <th>Tourney</th>
                <th>Oleh</th>
                <th>Instagram</th>
                <th>Biaya</th>
                <th>Event</th>
                <th>Banner</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach ($tourney as $row) : ?>
              <tr>
                <td class="text-bold-500"><?= $no++ ?></td>
                <td><?= $row->nama ?></td>
                <td class="text-bold-500"><?= $row->oleh ?></td>
                <td><?= $row->instagram ?></td>
                <td>Rp. <?= number_format($row->biaya, 0,'','.') ?></td>
                <td><?= $row->event ?></td>
                <td><img style="width: 200px" src="<?= base_url(). 'assets/tourney/'. $row->gambar ?>"></td>
                <td><a href="<?= base_url() . 'admin/tourney/edit/'. $row->id?>"><i
                      class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit-3"></i></a></td>
                <td><a href="<?= base_url() . 'admin/tourney/hapus/'. $row->id ?>"><i
                      class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="delete"></i></a></td>
              </tr>
          <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>