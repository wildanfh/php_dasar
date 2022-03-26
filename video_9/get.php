<?php
// cek apakah tidak ada data di $_GET
if(!isset($_GET["judul"]) || !isset($_GET["isbn"]) || !isset($_GET["terbit"]) || !isset($_GET["halaman"]) || !isset($_GET["gambar"])) {
  // redirect
  header("Location: video_9.php");
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
  <style>
    * { list-style: none; }
    body { text-align: center; background-color: #eee;}
        img {
      width: 100px; height: 150px;
      border-radius: 5px; margin-bottom: 10px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <h2>Detail Buku</h2>
  <ul>
    <img src="<?= $_GET["gambar"]; ?>" alt="coverBuku">
    <li>Judul Buku : <?= $_GET["judul"]; ?></li>
    <li>ISBN : <?= $_GET["isbn"]; ?></li>
    <li>Tahun Terbit : <?= $_GET["terbit"]; ?></li>
    <li>Jumlah Halaman : <?= $_GET["halaman"]; ?></li>
  </ul>
  <a href="video_9.php">Kembali ke daftar buku</a>
</body>
</html>