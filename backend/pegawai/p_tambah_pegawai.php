<?php
include '../koneksi.php';

$nama_pegawai=$_POST['nama_pegawai'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$jabatan=$_POST['jabatan'];
$deskripsi=$_POST['deskripsi'];

$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];


	$path = "foto/".$nama_file;
	if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
	  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
	  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
		// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
		// Proses upload
		if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		  // Jika gambar berhasil diupload, Lakukan :
		  // Proses simpan ke Database

		  $sql = mysqli_query($koneksi,"INSERT INTO `pegawai` (`nama_pegawai`,`jenis_kelamin`,`jabatan`,`deskripsi`,`foto`) VALUES('$nama_pegawai','$jenis_kelamin','$jabatan','$deskripsi','$nama_file')"); 
		  
		  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			echo "<script> alert('Data Berhasil Ditambahkan')
			window.location.href='?page=pegawai/pegawai'
			</script>";
		  }else{
			// Jika Gagal, Lakukan :
			echo "<font style='color:red';>Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		  }
		}else{
		  // Jika gambar gagal diupload, Lakukan :
		  echo "<font style='color:red';>Maaf, Gambar gagal untuk diupload.";

		}
	  }else{
		// Jika ukuran file lebih dari 1MB, lakukan :
		echo "<font style='color:red';>Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";

	  }
	}else{
	  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
	  echo "<font style='color:red';>Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
	}
?>