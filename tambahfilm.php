<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$genre = $_POST['genre'];
$sinopsis = $_POST['sinopsis'];
$gd = $_POST['gd'];
$foto = $_POST['foto'];

// menginput data ke database
mysqli_query($koneksi,"insert into film values('','$judul','$tahun','$genre','$sinopsis','$gd','$foto')");

// mengalihkan halaman kembali ke index.php
header("location:menuadmin.php");

?>