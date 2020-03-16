<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Data Profil</div>
        <div class="card-body">
          <a href="index.php?page=module/profil/tambah" class="btn btn-primary">Tambah</a>
          <br><br>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                  <th width="20">Id</th>
                  <th>Nama Sekolah</th>
                  <th>Alamat</th>
                  <th>Kecamatan</th>
                  <th>Kabupaten / Kota</th>
                  <th>Provinsi</th>
                  <th>No. Telepon</th>
                  <th>E-Mail</th>
                  <th>Status</th>
                  <th>Akreditasi</th>
                  <th>Visi dan Misi</th>
                  <th width="200">aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php

                $no = 1;
                $ambil = $koneksi->query("SELECT * FROM bio");
                while ($pecah = $ambil->fetch_object()) {

                ?>

                  <tr>
                    <td align="center"><?php echo $no++ ?></td>
                    <!-- no ++ agar nomor terurut jika data dihapus -->
                    <td><?php echo $pecah->nama_sekolah ?></td>
                    <td><?php echo $pecah->alamat ?></td>
                    <td><?php echo $pecah->kecamatan ?></td>
                    <td><?php echo $pecah->kab_kota ?></td>
                    <td><?php echo $pecah->provinsi ?></td>
                    <td><?php echo $pecah->no_telp ?></td>
                    <td><?php echo $pecah->e_mail ?></td>
                    <td><?php echo $pecah->status ?></td>
                    <td><?php echo $pecah->akreditasi ?></td>
                    <td><?php echo $pecah->visi_misi ?></td>
                    
                    
                    
                    <td align="center">

                      <a href="index.php?page=module/profil/edit&id=<?php echo $pecah->id ?>" class=" btn btn-primary">Edit</a>
                      <!-- untuk button edit -->
                      <a onclick="return confirm('Hapus Data ?')" href="index.php?page=module/profil/delete&id=<?php echo $pecah->id ?>" class=" btn btn-danger">Delete</a>
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