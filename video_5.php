<?php 
// Pengulangan
// for
for($i = 0; $i < 5; $i++) {
  echo "Hello <br>";
}

// while
$i = 0;
while($i < 5) {
  echo "Hello ";
  $i++;
}

// do.. while
// jika kondisi tidak terpenuhi akan berjalan dulu 1 kali
$i = 5;
do {
  echo "<br> Hello ";
  $i++;
} while( $i < 5);
// foreach = pengulangan khusus array



// Pengkondisian / Percabangan
// if else
$c = 20;
if( $c < 20) {
  echo "<br> benar";
  // if else if else
} else if ($c == 20) {
  echo "<br> Bingo!";
} else {
  echo "<br> salah";
}
// ternary
// switch
?>

<!-- Latihan Pengulangan dan Pengondisian -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Pengulangan </title>
  <style>
      .gray  {
        background-color: pink;
      }
  </style>
</head>
<body>
  <h2>Latihan Pengulangan dan Pengkondisian</h2>
  <table border="2" cellpadding="10" cellspacing="0">
    <?php for($i = 1; $i <= 5; $i++) : ?>
    <?php if( $i % 2 == 1 ) : ?>
      <tr>
      <?php else : ?>
      <tr class="gray">
      <?php endif; ?>
        <?php for($j = 1; $j <= 10; $j++) : ?>
        <td><?= "$i, $j" ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>
</html>