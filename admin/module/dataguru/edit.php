<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM dataguru WHERE id = $id ");
$pecah = $ambil->fetch_object();
?>

<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Data Guru</div>
        <div class="card-body">
          <a href="index.php?page=module/dataguru/tambah" class="btn btn-primary">Tambah</a>
          <br><br>

          <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-label-group">
                <label>Nama</label>
                <input value="<?php echo $pecah->nama ?>" type="text" name="nama" class="form-control" required="required">
                <!--fungsi required agar form tidak boleh kosong--->
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label>Tanggal Lahir</label>
                <input value="<?php echo $pecah->ttl ?>" type="date" name="ttl" class="form-control" required="required">
                <!--fungsi required agar form tidak boleh kosong--->
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label>Mata Pelajaran</label>
                <input value="<?php echo $pecah->mapel ?>" type="text" name="mapel" class="form-control" required="required">
                <!--fungsi required agar form tidak boleh kosong--->
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label>Status Pengajar</label>
                <input value="<?php echo $pecah->status ?>" type="text" name="status" class="form-control" required="required">
                <!--fungsi required agar form tidak boleh kosong--->
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <label>Poto</label>
                  <input value="<?php echo $pecah->poto ?>" type="file" name="poto" class="form-control" required="required">
                  <!--fungsi required agar form tidak boleh kosong--->
                </div>
                <button name="save" class="btn btn-primary btn-block">Simpan</button>
              </div>
          </form>
          <?php
          if (isset($_POST['save'])) {

            $nama = $_POST['nama'];
            $ttl = $_POST['ttl'];
            $mapel = $_POST['mapel'];
            $status = $_POST['status'];
            $poto = $_POST['poto'];

            $nama_file = $_FILES['poto']['name'];
            $lokasi = $_FILES['poto']['tmp_name'];

            move_uploaded_file($lokasi, "assets/poto/$nama_file");

            $koneksi->query("UPDATE dataguru SET nama = '$nama', ttl = '$ttl', mapel = '$mapel', status = '$status', poto = '$nama_file' WHERE id = $id ");

            // header('location:data_admin.php');
            // header digunakan untuk pindah halaman ke data_admin.php
            echo "<script>window.location='index.php?page=module/dataguru/index'</script>";
            // code javascrip digunakan untuk pindah halaman ke data_admin.php
          }

          ?>

        </div>

      </div>

    </div>
  </div>

</div>

</div>
</div>

</div>