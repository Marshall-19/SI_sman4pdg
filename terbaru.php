<section id="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Pengumuman Terbaru</h2>

                <p>Semua informasi terkait pendaftaran Siswa Baru SMA Negri 4 Kota Padang dapat dilihat pada web <a href="localhost:sman4pdg/">sman4pdg.com</a> <br> Pendaftaran di dibuka setelah ada pengumuman dari sekolah</p>
                <hr class="bottom-line">
            </div>

            <?php
            include "components/koneksi.php";
            $ambil = $koneksi->query("SELECT * FROM pengumuman");
            while ($pecah = $ambil->fetch_object()) {

            ?>


                <div class="feature-info">
                    <div class="fea">
                        <div class="col-md-4">
                            <div class="heading pull-right">
                                <h4><?php echo $pecah->judul ?></h4>
                                <p style="font-style: italic"><?php echo $pecah->terbit ?></p>
                                <p><?php echo substr($pecah->isi, 0, 100)  ?> . . .</p>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                </div> 
        </div>
    </div>
</section>