<?php include_once './navbar.php'; ?>
<style>

  .card {
    margin-top: 100px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    border-radius: 5px;
    background-color: #f8f9fa;
  }

  .card-body {
    padding: 15px;
  }

  table {
    max-width: 600px;
    border-collapse: collapse;
    font-size: 14px;
  }

  th {
    text-align: left;
    background-color: #ffc451;
    color: white;
    padding: 8px;
  }

  td {
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  .btn {
    margin-right: 5px;
  }

  img {
    vertical-align: middle;
  }

  .sidebar {
    width: 30%;
    margin-left:1190px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-top:  -200px;
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
    margin-top: 20px;
  }
</style>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <h1>Data penduduk</h1>

        <table border="1" width="100%">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Nagari</th>
              <th>Kode Nagari</th>
              <th>Kode Kemendagri</th>
              <th>Luas Wilayah</th>
              <th>Jumlah Penduduk</th>
              <th>Website</th>
            </tr>
          </thead>
          <?php
          include "koneksi.php";
          $query = mysqli_query($koneksi, "SELECT * FROM penduduk");
          $no = 1;
          while ($data = mysqli_fetch_array($query)) {
            // var_dump($data);
            // exit;
            ?>
            <tr>
              <td>
                <?= $no; ?>
              </td>
              <td>
                <?= $data['nama_nagari'] ?>
              </td>
              <td>
                <?= $data['kode_nagari'] ?>
              </td>
              <td>
                <?= $data['kode_kemendagri'] ?>
              </td>
              <td>
                <?= $data['luas_wilayah'] ?>
              </td>
              <td>
                <?= $data['jumlah_penduduk'] ?>
              </td>
              <td>
                <?= $data['website'] ?>
              </td>

              <?php
              $no++;
          }
          ?>
        </table>
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
        <div class="announcement">
          <?php
          include_once './pengumuman.php'
            ?>
        </div>
      </div>
      <div class="footer">
        <?php include_once './footer.php'; ?>
      </div>
    </div>
  </div>