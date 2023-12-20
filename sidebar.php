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
        background-color: #f2f2f2;
        padding: 20px;
        margin-top: 75px;
    }

    .news-item {
        margin-bottom: 20px;
    }

    .news-image{
        width: 80px;
        height: auto;
    }

    .news-item img {
        width: 100%;
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .news-item h3 {
        margin-bottom: 5px;
    }

    .news-item p {
        font-size: 14px;
        color: #666;
    }
</style>


<div class="sidebar">
    <!-- Konten untuk sidebar di sebelah kanan -->
    <div class="sidebar">
        <h2>Berita Terkini</h2>

        <div class="news-item">
            <img src="assets/img/berita1.jpeg" alt="Berita 1" class="news-image">
            <h3>Judul Berita 1</h3>
            <p></p>
        </div>

        <div class="news-item">
            <img src="assets/img/berita2.jpeg" alt="Berita 2" class="news-image">
            <h3>Judul Berita 2</h3>
            <p></p>
        </div>

        <!-- Tambahkan lebih banyak berita jika diperlukan -->
    </div>
</div>