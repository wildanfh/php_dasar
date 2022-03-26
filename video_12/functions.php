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

?>