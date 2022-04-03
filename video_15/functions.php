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

function ubah($post) {
  global $conn;

    // ambil data dari tiap elemen dalam form
  $id = $post["id"];
  $judul = htmlspecialchars($post["judul"]);
  $isbn = htmlspecialchars($post["isbn"]);
  $terbit = htmlspecialchars($post["terbit"]);
  $halaman = htmlspecialchars($post["halaman"]);
  $gambar = htmlspecialchars($post["gambar"]);

  $query = "UPDATE buku SET
              judul = '$judul',
              isbn = '$isbn',
              terbit = '$terbit',
              halaman = '$halaman',
              gambar = '$gambar'
              WHERE id = $id
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  
  $query = "SELECT * FROM buku
            WHERE 
            judul LIKE '%$keyword%' OR
            isbn LIKE '%$keyword%' OR
            terbit LIKE '%$keyword%' OR
            halaman LIKE '%$keyword%'
  ";
  return query($query);
}