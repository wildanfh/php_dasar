<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil ditambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = '../video_12.php';
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Ditambahkan');
          document.location.href = '../video_12.php';
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="tambah.css">
</head>

<body>
  <div class="container">
    <h2>Tambah Data</h2>
    <ul>
      <form action="" method="post">
        <li>
          <label for="judul">Judul Buku :</label>
          <input type="text" name="judul" id="judul" required>
        </li>
        <li>
          <label for="isbn">ISBN :</label>
          <input type="text" name="isbn" id="isbn" required>
        </li>
        <li>
          <label for="terbit">Tahun Terbit :</label>
          <input type="text" name="terbit" id="terbit" required>
        </li>
        <li>
          <label for="halaman">Jumlah Halaman :</label>
          <input type="text" name="halaman" id="halaman" required>
        </li>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
          <button type="submit" name="submit">Tambah Data</button>
        </li>
      </form>
    </ul>
  </div>
</body>

</html>