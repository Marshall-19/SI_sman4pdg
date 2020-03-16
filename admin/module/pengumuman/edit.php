<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM pengumuman WHERE id = $id ");
$pecah = $ambil->fetch_object();
?>

<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Pengumuman</div>
        <div class="card-body">
          <a href="index.php?page=module/pengumuman/index" class="btn btn-primary">Kembali</a>
          <br><br>

          <form method="POST">
            <div class="form-group">

              <input value="<?php echo $pecah->id ?> " type="hidden" name="id">
              <div class="form-label-group">
                <label>Judul</label>
                <input value="<?php echo $pecah->judul ?>" type="text" name="judul" class="form-control" required="required" autofocus>
                <!--fungsi required agar form tidak boleh kosong--->

              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label>Isi</label>
                <input value="<?php echo $pecah->isi ?>" type="text" name="isi" class=" form-control" required="required">
                <!--fungsi required agar form tidak boleh kosong--->

              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label>Terbit</label>
                <input value="<?php echo $pecah->terbit ?>" type="date" name="terbit" class=" form-control" required="required">
                <!--fungsi required agar form tidak boleh kosong--->

              </div>
            </div>

            <button name="save" class="btn btn-primary btn-block">Simpan</button>
          </form>
          <?php
          if (isset($_POST['save'])) {

            $judul = ($_POST['judul']);
            $isi = ($_POST['isi']);
            $terbit = ($_POST['terbit']);

            $koneksi->query("UPDATE pengumuman SET judul = '$judul', isi = '$isi', terbit = '$terbit' WHERE id = $id ");

            // header('location:data_admin.php');
            // header digunakan untuk pindah halaman ke data_admin.php
            echo "<script>window.location='index.php?page=module/pengumuman/index'</script>";
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