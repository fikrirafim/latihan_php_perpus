<html lang = en>
<head>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


	<meta charset="UTF-8">
	<title>Perpustakaan</title>
</head>
<body>
	<h1>Input Data Baru</h1>
	<form action = "proses_insert.php" method ="post">
	<th scope = "col">Kode Buku : </th>
	<input type = "text" name="kode_buku"><br>
	
	<th scope = "col">Nama : </th>
	<input type = "text" name="nama_buku"><br>
	
	<th scope = "col">Penerbit : </th>
	<input type = "text" name="penerbit"><br>
	
	<th scope = "col">Tahun : </th>
	<input type = "text" name="tahun"><br>
	
	
	<input type = "submit" name="" value="submit">
	<button><a href= "input.php">Reset</a> </button>
	</form>
	
	<a href="index.php">Menu Utama</a>
</body>
</html>