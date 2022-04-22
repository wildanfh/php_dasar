<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (register($_POST) > 0) {
    echo "<script>
            alert('User Berhasil Ditambahkan!');
            document.location.href = ../video_21.php;
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      list-style-type: none;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    body {
      display: flex;
      height: 100vh;
    }

    .container {
      width: 300px;
      margin: auto;
      background-color: #eee;
      padding: 10px;
      border-radius: 3px;
    }

    h2 {
      margin-bottom: 21px;
      text-align: center;
    }

    input {
      margin-bottom: 10px;
    }

    button {
      padding: 3px 6px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Form Registrasi</h2>
    <ul>
      <form action="" method="post">
        <li>
          <label for="username">Username :</label>
          <input type="text" id="username" name="username">
        </li>
        <li>
          <label for="password">Password :</label>
          <input type="password" id="password" name="password">
        </li>
        <li>
          <label for="password2">Konfirmasi Password :</label>
          <input type="password" id="password2" name="password2">
        </li>
        <li>
          <button type="submit" name="register">Register</button>
        </li>
      </form>
    </ul>
  </div>
</body>

</html>