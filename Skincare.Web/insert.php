<?php 
include 'koneksi.php';

$id_kategori = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];

mysqli_query($koneksi,"INSERT INTO kategori VALUES('$id_kategori','$nama_kategori')");
header("location: indexkategori.php");
?>