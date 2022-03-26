<?php 
require 'video_12/functions.php';
$books = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="video_12/style.css">
</head>
<body>
  <h2>Daftar Buku Tere Liye Bumi Series</h2>
  <a href="video_12/tambah.php">Tambah Data Buku</a>
  <div class="container">
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
    <?php foreach($books as $book) : ?>
    <?php if($i %2 == 0) : ?>
    <tr>
    <?php else : ?>
      <tr class="gray">
    <?php endif; ?>
      <td class="angka"><?= $i; ?></td>
      <td>
        <a href="" class="ubah">Ubah</a>
        <a href="video_12/hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('yakin?');" class="hapus">Hapus</a>
      </td>
      <td><img src="img/<?= $book["gambar"]?>" class="img"></td>
      <td class="judul"><?= $book["judul"]; ?></td>
      <td><?= $book["isbn"]; ?></td>
      <td><?= $book["terbit"]; ?></td>
      <td><?= $book["halaman"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </table>
  </div>
</body>
</html>