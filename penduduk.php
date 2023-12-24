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
    margin-left: 1190px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-top: -1750px;
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

  .icon-box {
    width: 55%;
    border: 1px solid #ebebeb;
    padding: 20px 20px;
    transition: all ease-in-out 0.3s;
    background: #fff;
    margin-bottom: 20px;
    /* Add margin to create space between cards */
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
                <a href="<?= $data['website'] ?>">
                  <?= $data['website'] ?>
                </a>
              </td>

              <?php
              $no++;
          }
          ?>
        </table>
        <div class="about">
          <div class="icon-box">
            <h2>1. Nagari Buo</h2>
            <p>Buo merupakan salah satu nagari yang termasuk ke dalam wilayah kecamatan Lintau Buo, Kabupaten Tanah
              Datar,
              Provinsi Sumatera Barat, Indonesia.<br> Nagari ini terletak di dekat Batusangkar, ibu kota dari kabupaten
              Tanah
              Datar.</p>
            <h3>Jorong</h3>
            <p>1. Batang Buo <br>
              2. Imam Bonjol <br>
              3. Jati Tunggal <br>
              4. Kampuang Baru <br>
              5. Kampuang Tangah
              6. Ustano</p>
          </div>
        </div>

        <div class="about">
          <div class="icon-box">
            <h2>2. Nagari Pangian</h2>
            <p>Pangian merupakan salah satu nagari yang termasuk ke dalam wilayah kecamatan Lintau Buo, Tanah Datar,
              Sumatera Barat, Indonesia. Nagari ini terletak di dekat Batusangkar, ibu kota dari kabupaten Tanah Datar.
              Nagari Pangian adalah salah satu empat nagari yang berada dalam wilayah Lintau Buo.</p>
            <h3>Jorong</h3>
            <p>1. Batang Buo <br>
              2. Imam Bonjol <br>
              3. Jati Tunggal <br>
              4. Kampuang Baru <br>
              5. Kampuang Tangah
              6. Ustano</p>
          </div>
        </div>

        <div class="about">
          <div class="icon-box">
            <h2>3. Nagari Taluak</h2>
            <p>Taluk merupakan salah satu nagari yang termasuk ke dalam wilayah kecamatan Lintau Buo, Tanah Datar,
              Provinsi Sumatera Barat, Indonesia. Nagari ini terletak di dekat Batusangkar, ibu kota dari kabupaten
              Tanah Datar.</p>
            <h3>Jorong</h3>
            <p>1. Jorong Tigo Tumpuk <br>
              2. Jorong Taruko <br>
              3. Jorong Baringin Sakti <br>
              4. Jorong Aliran Sungai <br></p>
          </div>
        </div>

        <div class="about">
          <div class="icon-box">
            <h2>4. Nagari Tigo Jangko</h2>
            <p>Tigo Jangko merupakan salah satu nagari yang termasuk ke dalam wilayah kecamatan Lintau Buo, Kabupaten
              Tanah Datar, Provinsi Sumatera Barat, Indonesia. Nagari ini terletak di dekat Batusangkar, ibu kota dari
              kabupaten Tanah Datar.</p>
            <h3>Jorong</h3>
            <p>1. Jorong Abdul Rahman <br>
              2. Jorong Bukit Barisan <br>
              3. Jorong Cenderawasih <br>
              4. Jorong Gunung Seribu <br>
              5. Jorong Rajawali <br>
              6. Jorong Tuanku Lareh <br>
            </p>
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
      </div>
      <div class="footer">
        <?php include_once './footer.php'; ?>
      </div>
    </div>
  </div>
</div>