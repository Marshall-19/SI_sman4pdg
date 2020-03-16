<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Profiil</div>
                <div class="card-body">
                    <a href="index.php?page=module/profil/tambah" class="btn btn-primary">Tambah</a>
                    <br><br>
                    <form method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nama sekolah</label>
                                <input type="text" name="nama" class="form-control" required="required" autofocus>
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class=" form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Kecamatan</label>
                                <input type="text" name="kec" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Kabupaten / Kota</label>
                                <input type="text" name="kab_kota" class="form-control" required="required" autofocus>
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>provinsi</label>
                                <input type="text" name="prov" class=" form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>No. Telepon</label>
                                <input type="text" name="no_telp" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>E - Mail</label>
                                <input type="text" name="e_mail" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Akreditasi</label>
                                <input type="text" name="akreditasi" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Visi dan Misi</label>
                                <input type="text" name="visi_misi" class="form-control" required="required">
                                <!--fungsi required agar form tidak boleh kosong--->
                            </div>
                        </div>



                        <button name="save" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {



                        $n_sekolah = ($_POST['nama']);
                        $almt = ($_POST['alamat']);
                        $kec = ($_POST['kec']);
                        $kk = ($_POST['kab_kota']);
                        $prov = ($_POST['prov']);
                        $tlp = ($_POST['no_telp']);
                        $mail = ($_POST['e_mail']);
                        $stt = ($_POST['status']);
                        $akr = ($_POST['akreditasi']);
                        $vm = ($_POST['visi_misi']);






                        include 'components/koneksi.php';
                        $koneksi->query("INSERT INTO bio(
                                                                    nama_sekolah,
                                                                    alamat,
                                                                    kecamatan,
                                                                    kab_kota,
                                                                    provinsi,
                                                                    no_telp,
                                                                    e_mail,
                                                                    status,
                                                                    akreditasi,
                                                                    visi_misi
                                                                ) 
                                                                    VALUES 
                                                                    (
                                                                        '$n_sekolah',
                                                                        '$almt',
                                                                        '$kec',
                                                                        '$kk',
                                                                        '$prov',
                                                                        '$tlp',
                                                                        '$mail',
                                                                        '$stt',
                                                                        '$akr',
                                                                        '$vm'
                                                                    ) ");

                        // header('location:data_admin.php');
                        // header digunakan untuk pindah halaman ke data_admin.php
                        echo "<script>window.location='index.php?page=module/profil/index'</script>";
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