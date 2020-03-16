<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Pengumuman</div>
                <div class="card-body">
                    <a href="index.php?page=module/pendaftaran/index" class="btn btn-primary">Kembali</a>
                    <br><br>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" required="required" autofocus>
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Isi</label>
                                <input type="text" name="isi" class=" form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Terbit</label>
                                <input type="date" name="terbit" class=" form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>

                        <button name="save" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {

                        $jdl = ($_POST['judul']);
                        $isi = ($_POST['isi']);
                        $terbit = ($_POST['terbit']);

                        include 'components/koneksi.php';
                        $koneksi->query("INSERT INTO pengumuman(
                                                                    judul,
                                                                    isi,
                                                                    terbit
                                                                ) 
                                                                    VALUES 
                                                                    (
                                                                        '$jdl',
                                                                        '$isi',
                                                                        '$terbit'
                                                                    ) ");

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