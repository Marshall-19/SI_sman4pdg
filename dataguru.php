<section id="faculity-member" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Data Guru</h2>
                <p>SMA Negeri 4 Kota Padang</p>
                <hr class="bottom-line">
            </div>
            <?php
            include 'components/koneksi.php';
            $ambil = $koneksi->query("SELECT * FROM dataguru");
            while ($pecah = $ambil->fetch_object()) {

            ?>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="pm-staff-profil-container">
                        <div class="pm-staff-profile-image-wrapper text-center">
                            <div class="pm-staff-profile-image">
                                <img src="admin/assets/poto/<?php echo $pecah->poto ?>" alt="" class="img-thumbnail img-circle" />
                            </div>
                        </div>
                        <div class="pm-staff-profile-details text-center">
                            <table>
                                <thead>
                                    <th width="80px"></th>
                                    <th width="80px"></th>
                                    <th width="80px"></th>
                                </thead>
                                <tbody>
                                    <tr align="left">
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>
                                            <p class="pm-staff-profile-bio"><?php echo $pecah->nama ?></p>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>
                                            <p class="pm-staff-profile-bio"><?php echo $pecah->ttl ?></p>
                                        </td>
                                    </tr align="left">
                                    <tr align="left">
                                        <td>Mata Pelajaran</td>
                                        <td>:</td>
                                        <td>
                                            <p class="pm-staff-profile-bio"><?php echo $pecah->mapel ?></p>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td>Status Pengajar</td>
                                        <td>:</td>
                                        <td>
                                            <p class="pm-staff-profile-bio"><?php echo $pecah->status ?></p>
                                        </td>
                                    </tr>
                                    
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            
                        </div>
                    </div>
                </div>
            <?php } ?>
            <hr class="bottom-line">

        </div>
        
    </div>
</section>