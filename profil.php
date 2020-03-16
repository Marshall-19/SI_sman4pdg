<section id="faculity-member" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Profil SMA Negeri 4 Kota Padang</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line">

            </div>
        </div>
    </div>
</section>
<section id="faculity-member" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="pm-staff-profile-container">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="pm-staff-profile-container">
                            <img src="logo.jpg" alt="">
                        </div>
                    </div>

                    <?php
                    include 'components/koneksi.php';
                    $ambil = $koneksi->query("SELECT * FROM bio");

                    while ($pecah = $ambil->fetch_object()) {

                    ?>
                        <p class="pm-staff-profile-name"><?php echo $pecah->nama_sekolah ?><br></p>
                        <table>
                            <thead>
                                <tr>
                                    <th width="50px"></th>
                                    <th width="50px"></th>
                                    <th width="50px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td> <?php echo $pecah->alamat ?></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td><?php echo $pecah->kecamatan ?></td>
                                </tr>
                                <tr>
                                    <td>Kabupaten / Kota </td>
                                    <td>:</td>
                                    <td><?php echo $pecah->kab_kota ?></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><?php echo $pecah->provinsi ?></td>
                                </tr>
                                <tr>
                                    <td>No. Telepon</td>
                                    <td>:</td>
                                    <td><?php echo $pecah->no_telp ?></td>
                                </tr>
                                <tr>
                                    <td>E-Mail</td>
                                    <td>:</td>
                                    <td><?php echo $pecah->e_mail ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td><?php echo $pecah->status ?></td>
                                </tr>
                                <tr>
                                    <td>Akreditasi</td>
                                    <td>:</td>
                                    <td><?php echo $pecah->akreditasi ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <center>
                            <br>

                            <h2 class="pm-staff-profile-name" style="font-style: italic" class="pm-staff-profile-bio">VISI & MISI<br></h2>
                            <h2 style="font-style: italic" class="pm-staff-profile-bio"><?php echo $pecah->visi_misi ?><br></h2>
                            <hr class="bottom-line">
                        </center>

                </div>
            <?php } ?>
            <div class="row">
                <div class="header-section text-center">
                    <h2 class="pm-staff-profile-name">GALERI SEKOLAH</h2>
                    <hr class="bottom-line">

                </div>
                <?php
                include 'components/koneksi.php';
                $ambil = $koneksi->query("SELECT * FROM galeri");
                while ($pecah = $ambil->fetch_object()) {

                ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box text-center">
                            <div class="icon-text">
                                <img style="width: 250px; height: 200px" alt="" src="admin/assets/galeri/<?php echo $pecah->gambar ?>"><br>
                            </div>
                            <p style="font-style: italic"><?php echo $pecah->deskripsi ?></p>
                        </div>
                    </div>

                <?php } ?>
                

            </div>
            <br><br><br>
            </div>
        </div>
</section>