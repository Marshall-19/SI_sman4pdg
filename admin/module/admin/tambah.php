<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Admin</div>
                <div class="card-body">
                    <a href="index.php?page=module/admin/tambah" class="btn btn-success">Kembali</a>
                    <br><br>
                    <form method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required="required" autofocus>
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>username</label>
                                <input type="text" name="username" class=" form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>password</label>
                                <input type="text" name="password" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->
                            </div>
                        </div>


                        <button name="save" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {



                        $name = ($_POST['nama']);
                        $username = ($_POST['username']);
                        $password = ($_POST['password']);

                        include 'components/koneksi.php';
                        $koneksi->query("INSERT INTO admin(
                                                                    nama,
                                                                    username,
                                                                    password
                                                                ) 
                                                                    VALUES 
                                                                    (
                                                                        '$name',
                                                                        '$username',
                                                                        '$password'
                                                                    ) ");

                        // header('location:data_admin.php');
                        // header digunakan untuk pindah halaman ke data_admin.php
                        echo "<script>window.location='index.php?page=module/admin/index'</script>";
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