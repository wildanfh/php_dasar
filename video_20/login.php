<?php
session_start();
require 'functions.php';

if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];

  $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  if ($key === hash('sha256', $row["username"])) {
    $_SESSION["login"] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: ../video_20.php");
  exit;
}

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      $_SESSION["login"] = true;

      if (isset($_POST["remember"])) {
        setcookie('id', "$row[id]", time() + 60);
        setcookie('key', hash('sha256', $row["username"]), time() + 60);
      }

      header("Location: ../video_20.php");
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

    #remember {
      display: inline-block;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Halaman Login</h2>
    <?php if (isset($error)) : ?>
      <p>Username / Password Salah !</p>
    <?php endif; ?>
    <form action="" method="post">
      <label for="username">Username : </label>
      <input type="text" name="username" id="username">
      <label for="password">Password : </label>
      <input type="password" name="password" id="password">
      <input type="checkbox" name="remember" id="remember">
      <label for="remember">Remember me</label>
      <button type="submit" name="login">Login</button>
    </form>
    <a href="registrasi.php">Register</a>
  </div>
</body>

</html>