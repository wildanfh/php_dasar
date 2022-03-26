<?php
//! Array Associative
// definsinya sam seperti array numerik, kecuali
// keynya adalah string yang kita buat sendiri
$santri = array(
  [
    "nama" => "Wildan Firdaus",
    "nrp" => "09647352",
    "jurusan" => "Teknik Informatika",
    "email" => "wildan@gmail.com",
    "tugas" => [80,85,90],
    "gambar" => "img/wildan.jpg"
  ],
  [
    "nama" => "Hudzaifah",
    "nrp" => "09647462",
    "jurusan" => "Desain Graifs",
    "email" => "hudza@gmail.com",
    "tugas" => [80,85,90],
    "gambar" => "img/hudza.jpg"
  ],
  [
    "nama" => "Abdul Aziz",
    "nrp" => "09647472",
    "jurusan" => "Jurusan Multimedia",
    "email" => "aziz@gmail.com",
    "tugas" => [80,85,90],
    "gambar" => "img/aziz.jpg"
  ]
);
echo $santri[0]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Associative</title>
  <style>
    img {
      width: 100px; height: 100px;
      margin-bottom: 10px; border-radius: 5px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <h1>Associative Array</h1>
  <h2>Daftar Santri</h2>
  <?php foreach($santri as $sntr) : ?>
  <ul>
      <img src="<?= $sntr["gambar"] ?>" alt="meong">
      <li>Nama : <?= $sntr["nama"] ?></li>
      <li>NRP : <?= $sntr["nrp"] ?></li>
      <li>Jurusan : <?= $sntr["jurusan"] ?></li>
      <li>Email : <?= $sntr["email"] ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>