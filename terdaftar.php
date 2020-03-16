<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="card mb-3">
                <div class="header-section text-center">
                    <h2>List Calon Siswa Terdaftar</h2>
                    <p>SMA Negeri 4 Kota Padang TA.2020/2021</p>

                    <hr class="bottom-line">
                </div>
                <div class="card-body">

                    <br><br>
                    <div class="table-responsive" style="margin-left: 20px; margin-right: 20px">
                        <table border="" class="table">
                            <thead style="background-color: lightgreen">
                                <tr class="">
                                    <th>Id</th>
                                    <th>Nama Siswa</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>Asal Sekolah</th>
                                    <th>Alamat Sekolah</th>
                                    <th>NISN</th>
                                    <th>No. STTB</th>
                                    <th>No. SKHUN</th>
                                    <th>Nilai Rata-rata UN</th>
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

                                    </tr>
                                <?php }  ?>
                            </tbody>
                        </table>
                        <br><br><br>

                    </div>
                </div>

            </div>

        </div>
    </div>

</div>