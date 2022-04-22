<?php
usleep(500000);
require 'functions.php';
$keyword = $_GET["search"];

$query = "SELECT * FROM buku
            WHERE 
            judul LIKE '%$keyword%' OR
            isbn LIKE '%$keyword%' OR
            terbit LIKE '%$keyword%' OR
            halaman LIKE '%$keyword%'
";
$books = query($query);
?>

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
        <a href="video_23/ubah.php?id=<?= $book["id"]; ?>" class="ubah">Ubah</a>
        <a href="video_23/hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('yakin?');" class="hapus">Hapus</a>
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