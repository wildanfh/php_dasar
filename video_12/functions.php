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
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($post) {
  global $conn;

  // ambil data dari tiap elemen dalam form

  $judul = htmlspecialchars($post["judul"]);
  $isbn = htmlspecialchars($post["isbn"]);
  $terbit = htmlspecialchars($post["terbit"]);
  $halaman = htmlspecialchars($post["halaman"]);
  $gambar = htmlspecialchars($post["gambar"]);

  // query insert data
  $query = "INSERT INTO buku
  VALUES
('', '$judul', '$isbn', '$terbit', '$halaman', '$gambar')
";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id) {
  global $conn;
  // hapus data tabel
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

  return mysqli_affected_rows($conn);
}