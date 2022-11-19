<div class="main-content container-fluid">
  <div class="card-body">
    <a href="teams/add_team">
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
                <th>Nama Team</th>
                <th>Instagram</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach ($team as $row) : ?>
              <tr>
                <td class="text-bold-500"><?= $no++ ?></td>
                <td><img style="width: 125px" src="<?= base_url(). 'assets/team/'. $row->logo ?>"></td>
                <td><?= $row->nama_team ?></td>
                <td><?= $row->instagram ?></td>
                <td><a href="<?= base_url() . 'admin/team/edit/'. $row->id_team?>"><i
                      class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="edit-3"></i></a></td>
                <td><a href="<?= base_url() . 'admin/team/hapus/'. $row->id_team ?>"><i
                      class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="delete"></i></a></td>
              </tr>
          <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>