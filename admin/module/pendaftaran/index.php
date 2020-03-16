<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Data Pendaftaran</div>
        <div class="card-body">
          <a href="index.php?page=module/pendaftaran/tambah" class="btn btn-primary">Tambah</a>
          <br><br>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                  <th width="20">Id</th>
                  <th>Nama Siswa</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>Nama Sekolah</th>
                  <th>Alamat Sekolah</th>
                  <th>NISN</th>
                  <th>No. STTB</th>
                  <th>No. SKHUN</th>
                  <th>Nilai Rata-rata UN</th>
                  <th>Nama Ayah</th>
                  <th>Tanggal Lahir Ayah</th>
                  <th>Agama Ayah</th>
                  <th>Pekerjaan Ayah</th>
                  <th>Alamat Ayah</th>
                  <th>Nama Ibu</th>
                  <th>Tanggal Lahir Ibu</th>
                  <th>Agama Ibu</th>
                  <th>Pekerjaan Ibu</th>
                  <th>Alamat Ibu</th>
                  <th>Lampiran</th>
                  <th width="200">aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php

                $no = 1;
                $ambil = $koneksi->query("SELECT * FROM tb_pendaftaran");
                while ($pecah = $ambil->fetch_object()) {

                ?>

                  <tr>
                    <td align="center"><?php echo $no++ ?></td>
                    <!-- no ++ agar nomor terurut jika data dihapus -->
                    <td><?php echo $pecah->nama_siswa ?></td>
                    <td><?php echo $pecah->Tanggal_lahir ?></td>
                    <td><?php echo $pecah->jenis_kelamin ?></td>
                    <td><?php echo $pecah->agama ?></td>
                    <td><?php echo $pecah->alamat_sekarang ?></td>
                    <td><?php echo $pecah->nama_sekolah ?></td>
                    <td><?php echo $pecah->alamat_sekolah ?></td>
                    <td><?php echo $pecah->nisn ?></td>
                    <td><?php echo $pecah->no_sttb ?></td>
                    <td><?php echo $pecah->no_skhun ?></td>
                    <td><?php echo $pecah->nilai_rata ?></td>
                    <td><?php echo $pecah->nama_ayah ?></td>
                    <td><?php echo $pecah->ttl_ayah ?></td>
                    <td><?php echo $pecah->agama_ayah ?></td>
                    <td><?php echo $pecah->pekerjaan_ayah ?></td>
                    <td><?php echo $pecah->alamat_ayah ?></td>
                    <td><?php echo $pecah->nama_ibu ?></td>
                    <td><?php echo $pecah->ttl_ibu ?></td>
                    <td><?php echo $pecah->agama_ibu ?></td>
                    <td><?php echo $pecah->pekerjaan_ibu ?></td>
                    <td><?php echo $pecah->alamat_ibu ?></td>
                    <td><?php echo $pecah->Lampiran ?></td>
                    <td align="center">

                      <a href="index.php?page=module/pendaftaran/edit&id=<?php echo $pecah->id ?>" class=" btn btn-primary">Edit</a>
                      <!-- untuk button edit -->
                      <a onclick="return confirm('Hapus Data ?')" href="index.php?page=module/pendaftaran/delete&id=<?php echo $pecah->id ?>" class=" btn btn-danger">Delete</a>
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