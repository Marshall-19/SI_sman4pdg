<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Pendaftaran</div>
                <div class="card-body">
                    <a href="index.php?page=module/admin/index" class="btn btn-primary">Kembali</a>
                    <br><br>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-label-group">
                                <h1>IDENTITAS SISWA</h1><br>
                                <div class="row col-md-10">
                                    <div class="row col-md-5">
                                        <label>Nama Siswa</label>
                                        <input type="text" name="nama_siswa" class="form-control" required="required" autofocus>
                                    </div>
                                    <div class="row col-md-2">

                                    </div>
                                    <div class="row col-md-5">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir_siswa" class="form-control" required="required" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="form-label-group">
                                <div class="row col-md-10">
                                    <div class="row col-md-5">
                                        <label for="">Jenis Kelamin</label>
                                        <input type="radio" name="jk" value="Laki-laki" checked>laki - Laki
                                        <input type="radio" name="jk" value="Perempuan" checked>Perempuan
                                    </div>
                                    <div class="row col-md-2">

                                    </div>
                                    <div class="row col-md-5">
                                        <label>Agama</label>
                                        <input type="text" name="agama_siswa" class="form-control" required="required" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-10">
                                <div class="row col-md-5">
                                    <label>Alamat Sekarang</label>
                                    <input type="text" name="alamat_siswa" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">
                                    <label>Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" required="required" autofocus>
                                </div>
                            </div>
                            <div class="row col-md-10">
                                <div class="row col-md-5">
                                    <label>Alamat Sekolah</label>
                                    <input type="text" name="alamat_sekolah" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">
                                    <label>NISN</label>
                                    <input type="text" name="nisn" class="form-control" required="required" autofocus>
                                </div>
                            </div>
                            <div class="row col-md-10">
                                <div class="row col-md-5">
                                    <label>No. STTB</label>
                                    <input type="text" name="sttb" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">
                                    <label>No. SKHUN</label>
                                    <input type="text" name="skhun" class="form-control" required="required" autofocus>
                                </div>
                            </div>
                            <div class="row col-md-10">
                                <div class="row col-md-5">
                                    <label>Nilai Rata - rata</label>
                                    <input type="text" name="rata" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">

                                </div>
                            </div>
                            <br><br>
                            <h1>IDENTITAS AYAH</h1><br>
                            <div class="row col-md-10">
                                <div class="row col-md-5">
                                    <label>Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir_ayah" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-5">
                                    <label>Agama</label>
                                    <input type="text" name="agama_ayah" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ayah" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-5">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat_ayah" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">

                                </div>
                            </div>
                            <br><br>
                            <h1>IDENTITAS IBU</h1><br>
                            <div class="row col-md-10">
                                <div class="row col-md-5">
                                    <label>Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir_ibu" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-5">
                                    <label>Agama</label>
                                    <input type="text" name="agama_ibu" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ibu" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-5">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat_ibu" class="form-control" required="required" autofocus>
                                </div>
                                <div class="row col-md-2">

                                </div>
                                <div class="row col-md-5">

                                </div>
                                <br><br>
                                <h1>LAMPIRAN</h1><br>
                                <div class="row col-md-10">


                                    <div class="row col-md-5">
                                        <label>Lampiran Berkas</label>
                                        <input type="file" name="lampiran" class="form-control" required="required" autofocus>
                                    </div>
                                    <div class="row col-md-2">

                                    </div>
                                    <div class="row col-md-5">

                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row col-md-12">
                                <div class="row col-md-6">
                                    <div class="row col-md-3">
                                        <button name="save" class="btn btn-primary btn-block">Simpan</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {




                        //data siswa
                        $n_siswa = ($_POST['nama_siswa']);
                        $tgl_siswa = ($_POST['tgl_lahir_siswa']);
                        $jk = ($_POST['jk']);
                        $agm_siswa = ($_POST['agama_siswa']);
                        $almt_siswa = ($_POST['alamat_siswa']);
                        $asl_sekolah = ($_POST['asal_sekolah']);
                        $almt_sekolah = ($_POST['alamat_sekolah']);
                        $no_nisn = ($_POST['nisn']);
                        $no_sttb = ($_POST['sttb']);
                        $no_skhun = ($_POST['skhun']);
                        $nilai_rata = ($_POST['rata']);
                        //data ayah
                        $n_ayah = ($_POST['nama_ayah']);
                        $tgl_ayah = ($_POST['tgl_lahir_ayah']);
                        $agm_ayah = ($_POST['agama_ayah']);
                        $pkrj_ayah = ($_POST['pekerjaan_ayah']);
                        $almt_ayah = ($_POST['alamat_ayah']);
                        //data ibu
                        $n_ibu = ($_POST['nama_ibu']);
                        $tgl_ibu = ($_POST['tgl_lahir_ibu']);
                        $agm_ibu = ($_POST['agama_ibu']);
                        $pkrj_ibu = ($_POST['pekerjaan_ibu']);
                        $almt_ibu = ($_POST['alamat_ibu']);

                        $nama_file = $_FILES['lampiran']['name'];
                        $lokasi = $_FILES['lampiran']['tmp_name'];

                        move_uploaded_file($lokasi, "assets/lampiran/$nama_file");


                        include 'components/koneksi.php';
                        $koneksi->query("INSERT INTO tb_pendaftaran(
                                                                    nama_siswa,
                                                                    Tanggal_lahir,
                                                                    jenis_kelamin,
                                                                    agama,
                                                                    alamat_sekarang,
                                                                    nama_sekolah,
                                                                    alamat_sekolah,
                                                                    nisn,
                                                                    no_sttb,
                                                                    no_skhun,
                                                                    nilai_rata,
                                                                    nama_ayah,
                                                                    ttl_ayah,
                                                                    agama_ayah,
                                                                    pekerjaan_ayah,
                                                                    alamat_ayah,
                                                                    nama_ibu,
                                                                    ttl_ibu,
                                                                    agama_ibu,
                                                                    pekerjaan_ibu,
                                                                    alamat_ibu,
                                                                    Lampiran
                                                                ) 
                                                                    VALUES 
                                                                    (
                                                                        '$n_siswa',
                                                                        '$tgl_siswa',
                                                                        '$jk',
                                                                        '$agm_siswa',
                                                                        '$almt_siswa',
                                                                        '$asl_sekolah',
                                                                        '$almt_sekolah',
                                                                        '$no_nisn',
                                                                        '$no_sttb',
                                                                        '$no_skhun',
                                                                        '$nilai_rata',
                                                                        -- datasiswa
                                                                        '$n_ayah',
                                                                        '$tgl_ayah',
                                                                        '$agm_ayah',
                                                                        '$pkrj_ayah',
                                                                        '$almt_ayah',
                                                                        -- dataayah
                                                                        '$n_ibu',
                                                                        '$tgl_ibu',
                                                                        '$agm_ibu',
                                                                        '$pkrj_ibu',
                                                                        '$almt_ibu',
                                                                        '$nama_file'
                                                                        -- dataibu
                                                                    ) ");

                        // header('location:data_admin.php');
                        // header digunakan untuk pindah halaman ke data_admin.php
                        echo "<script>window.location='index.php?page=module/pendaftaran/index'</script>";
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