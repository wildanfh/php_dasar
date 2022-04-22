<?php 
require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "<script>
          alert('Data Berhasil Dihapus');
          document.location.href = '../video_17.php';
          </script>";
  } else {
    echo mysqli_affected_rows($conn);
    echo "<script>
          alert('Data Gagal Dihapus');
          document.location.href = '../video_17.php';
          </script>";
}
