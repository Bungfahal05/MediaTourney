<div class="main-content container-fluid">
  <div class="card-body">
    <a href="categori/add_kategori">
      <button type="submit" class="btn btn-success mr-1 mb-1">Tambah</button>
    </a>
  </div>
        <!-- table with light -->
        <div class="table-responsive">
          <table class="table table-light mb-0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Games</th>
                <th>Banner</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach ($kategori as $cat) : ?>
              <tr>
                <td class="text-bold-500"><?= $no++ ?></td>
                <td><?= $cat->kategori ?></td>
                <td><img  src="<?= base_url(). 'assets/kategori/'. $cat->gambar ?>"></td>
              </tr>
          <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>