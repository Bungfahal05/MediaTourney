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
                <th>Banner</th>
                <th>Nama Partner</th>
                <th>Instagram</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach ($partner as $row) : ?>
              <tr>
                <td class="text-bold-500"><?= $no++ ?></td>
                <td><img style="width: 200px" src="<?= base_url(). 'assets/partner/'. $row->gambar ?>"></td>
                <td><?= $row->nama_partner ?></td>
                <td><?= $row->instagram ?></td>
                <td><a href="<?= base_url() . 'admin/partner/edit/'. $row->id_partner ?>"><i
                      class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit-3"></i></a>
                      <a href="<?= base_url() . 'admin/partner/hapus/'. $row->id_partner ?>"><i
                      class="badge-circle badge-circle-light-secondary font-medium-1 ml-3" data-feather="delete"></i></a></td>
              </tr>
          <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>