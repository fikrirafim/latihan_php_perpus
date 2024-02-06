<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	$delete = "delete from buku where kode_buku='$id'";
	
	$hasil = mysqli_query($conn, $delete);
	
	if($hasil){
		header("location:index.php");
	}else{
		echo "data gagal di hapus";
	}
?>