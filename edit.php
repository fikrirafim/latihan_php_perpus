<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Edit Data Buku</title>
</head>

<body>
	<?php
		include"koneksi.php";
		
		$id = $_GET['id'];
		$sql = mysqli_query($conn,"SELECT * FROM buku WHERE kode_buku = '$id'");
		$data = mysqli_fetch_array($sql);
	?>
	
	<h1>Edit data baru</h1>
	<form action = "proses_edit.php" method = "post">
		<input type="hidden" name="id" value="<?php echo $data ['kode_buku']?>"><br>
		
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">Kode Buku		</span>
			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = "kode_buku"value="<?php echo $data ['kode_buku']?>">
		</div>
		
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">Nama	Buku	</span>
			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = "nama_buku"value="<?php echo $data ['nama_buku']?>">
		</div>
		
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">Penerbit</span>
			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = "penerbit"value="<?php echo $data ['penerbit']?>">
		</div>
		
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">Tahun</span>
			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = "tahun"value="<?php echo $data ['tahun']?>">
		</div>
		
		<input type="submit" name="" value="Go">
		<button type="delete" class="btn btn-outline-primary">Reset</button>
		
	</form>
	<button type="button" class="btn btn-outline-secondary"><a href = "index.php">back to page</a></button>
</body>
</html>