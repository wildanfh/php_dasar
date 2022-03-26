<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>video 4</title>
</head>
<body>
  <?php 
  // ini komentar

  // standar output
  // echo, print
  echo "Wildan Firdaus <br>";
  print "123 <br>";
  // print_r
  print_r("Wildan Firdaus <br>");
  // var_dump
  var_dump("Wildan Firdaus <br>");

  // penulisan sintaks PHP
  // PHP dalam HTML
  // HTML dalam PHP
  ?>
  <!-- PHP dalam HTML -->
  <h1>Halo, Selamat Datang <?php echo "Wildan"; ?></h1>
  <p><?php  echo "ini adalah paragraf" ?></p>

  <?php
  // HTML dalam PHP
  echo "<h1>Halo, Selamat datang Wildan</h1>";
  
  // Variabel dan Tipe Data
  // Variabel
  // tidak boleh diawali angka, tapi boleh mengandung angka
  $nama = "Wildan Firdaus";

  // petik dua bisa digunakan untuk interpolasi
  // kalo petik satu gak bisa
  echo "Halo, nama saya $nama <br>";

  // Operator
  // Aritmatika
  //  +, -, *, /
  $a = 10;
  $b = 20;
  echo $a * $b;

  // penggabung string / concaatination / concat
  $nama_depan = "Wildan";
  $nama_belakang = "Firdaus";
  echo "<br>".$nama_depan." ".$nama_belakang;

  // Assingment
  // =, +=, -=,*=, /=, %=, .=
  $x = 1;
  echo "<br>".$x += $x;

  // contoh_2
  $nama .= " Alhafidz";
  echo "<br>".$nama;

  // Perbandingan
  // <, >, <=, >=, ==, !=
  echo "<br>";
  var_dump(1 == "1");

  // Identitas
  // ===, !==
  echo "<br>";
  var_dump(1 === "1");

  // Logika
  // &&, ||, !
  $z = 10;
  echo "<br>";
  var_dump($z < 12 && $z % 2 == 0);

  

















  ?>

</body>
</html>