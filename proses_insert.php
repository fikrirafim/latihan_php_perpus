<?php
	include  "koneksi.php";
	
	$kode_buku = $_POST['kode_buku'];
	$nama_buku = $_POST['nama_buku'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	
	$sql = mysqli_query($conn,"insert into buku values('$kode_buku','$nama_buku','$penerbit','$tahun');");
	
	if($sql){
		header("location:index.php");
	}else{
		echo"gagal";
	}
?>