<?php
$buku = array(
  [
    "judul" => "Bumi",
    "isbn" => "978-602-03-0112-9",
    "terbit" => "Januari 2014",
    "halaman" => "440 halaman",
    "gambar" => "img/bumi.jpg",
  ],
  [
    "judul" => "Bulan",
    "isbn" => "978-602-03-3294-9",
    "terbit" => "Januari 2015",
    "halaman" => "400 halaman",
    "gambar" => "img/bulan.jpg",
  ],
  [
    "judul" => "Matahari",
    "isbn" => "978-602-033-211-6",
    "terbit" => "Juli 2016",
    "halaman" => "390 halaman",
    "gambar" => "img/matahari.jpg",
  ],
  [
    "judul" => "Bintang",
    "isbn" => "978-602-035-117-9",
    "terbit" => "Juni 2017",
    "halaman" => "392 halaman",
    "gambar" => "img/bintang.jpg",
  ],
  [
    "judul" => "Ceros & Batozar",
    "isbn" => "602-038-591-4",
    "terbit" => "Mei 2018",
    "halaman" => "376 halaman",
    "gambar" => "img/cerosbatozar.jpg",
  ],
  [
    "judul" => "Komet",
    "isbn" => "978-602-038-593-8",
    "terbit" => "Mei 2018",
    "halaman" => "384 halaman",
    "gambar" => "img/komet.jpg",
  ],
  [
    "judul" => "Komet Minor",
    "isbn" => "978-602-062-339-9",
    "terbit" => "Maret 2019",
    "halaman" => "376 halaman",
    "gambar" => "img/kometminor.jpg",
  ],
  [
    "judul" => "Selena",
    "isbn" => "978-602-063-951-2",
    "terbit" => "Maret 2020",
    "halaman" => "368 halaman",
    "gambar" => "img/selena.jpg",
  ],
  // Selena
  // 978-602-063-951-2
  // Maret 2020
  // 368 halaman
  // img/selena.jpg

// Lumpu
// 978-602-065-228-3
// April 2021
// 368 halaman
// img/lumpu.jpg
  [
    "judul" => "Nebula",
    "isbn" => "978-602-063-953-6",
    "terbit" => "Maret 2020",
    "halaman" => "376 halaman",
    "gambar" => "img/nebula.jpg",
  ],
  [
    "judul" => "Lumpu",
    "isbn" => "978-602-065-228-3",
    "terbit" => "April 2021",
    "halaman" => "368 halaman",
    "gambar" => "img/lumpu.jpg",
  ],
  [
    "judul" => "Si Putih",
    "isbn" => "978-602-065-22",
    "terbit" => "April 2021",
    "halaman" => "376 halaman",
    "gambar" => "img/siputih.jpg",
  ],
  [
    "judul" => "SagaraS",
    "isbn" => "978-623-97262-5-6",
    "terbit" => "Februari 2022",
    "halaman" => "384 halaman",
    "gambar" => "img/sagaras.jpeg",
  ],
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bumi Series</title>
  <style>
    img {
      width: 100px; height: 150px;
      border-radius: 5px; margin-bottom: 10px;
      object-fit: cover; margin-left: 10%;
    }
    .container { display: grid; grid-template-columns: repeat(2, 50%); }

    body { background-color: #eee; color: #333; }
    h2 { text-align: center; }
  </style>
</head>
<body>
  <h2>Bumi Series Tere Liye</h2>
 <div class="container">
  <?php foreach($buku as $bk) : ?>
   <ul>
       <img src="<?= $bk["gambar"] ?>" alt="buku">
       <li>Judul Buku : <?= $bk["judul"] ?></li>
       <li>ISBN : <?= $bk["isbn"] ?></li>
       <li>Tahun Terbit : <?= $bk["terbit"] ?></li>
       <li>Jumlah Halaman : <?= $bk["halaman"] ?></li>
    </ul>
  <?php endforeach; ?>
 </div>
</body>
</html>