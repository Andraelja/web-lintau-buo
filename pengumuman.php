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

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127669.44821868924!2d100.69961662060224!3d-0.49361282185426353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2ad0940ddf49bd%3A0x64874caaa1bc03c3!2sKec.%20Lintau%20Buo%2C%20Kabupaten%20Tanah%20Datar%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1703087912435!5m2!1sid!2sid"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Pangian, Lintau Buo</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>kecamatanlintaubuo@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>(0752) 777 233</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
<?php include_once './footer.php'; ?>
