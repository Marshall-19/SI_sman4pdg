<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Galeri</div>
                <div class="card-body">
                    <a href="index.php?page=module/slider/index" class="btn btn-primary">Kembali</a>
                    <br><br>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                </div>

                <button name="save" class="btn btn-primary btn-block">Simpan</button>
                </form>
                <?php
                if (isset($_POST['save'])) {

                    $desk = ($_POST['deskripsi']);


                    $nama_file = $_FILES['gambar']['name'];
                    $lokasi = $_FILES['gambar']['tmp_name'];

                    move_uploaded_file($lokasi, "assets/galeri/$nama_file");

                    include 'components/koneksi.php';
                    $koneksi->query("INSERT INTO galeri(
                                                                    gambar,
                                                                    deskripsi
                                                                ) 
                                                                    VALUES 
                                                                    (
                                                                        '$nama_file',
                                                                        '$desk'
                                                                    ) ");

                    // header('location:data_admin.php');
                    // header digunakan untuk pindah halaman ke data_admin.php
                    echo "<script>window.location='index.php?page=module/galeri/index'</script>";
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