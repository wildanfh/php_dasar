<?php
// SESSION adalah mekanisme penyimmpanan informasi ke dalam variabel agar bisa digunakakn di lebih dari satu halaman.
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: video_20/login.php");
  exit;
}
require 'video_20/functions.php';




$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM buku"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET["p"])) ? $_GET["p"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;



$books = query("SELECT * FROM buku LIMIT $awalData, $jumlahDataPerhalaman");

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
  <link rel="stylesheet" href="video_20/style.css">
</head>

<body>

  <div class="container">
    <h2>Daftar Buku Tere Liye Bumi Series</h2>
    <form action="" method="post">
      <input type="text" name="keyword" placeholder="masukkan keyword" autocomplete="off" size="40" class="search">
      <button type="submit" name="cari" class="cari">Cari</button>
    </form>
    <a href="video_20/logout.php" class="logout">Logout</a>
    <a href="video_20/tambah.php" class="tambah">Tambah Data Buku</a>

    <?php if($halamanAktif > 1) : ?>
      <a href="?p=<?= $halamanAktif - 1; ?>">&lt</a>
    <?php endif; ?>
 

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
      <?php if ($i == $halamanAktif) : ?>
        <a href="?p=<?= $i; ?>" style="font-weight: bold;"><?= $i; ?></a>
        <?php else : ?>
          <a href="?p=<?= $i; ?>"><?= $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman) : ?>
      <a href="?p=<?= $halamanAktif + 1; ?>">&gt</a>
    <?php endif; ?>

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
            <a href="video_20/ubah.php?id=<?= $book["id"]; ?>" class="ubah">Ubah</a>
            <a href="video_20/hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('yakin?');" class="hapus">Hapus</a>
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
  <script src="video_21/script.js"></script>
</body>

</html>