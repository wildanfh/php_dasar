<title>Database & MySQL</title>
<?php 

// primary key adalah sebuah data, yang dapat merepresentasikan (mewakilkan) satu baris record secara unik.

// istilah yang sering muncul dalam database
// filed / column
// row
// key
  // primary key
  // foreign key
// auto increment
// relationship
// normalization

//! sintaks sql
//? show databases;
// melihat isi file yang berada dalam htdocs
//? create database namadatabasenya;
// membuat database baru
//? use namadatabase;
// masuk ke salah satu database
//?create table namatable (isitable1, isitable2);
// membuat isi table, setiap datanya dipisahkan oleh koma.
//? show tables;
// melihat table dalam suatu database
//? describe namatable;
// melihat isi table dalam suatu database
//? insert into namatable values (data1, data2);
// memasukkan data kedalam table
//? select * from namatable;
// menampilkan isi data dari table
//? select judultable from namatable;
// menampilkan data tertentu dari table
//? select * from namatable where judultable = 'isinyaapa';
// menampilkan data 1 field dari table
//? update namatable set judultable = 'isinyaapa' where judultable = 'isinyaapa';
// mengubah salah satu isi data dalam table
//? delete from namatable where judultable = 'isinyaapa';
// menghapus data 1 field dari table
//? drop table namatable;
// menghapus table
?>

<?php 
//? merancang database
// database : bumiseries
// tabel : buku

// id int primary key auto_increment
// judul varchar(100)
// isbn varchar(100)
// terbit varchar(100)
// halaman varchar(100)
// gambar varchar(100)

?>