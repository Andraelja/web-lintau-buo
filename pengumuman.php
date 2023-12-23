<?php include_once './navbar.php'; ?>
<style>
    .announcement{
        margin-top: 90px;
    }

    .announcement .icon-box {
        text-align: center;
        border: 1px solid #ebebeb;
        padding: 80px 20px;
        transition: all ease-in-out 0.3s;
        background: #fff;
        margin-bottom: 20px; /* Add margin to create space between cards */
    }

    .announcement .icon-box .img-galeri {
        position: relative;
        overflow: hidden;
        border-radius: 4px;
        max-height: 200px; /* Adjust the maximum height as needed */
    }

    .announcement .icon-box img {
        width: 100%;
        height: auto;
        max-height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .announcement .icon-box p {
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
        margin-top: 10px;
    }

    .announcement .icon-box:hover {
        border-color: #fff;
        box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
        transform: translateY(-10px);
    }
</style>
<!-- ======= Berita Section ======= -->
<section id="announcement" class="announcement">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <p>Pengumuman Kecamatan</p>
        </div>

        <div class="row">
            <?php
            include "../webpbl-main/backend/koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM pengumuman");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="img-berita">
                            <img src="backend/foto/<?php echo $data['foto']; ?>" alt="">
                        </div>
                        <h4><a href="<?php echo $data['link']; ?>"><?php echo $data['judul']; ?></a></h4>
                        <p><?php echo substr($data['deskripsi'], 0, 100); ?></p>
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
