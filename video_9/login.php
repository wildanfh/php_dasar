<?php 
// cek apakah tombol sudah ditekan atau belum
if(isset($_POST["submit"])) {
// cek username & password
if($_POST["username"] == "admin" && $_POST["password"] == "admin") {
// jika benar, redirect ke halaman admin
  header("Location: admin.php");
  exit;
  } else {
// jika salah, tampilkan pesan kesalahan
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
     * {
       list-style-type: none; margin: 0; padding: 0;
       font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
     }
     body {
       display: grid; place-items: center;
       background-image: url(../img/bg.jpg); background-size: cover; height: 100vh;
     }
     .container {
       background-color: #ffffffaa; width: 300px;
       border-radius: 3px; padding: 10px;
     }
     p {
       color: red; font-style: italic; margin: 10px 0 10px;
     }
     h2 {
       text-align: center; margin-bottom: 20px;
     }
     li {
       margin-bottom: 15px;
     }
     label {
       font-size: 16px; font-weight: bold;
     }
     input {
       outline: none; border: none; padding: 5px;
     }
     button {
       padding: 5px 10px; background-color: silver;
       border: none; box-shadow: 1px 1px 5px #00000033;
       cursor: pointer;
     }
   </style>
 </head>
 <body>
  <div class="container">
  <h2>Login Admin</h2>
   <ul>
    <form action="" method="post">
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="submit">Login</button>
      </li>
    </form>
   </ul>
   <?php if(isset($error)) : ?>
   <p>Username / Password salah!</p>
   <?php endif; ?>
  </div>
 </body>
 </html>