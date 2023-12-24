<?php
include_once './navbar.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .content-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin-right: 200px;
        }

        .header {
            background-color: #ffc451;
            color: white;
            text-align: center;
            padding: 20px 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .content {
            padding-bottom: 20px;
        }

        .content p {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .content ol {
            padding-left: 20px;
        }

        .sidebar {
            width: 30%;
            margin-left: 20px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: 120px;
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

        .footer {
            
            color: white;
            text-align: center;
            padding: 10px 0;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="content-container">
        <div class="header">
            <h1>Visi</h1>
        </div>

        <div class="content">
            <p>Terwujudnya pelayanan prima yang profesional, aktual, dan kredibel di kecamatan Lintau Buo</p>
        </div>

        <div class="header">
            <h1>Misi</h1>
        </div>

        <div class="content">
            <ol>
                <li>Reformasi Birokrasi dalam Rangka Meningkatkan Pelayanan Publik</li>
                <li>Mewujudkan Prilaku Budya Birokrasi yang Bersih Produktif, Efisiensi, dan Tanggung Jawab</li>
                <li>Berusaha Menciptakan Sistem Kelembagaan Pemerintah yang Mendukung Terwujudnya Profesionalisme,
                    Transparansi, dan Partisipasi Masyarakat dalam Penyelenggaraan Pembangunan, Pemberdayaan, dan
                    Pelayanan kepada Masyarakat</li>
            </ol>
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
        <?php include_once './pengumuman.php'; ?>
    </div>
    <div class="footer">
        <?php include_once './footer.php'; ?>
    </div>
</body>

</html>
