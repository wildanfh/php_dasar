<?php
require 'functions.php';


if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      header("Location : tambah.php");
      exit;
    }
    $error = true;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    label {
      display: block;
      margin-bottom: 5px;
    }

    body {
      height: 100vh;
      display: flex;
    }

    .container {
      margin: auto;
      padding: 10px;
    }

    input {
      margin-bottom: 10px;
      display: block;
    }
  </style>
</head>

<body>
  <?php if (isset($error)) : ?>
    <p>Username / Password Salah !</p>
  <?php endif; ?>
  <div class="container">
    <h2>Halaman Login</h2>
    <form action="" method="post">
      <label for="username">Username : </label>
      <input type="text" name="username" id="username">
      <label for="password">Password : </label>
      <input type="password" name="password" id="password">
      <button type="submit" name="login">Login</button>
    </form>
    <a href="registrasi.php">Register</a>
  </div>
</body>

</html>