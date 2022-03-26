<?php
//! Built-in Function
//? berhubungan dengan waktu
// date()
// untuk mmenampilkan tanggal dengan format tertentu
echo date('l, d-M-Y.');

// time()
// UNIX Timestamp / EPOCH Time / waktu komputer
// detik yang berlalu sejak 1 Januari 1970
echo "<br>".time();
echo "<br>".date('l, d-M-Y', time()-60*60*24*100);
// mktime(0,0,0,0,0,0)
// membuat sendiri detik
// dengan parameter 
// jam, menit, detik, bulan, tanggal, tahun
echo "<br>".date('l, d-M-Y', mktime(0,0,0,5,8,2003));

// strtotime()
// kebalikan dari mktime()
echo "<br>".date('l', strtotime("30 jan 2005"));

//? berhubungan dengan string
// strlen()
// strcmp()
// explode()
// htmlspecialchars()

//? utility (fungsi bantuan)
// var_dump()
// isset()
// empty()
// die()
// sleep()

//! User-Defined Function
function salam($waktu ="Datang", $nama ="Admin") {
  return "Selamat $waktu, $nama";
}
// jika memiliki 2 parameter dan hanya diisi salah satu, maka akan terjadi error. untuk mengatasi ini, di parameternya bisa diberikan nilai default.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Function</title>
</head>
<body>
  <h2><?= salam("Pagi", "Saya") ?></h2>
</body>
</html>