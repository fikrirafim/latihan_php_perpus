<?php
	include "koneksi.php";
	$sql = mysqli_query($conn,"select * from buku");
?>
<html>
<head>
	<title></title>
		<!--summon CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>


<div class = "container">
	<!--dp-->
	
	<h2>DataBase Pembayaran SPP</h2><br>
	
	<a href = "insert.php">Input Transaksi Baru</a>
	<table class="table table-light table-striped">
	<thead class="thead-dark">
	<tr>
		<th scope="col">Kode Buku</th>
		<th scope="col">Nama Buku</th>
		<th scope="col">Penerbit</th>
		<th scope="col">Tahun</th>
		<th scope="col" colspan="2">Aksi	</th>
    </tr>
  </thead>
  <tbody class="tbody-light">
	<?php while ($data = mysqli_fetch_array($sql)){?>
    <tr>
      
      <td><?php echo $data ['kode_buku']?></td>
      <td><?php echo $data ['nama_buku']?></td>
      <td><?php echo $data ['penerbit']?></td>
	  <td><?php echo $data ['tahun']?></td>
	  
		
	  <td><a class="btn btn-warning" href = "edit.php?id=<?php echo $data['kode_buku']?>">Edit</a></td>
	  <td><a class ="btn btn-danger" href = "delete.php?id=<?php echo $data['kode_buku']?>">Hapus</a></td>
	
	  
    </tr>
	<?php }?>
    <tr>
	
</table>
</div>

<!-- summon JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>
