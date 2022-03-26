<?php 
// mysqli_connect("nama host", "username", "password", "nama database");

use LDAP\Result;

$conn = mysqli_connect("localhost", "root", "", "bumiseries");

// modular code
// memasukkannya ke dalam function
function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ( $row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// untuk menampilkan pesan jika error
// if(!$result) { echo "<h3>".mysqli_error($conn)."</h3>"; }

// ambil data buku dari object result
//? mysqli_fetch_row();
// mengembalikan array numerik
// $books =  mysqli_fetch_row($result);
// echo $books[0];
//? mysqli_fetch_assoc();
// mengembalikan array associatve
// $books =  mysqli_fetch_assoc($result);
// echo $books["judul"];
//? mysqli_fetch_array();
// mengembalikan array numerik maupun associative
// $books =  mysqli_fetch_array($result);
// echo $books["judul"];
//? mysqli_fetch_object();
// $books =  mysqli_fetch_object($result);
// var_dump($books->judul);

?>