<?php
//! array
// variabel yang dapat menampung banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

//? membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis");
// cara baru
$bulan = ["Januari", "Februari", "Maret", "April"];
$arr = ["Nama", 123, true, [1,2,3]];

//? menampilkan array
// var_dump(), print_r()
var_dump($arr);
echo "<br>";
print_r($bulan);

//? menampilkan 1 elemen pada array
echo "<br>".$bulan[0];
echo "<br>".$bulan[1];
echo "<br>";

//? menambahkan elemen baru pada array
echo "<br>".var_dump($hari);
$hari[] = "Jum'at";
echo "<br>".var_dump($hari);

// Pengulangan pada array
// for / foreach()
$angka = [2,7,5,4,9,7,3,8];
?>

<?php 
// Array Numerik
$santri = array(
  ["Wildan Firdaus", "09647352", "Teknik Informatika", "wildan@gmail.com"],
  ["Hudzaifah Ash Shiddiq", "09647462", "Desain Graifs", "hudza@gmail.com"],
  ["Abdul Aziz", "09647472", "Jurusan Multimedia", "aziz@gmail.com"]
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Array</title>
  <style>
    .kotak {
      width: 50px; height: 50px;
      background: silver; display: grid;
      place-items: center; float: left;
      margin: 3px; border-radius: 3px;
    }

    .clear { clear: both; }
  </style>
</head>
<body>
<?php foreach($angka as $a) :?>
  <div class="kotak"><?= $a; ?></div>
  <?php endforeach; ?>
  <div class="clear"></div>

  <h2>Daftar Santri</h2>
  <ul>
    <?php foreach($santri as $sntr) : ?>
      <li><?= $sntr[1]; ?></li>
      <?php endforeach; ?>
  </ul>
  <?php foreach($santri as $sntr) : ?>
  <ul>
      <li>Nama : <?= $sntr[0]; ?></li>
      <li>NIK : <?= $sntr[1]; ?></li>
      <li>Jurusan : <?= $sntr[2]; ?></li>
      <li>Email : <?= $sntr[3]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>