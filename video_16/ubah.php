<?php
require 'functions.php';

$id = $_GET["id"];

$book = query("SELECT * FROM buku WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Diubah');
          document.location.href = '../video_16.php';
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Diubah');
          document.location.href = '../video_16.php';
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
  <title>Ubah Data</title>
  <link rel="stylesheet" href="tambah.css">
</head>

<body>
  <div class="container">
    <h2>Ubah Data</h2>
    <ul>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $book["id"]; ?>">
        <li>
          <label for="judul">Judul Buku :</label>
          <input type="text" name="judul" id="judul" value="<?= $book["judul"] ?>" required>
        </li>
        <li>
          <label for="isbn">ISBN :</label>
          <input type="text" name="isbn" id="isbn" value="<?= $book["isbn"] ?>" required>
        </li>
        <li>
          <label for="terbit">Tahun Terbit :</label>
          <input type="text" name="terbit" id="terbit" value="<?= $book["terbit"] ?>" required>
        </li>
        <li>
          <label for="halaman">Jumlah Halaman :</label>
          <input type="text" name="halaman" id="halaman" value="<?= $book["halaman"] ?>" required>
        </li>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" value="<?= $book["gambar"] ?>" required>
        </li>
        <li>
          <button type="submit" name="submit">Ubah Data</button>
        </li>
      </form>
    </ul>
  </div>
</body>

</html>
</body>

</html>