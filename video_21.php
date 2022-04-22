<?php
// SESSION adalah mekanisme penyimmpanan informasi ke dalam variabel agar bisa digunakakn di lebih dari satu halaman.
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: video_21/login.php");
  exit;
}
require 'video_21/functions.php';

$books = query("SELECT * FROM buku");

// ketika tombol cari di klik
if (isset($_POST["cari"])) {
  $books = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="video_21/style.css">
</head>

<body>
  <div class="container">
    <h2>Daftar Buku Tere Liye Bumi Series</h2>
    <form action="" method="post">
      <input type="text" name="keyword" placeholder="masukkan keyword" autocomplete="off" size="40" class="search">
      <button type="submit" name="cari" class="cari">Cari</button>
    </form>
    <img src="img/loader.gif" class="loader" style="  width: 200px; position: absolute; top: 15px; left: 220px; display: none;">
    <a href="video_21/logout.php" class="logout">Logout</a>
    <a href="video_21/tambah.php" class="tambah">Tambah Data Buku</a>

    <div class="tablecon">
      <table border="1" cellpadding="10" cellspacing="0">
        <tr class="judul-tabel">
          <th>No.</th>
          <th>Aksi</th>
          <th>Cover Buku</th>
          <th>Judul</th>
          <th>ISBN</th>
          <th>Tahun Terbit</th>
          <th>Jumlah Halaman</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($books as $book) : ?>
          <?php if ($i % 2 == 0) : ?>
            <tr>
            <?php else : ?>
            <tr class="gray">
            <?php endif; ?>
            <td class="angka"><?= $i; ?></td>
            <td>
              <a href="video_21/ubah.php?id=<?= $book["id"]; ?>" class="ubah">Ubah</a>
              <a href="video_21/hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('yakin?');" class="hapus">Hapus</a>
            </td>
            <td><img src="img/<?= $book["gambar"] ?>" class="img"></td>
            <td class="judul"><?= $book["judul"]; ?></td>
            <td><?= $book["isbn"]; ?></td>
            <td><?= $book["terbit"]; ?></td>
            <td><?= $book["halaman"]; ?></td>
            </tr>
            <?php $i++ ?>
          <?php endforeach; ?>
      </table>
    </div>
  </div>
  <script src="video_21/jquery-3.6.0.min.js"></script>
  <script src="video_21/jquery.js"></script>
</body>

</html>