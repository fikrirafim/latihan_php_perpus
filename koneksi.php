<?php
	$conn = mysqli_connect("localhost","root","","perpustakaan");
	
	if(!$conn){
		echo "gagal masuk database!";
	}
?>