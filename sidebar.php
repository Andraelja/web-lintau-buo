<style>
    body {
        background-color: grey;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100vh;
        margin: 0;
        padding: 20px;
        /* Tambahkan ruang di sekitar konten */
    }

    .content {
        display: flex;
        flex-direction: column;
        width: 70%;
        /* Atur lebar konten di sebelah kiri */
    }

    .sidebar {
        width: 30%;
        /* Atur lebar sidebar di sebelah kanan */
        margin-left: 20px;
        /* Tambahkan margin antara konten dan sidebar */
    }

    h1 {
        color: black;
    }

    .title {
        text-align: center;
        margin-top: 100px;
    }

    table {
        width: 100%;
        border: 1px solid black;
        margin-top: 20px;
        /* Atur margin atas sesuai kebutuhan */
    }

    th {
        background-color: #ffc451;
        color: white;
        padding: 10px;
    }

    td {
        padding: 10px;
    }

    /* Atur warna latar belakang kolom sesuai kebutuhan */
    td:nth-child(odd) {
        background-color: green;
    }

    td:nth-child(even) {
        background-color: red;
    }

    td:last-child {
        background-color: cyan;
    }

    /* Gaya untuk footer */
    .footer {
        width: 100%;
        height: 1px;
        /* Sesuaikan dengan tinggi footer jika diperlukan */
        margin-top: 20px;
        /* Tambahkan margin atas footer */
    }

    .sidebar {
            width: 30%;
            margin-left: 20px;
            background-color: white;
            margin-top: 100px;
            border: 1px solid #ebebeb;
            padding: 10px 20px;
        }

        .news-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 40px;
        }

        .news-image {
            width: 80px;
            height: auto;
            margin-right: 10px;
        }

        .news-item .news-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .news-item h3,
        .news-item p {
            margin: 0;
            font-size: 20px;
        }

        .news-item p {
            flex-grow: 1;
        }

        .news-image img {
        width: 100%; /* Mengatur lebar gambar agar sesuai dengan parent */
        height: auto; /* Mengatur tinggi agar proporsi gambar tetap terjaga */
    }
</style>


<!-- Sidebar -->
<div class="sidebar">
    <?php include_once './navbar.php'; ?>

    <style>
        /* Gaya CSS untuk sidebar */
        /* ... (Gaya CSS yang sudah Anda miliki sebelumnya) */
    </style>

    <!-- Konten services -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Services</h2>
                <p>Berita Kecamatan</p>
            </div>

            <div class="row">
                <!-- Konten berita -->
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
</div>
<!-- End Sidebar -->
