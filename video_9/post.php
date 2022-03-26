<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
  <style>
    body {
      filter: invert(100%);
      background-color: #333;
    }
  </style>
</head>
<body>
  <?php if(isset($_POST["submit"])) : ?>
    <h2>Selamat Datang <?= $_POST["nama"]; ?></h2>
  <?php endif; ?>
  <form method="post">
    <!-- form jika method dan action tidak ditulis, maka ada nilai default yang dikirim. -->
    <!-- untuk method get, -->
    <!-- untuk action self -->
    <li>
      <label for="nama" id="nama">Masukkan Nama :</label>
     <input type="text" name="nama">
    </li>
    <button type="submit" name="submit">Kirim</button>
  </form>
</body>
</html>