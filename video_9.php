<h2> Request Method $_GET & $_POST</h2>
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
    "judul" => "Nebula",
    "isbn" => "978-602-063-953-6",
    "terbit" => "Maret 2020",
    "halaman" => "376 halaman",
    "gambar" => "img/nebula.jpg",
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

<?php
//! Variable Scope / Lingkup Variabel
$x = 10;

function tampil()  {
  // gunakan keyword global untuk mengambil variabel di scope global
  global $x;
  echo $x."<br>";
}
tampil();

// variable Superglobals
// adalah variabel" yang sudah dimilki php yang bisa kita akses dimanapun dan kapanpun didalam halaman php kita
// semuanya adalah array associative

// $_GET
$_GET["judul"] = "Bumi";
$_GET["halaman"] = "440 halaman";
echo var_dump($_POST)."<br>";
// $_POST
// echo var_dump($_POST)."<br>";
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$_GET & $_POST</title>
</head>
<body>
  <h2>Daftar Buku Bumi Series Tere Liye</h2>
  <ul>
    <?php foreach($buku as $b) : ?>
    <li><a href="get.php?judul=<?=$b["judul"];?>&isbn=<?=$b["isbn"];?>&terbit=<?=$b["terbit"];?>&halaman=<?=$b["halaman"];?>&gambar=<?=$b["gambar"];?>"><?= $b["judul"]; ?></a></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>

