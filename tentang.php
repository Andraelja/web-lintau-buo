<?php
include_once './navbar.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur</title>
    <style>
        body {
            color: #333;
            /* Warna teks utama */
            font-family: Arial, sans-serif;
            /* Jenis font */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            /* Warna latar belakang */
        }

        .container .icon-box {
            text-align: center;
            border: 1px solid #ebebeb;
            padding: 80px 20px;
            transition: all ease-in-out 0.3s;
            background: #fff;
            margin-bottom: -90px;
            /* Add margin to create space between cards */
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
    </style>
</head>

<body>

    <div class="container">
        <div class="icon-box">
            <h1>Gambaran Umum Kecamatan Lintau Buo</h1>
            <div class="desc">
                <p>Wilayah Kecamatan Lintau Buo terletak pada ketinggian antara 200 hingga 400 m di atas permukaan laut.
                    Curah hujan di wilayah kecamatan ini rata-rata 172,06 mm3 per tahun dan merupakan daerah
                    bayang-bayang hujan. Sinamar yang berhulu di Kabupaten Limapuluh Koto dan bermuara di Sungai Batang
                    Ombilin di Kabupaten Sijunjung.
                    Jumlah penduduk wilayah Kecamatan Lintau Buo adalah 19.893 jiwa, dengan jumlah penduduk Laki-laki
                    9940 jiwa dan jumlah penduduk Perempuan 9.9953 jiwa.
                    Kecamatan ini terletak pada koordinat 0.26' 13" - 0.33' 59" Lintang Selatan dan antara 100.43' 42" -
                    100.50' 24" Bujur Timur. Kecamatan Lintau Buo memiliki luas 77.31 km2.</p>
                <p>Berdasarkan posisi geografisnya, Kecamatan Lintau Buo memiliki batas-batas; sebelah utara dengan
                    Kecamatan Lintau Buo Utara, selatan dengan Kabupaten Sijunjung dan Kota Sawahlunto, barat dengan
                    Kecamatan Padang Ganting, dan timur dengan Kabupaten Sijunjung.</p>
                <img src="assets/img/peta.png" alt="">
            </div>
        </div>
    </div>
    <div class="sidebar">
        <h2>Berita Terkini</h2>

        <div class="news-item">
            <img src="assets/img/berita1.jpeg" alt="Berita 1" class="news-image">
            <a
                href="https://tanahdatar.go.id/berita/3432/mtq-lintau-buo-berjalan-lancar-tigo-jangko-pertahankan-juara-umum.html">MTQ
                LINTAU BUO BERJALAN LANCAR, TIGO JANGKO PERTAHANKAN JUARA UMUM</a>
            <p></p>
        </div>

        <div class="news-item">
            <img src="assets/img/berita2.jpeg" alt="Berita 2" class="news-image">
            <a
                href="https://tanahdatar.go.id/berita/3432/mtq-lintau-buo-berjalan-lancar-tigo-jangko-pertahankan-juara-umum.html">OPEN
                TURNAMEN POSKA CUP I 2023 LINTAU BUO DITUTUP</a>
            <p></p>
        </div>

        <div class="news-item">
            <img src="assets/img/berita2.jpeg" alt="Berita 2" class="news-image">
            <a
                href="https://tanahdatar.go.id/berita/3432/mtq-lintau-buo-berjalan-lancar-tigo-jangko-pertahankan-juara-umum.html">OPEN
                TURNAMEN POSKA CUP I 2023 LINTAU BUO DITUTUP</a>
            <p></p>
        </div>

        <div class="news-item">
            <img src="assets/img/berita2.jpeg" alt="Berita 2" class="news-image">
            <a
                href="https://tanahdatar.go.id/berita/3432/mtq-lintau-buo-berjalan-lancar-tigo-jangko-pertahankan-juara-umum.html">OPEN
                TURNAMEN POSKA CUP I 2023 LINTAU BUO DITUTUP</a>
            <p></p>
        </div>

        <div class="news-item">
            <img src="assets/img/berita2.jpeg" alt="Berita 2" class="news-image">
            <a
                href="https://tanahdatar.go.id/berita/3432/mtq-lintau-buo-berjalan-lancar-tigo-jangko-pertahankan-juara-umum.html">OPEN
                TURNAMEN POSKA CUP I 2023 LINTAU BUO DITUTUP</a>
            <p></p>
        </div>

        <div class="news-item">
            <img src="assets/img/berita2.jpeg" alt="Berita 2" class="news-image">
            <a
                href="https://tanahdatar.go.id/berita/3432/mtq-lintau-buo-berjalan-lancar-tigo-jangko-pertahankan-juara-umum.html">OPEN
                TURNAMEN POSKA CUP I 2023 LINTAU BUO DITUTUP</a>
            <p></p>
        </div>

        <div class="news-item">
            <img src="assets/img/berita2.jpeg" alt="Berita 2" class="news-image">
            <a
                href="https://tanahdatar.go.id/berita/3432/mtq-lintau-buo-berjalan-lancar-tigo-jangko-pertahankan-juara-umum.html">OPEN
                TURNAMEN POSKA CUP I 2023 LINTAU BUO DITUTUP</a>
            <p></p>
        </div>
    </div>
    <div class="footer">
        <?php
        include_once './pengumuman.php'
            ?>
    </div>
    <div class="footer">
        <?php
        include_once './footer.php'
            ?>
    </div>
</body>

</html>