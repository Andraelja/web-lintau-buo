<?php include_once './navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-KTP</title>
    <style>
        body {
            background-image: url(assets/img/ktp.png);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .content {
            display: flex;
            flex-direction: column;
            width: 80%;
        }

        .sidebar {
            width: 30%;
            margin-left: 20px;
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
        }

        th {
            background-color: #ffc451;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        td:nth-child(odd) {
            background-color: green;
        }

        td:nth-child(even) {
            background-color: red;
        }

        td:last-child {
            background-color: cyan;
        }

        .footer {
            width: 100%;
            height: 1px;
            margin-top: 20px;
        }

        .sidebar {
            width: 30%;
            margin-left: 20px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: 100px;
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

        /* .card {
            max-width: 300px;
            width: 60%;
            height: auto;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background-color: #fff;
            margin-top: 500px;
            margin-left: 50px;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-bottom: 1px solid #e0e0e0;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-description {
            color: #555;
            line-height: 1.4;
        } */
    </style>
</head>

<body>
    <div class="content">
        <div class="title">
            <h1></h1>
        </div>

        <img src="./assets/img/alur_ektp.jpg" alt="">
    </div>

    <!-- <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Placeholder Image">
        <div class="card-content">
            <h3 class="card-title">Pengumuman Pertama</h3>
            <p class="card-description">
                Deskripsi singkat dari pengumuman pertama.
            </p>
        </div>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Placeholder Image">
        <div class="card-content">
            <h3 class="card-title">Pengumuman Pertama</h3>
            <p class="card-description">
                Deskripsi singkat dari pengumuman pertama.
            </p>
        </div>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Placeholder Image">
        <div class="card-content">
            <h3 class="card-title">Pengumuman Pertama</h3>
            <p class="card-description">
                Deskripsi singkat dari pengumuman pertama.
            </p>
        </div>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Placeholder Image">
        <div class="card-content">
            <h3 class="card-title">Pengumuman Pertama</h3>
            <p class="card-description">
                Deskripsi singkat dari pengumuman pertama.
            </p>
        </div>
    </div> -->

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
        <?php include_once './footer.php'; ?>
    </div>
</body>

</html>