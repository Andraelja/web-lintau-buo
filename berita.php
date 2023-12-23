<?php include_once './navbar.php'; ?>
<style>
    .services{
        margin-top: 100px;
    }

    .icon-box {
        margin-bottom: 20px;
    }

    .icon-box img {
        width: 100%;
        height: 200px; /* Sesuaikan tinggi gambar sesuai kebutuhan Anda */
        object-fit: cover; /* Untuk mempertahankan aspek rasio gambar */
    }

    .icon-box h4,
    .icon-box p {
        /* Pastikan ukuran konten tetap pada setiap card */
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>
<!-- ======= Berita Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <p>Berita Kecamatan</p>
        </div>

        <div class="row">
            <?php
            include "../webpbl-main/backend/koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM berita");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="img-berita">
                            <img src="backend/foto/<?php echo $data['foto']; ?>" alt="">
                        </div>
                        <h4><a href="<?php echo $data['judul']; ?>"><?php echo $data['judul']; ?></a></h4>
                        <p><?php echo substr($data['comment'], 0, 100); ?></p>
                        <p><a href="<?php echo $data['link']; ?>">Baca Selengkapnya</a></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section><!-- End berita Section -->

<?php include_once './footer.php'; ?>
