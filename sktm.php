<?php
include_once './navbar.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>surat keterangan tidak / kurang mampu</title>
    <style>
        body {
            background-image: url(assets/img/sktm.png);
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
    </style>
</head>

<body>
    <div class="content">
        <div class="title"></div>
        <img src="assets/img/sktm_pel.png" alt="">
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
        include_once './footer.php'
            ?>
    </div>
</body>

</html>