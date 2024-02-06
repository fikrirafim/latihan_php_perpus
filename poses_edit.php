<?php
	include "koneksi.php";

$id = $_POST['id'];
$kode_buku = $_POST['kode_buku'];
$nama_buku = $_POST['nama_buku']
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

$sql = mysqli_query($conn, "update buku set kode_buku = '$kode_buku,' nama_buku = '$nama_buku, penerbit = '$penerbit', tahun = '$tahun' where kode_buku = 'id'");

if ($sql){
	header("location:index.php");
}else {echo "gagal"};
?>