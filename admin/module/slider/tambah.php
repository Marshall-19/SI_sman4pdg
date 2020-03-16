<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Slider</div>
                <div class="card-body">
                    <a href="index.php?page=module/slider/index" class="btn btn-primary">Kembali</a>
                    <br><br>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Slider</label>
                                <input type="file" name="slider" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                </div>

                <button name="save" class="btn btn-primary btn-block">Simpan</button>
                </form>
                <?php
                if (isset($_POST['save'])) {


                    $nama_file = $_FILES['slider']['name'];
                    $lokasi = $_FILES['slider']['tmp_name'];

                    move_uploaded_file($lokasi, "assets/slider/$nama_file");

                    include 'components/koneksi.php';
                    $koneksi->query("INSERT INTO slider(
                                                                    slider
                                                                ) 
                                                                    VALUES 
                                                                    (
                                                                        '$nama_file'
                                                                    ) ");

                    // header('location:data_admin.php');
                    // header digunakan untuk pindah halaman ke data_admin.php
                    echo "<script>window.location='index.php?page=module/slider/index'</script>";
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