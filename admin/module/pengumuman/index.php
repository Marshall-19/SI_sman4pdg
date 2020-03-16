<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Pengumuman</div>
        <div class="card-body">
          <a href="index.php?page=module/pengumuman/tambah" class="btn btn-primary">Tambah</a>
          <br><br>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                  <th width="20">Id</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Terbit</th>
                  <th width="200">aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php

                $no = 1;  
                $ambil = $koneksi->query("SELECT * FROM pengumuman");
                while ($pecah = $ambil->fetch_object()) {

                ?>

                  <tr>
                    <td align="center"><?php echo $no++ ?></td>
                    <!-- no ++ agar nomor terurut jika data dihapus -->
                    <td><?php echo $pecah->judul ?></td>
                    <td><?php echo $pecah->isi ?></td>
                    <td><?php echo $pecah->terbit ?></td>
                    <td align="center">

                      <a href="index.php?page=module/pengumuman/edit&id=<?php echo $pecah->id ?>" class=" btn btn-primary">Edit</a>
                      <!-- untuk button edit -->
                      <a onclick="return confirm('Hapus Data ?')" href="index.php?page=module/pengumuman/delete&id=<?php echo $pecah->id ?>" class=" btn btn-danger">Delete</a>
                      <!-- button hapus -->



                    </td>

                  </tr>
                <?php }  ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>

    </div>
  </div>

</div>