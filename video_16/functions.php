<?php
// mysqli_connect("nama host", "username", "password", "nama database");
use LDAP\Result;

$conn = mysqli_connect("localhost", "root", "", "bumiseries");

// modular code
// memasukkannya ke dalam function
function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($post)
{
  global $conn;

  // ambil data dari tiap elemen dalam form

  $judul = htmlspecialchars($post["judul"]);
  $isbn = htmlspecialchars($post["isbn"]);
  $terbit = htmlspecialchars($post["terbit"]);
  $halaman = htmlspecialchars($post["halaman"]);
  $gambar = upload();

  if (!$gambar) {
    echo "<script>
    alert('Gambar Belum Diupload!');
    </script>";
    return false;
  }

  // query insert data
  $query = "INSERT INTO buku
  VALUES
('', '$judul', '$isbn', '$terbit', '$halaman', '$gambar')
";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function upload()
{
  $namaFile = $_FILES["gambar"]["name"];
  $ukuranFile = $_FILES["gambar"]["size"];
  $error = $_FILES["gambar"]["error"];
  $tmpName = $_FILES["gambar"]["tmp_name"];

  // cek apakah gambar sudah diupload atau belum
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  // kalo gambar belum diupload
  if ($error === 4) {
    return false;
  }


  // kalo yang diupload bukan gambar
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
    alert('Yang Anda Upload Bukan Gambar!');
    </script>";
    return false;
  }

  // batasi ukuran file
  if ($ukuranFile > 1000000) {
    echo "<script>
    alert('Ukuran Gambar Terlalu Besar!');
    </script>";
    return false;
  }

  // kalo lolos pengecekan
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  move_uploaded_file($tmpName, '../img/'.$namaFileBaru);

  return $namaFileBaru;
}

function hapus($id)
{
  global $conn;
  // hapus data tabel
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($post)
{
  global $conn;

  // ambil data dari tiap elemen dalam form
  $id = $post["id"];
  $judul = htmlspecialchars($post["judul"]);
  $isbn = htmlspecialchars($post["isbn"]);
  $terbit = htmlspecialchars($post["terbit"]);
  $halaman = htmlspecialchars($post["halaman"]);
  $gambarLama = htmlspecialchars($post["gambarlama"]);

  if($_FILES["gambar"]["error"] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

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

function cari($keyword)
{

  $query = "SELECT * FROM buku
            WHERE 
            judul LIKE '%$keyword%' OR
            isbn LIKE '%$keyword%' OR
            terbit LIKE '%$keyword%' OR
            halaman LIKE '%$keyword%'
  ";
  return query($query);
}
