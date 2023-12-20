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
    width: 100%;
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

  .footer {
    margin-top: 20px;
  }
</style>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <h1>Data Pegawai</h1>
        <table border="1" width="100%">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </table>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Jabatan</th>
              <th>NIK</th>
              <th>Foto</th>
            </tr>
          </thead>
          <?php 
          include "koneksi.php";
          $query = mysqli_query($koneksi, "SELECT * FROM pegawai");
          $no = 1;
          while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $data['nama_pegawai']?></td>
              <td><?= $data['jenis_kelamin']?></td>
              <td><?= $data['jabatan']?></td>
              <td><?= $data['deskripsi']?></td>
              <td><img src="backend/foto/<?php echo $data['foto'] ?>" width="45" height="50"></td>
              <!-- <td>
                <a href="?page=pegawai/edit_pegawai&id=<?php echo $data['id']; ?>" class="btn btn-info btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                  </span>
                </a>   
                <a href="?page=pegawai/hapus_pegawai&id=<?php echo $data['id']; ?>" class="btn btn-primary btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                  </span>
                </a>
              </td> -->
            </tr>
            <?php 
            $no++;
          }     
          ?>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <?php include_once './footer.php'; ?>
</div>
