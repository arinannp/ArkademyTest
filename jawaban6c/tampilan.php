<?php  
//connect ke database
$conn_database = mysqli_connect("localhost", "root", "", "caffearkademy");

//ambil tabel pesanan dari database
$get1 = mysqli_query($conn_database, "SELECT * FROM pesanan");

//ambil data pada tabel pesanan
//$get2 = mysqli_fetch_assoc($get1);

function cari($keyword) {
	global $conn_database;
	$querry = "SELECT * FROM pesanan WHERE 
			  cashier LIKE '$keyword%' OR 
			  product LIKE '$keyword%' OR 
			  category LIKE '$keyword%' OR 
			  price LIKE '$keyword%'";
	$get1 = mysqli_query($conn_database, $querry);

	return $get1;
}

//cek keyword pencarian
if( isset($_POST["keyword"]) ) {
	$get1 = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Caffe Arkademy</title>
	<style>
		.judul {
			margin-bottom: 50px;
			border-bottom: 5px solid grey;
		}
		.judul form .cari {
			background-color: lightgrey;
			width: 700px;
			height: 20px;
			font-color : solid black;
			margin-left: 10px;
			
		}
		.judul form .tombol {
			background-color: orange;
			width: 70px;
			height: 35px;
			font-weight: bold;
			font-size: 25px;
		}
		.judul form .tombol a {
			text-decoration: none;
			color: white;
		}
		table {
			margin: auto;
		}
		table .judultabel {
			background-color: orange;
			color: white;
		}
	</style>
</head>
<body>
	
	<table class="judul">
		<tr>
			<td><img src="arkademy.jpg"></td>
			<td><form method="post">
					<input type="text" name="keyword" class="cari" placeholder="Masukan Keyword Pencarian...">
					<button type="submit" name="submit" class="tombol"><a href="update.php">ADD</a>
					</button>
				</form>
			</td>
		</tr>
	</table>
	<br><br>
	<table border="1" cellpadding="12" cellspacing="0">
		<tr class="judultabel">
			<th>No.</th>
			<th>Cashier</th>
			<th>Product</th>
			<th>Category</th>
			<th>Price</th>
			<th>Actions</th>
		</tr>

		<?php $i = 1; ?>
		<?php while ($get2 = mysqli_fetch_assoc($get1)) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $get2["cashier"]; ?></td>
			<td><?= $get2["product"]; ?></td>
			<td><?= $get2["category"]; ?></td>
			<td><?= $get2["price"]; ?></td>
			<td><a href="ubah.php?id=<?= $get2["id"]; ?>"
				   ><img src="ubah.jpg"></a> 
				<a href="hapus.php?id=<?= $get2["id"]; ?>"
				   onclick="return confirm('Anda Yakin Akan Menghapus Pesanan Ini?');">
				   <img src="hapus.jpg"></td>
				</a>
		</tr>
		<?php $i++; ?>
		<?php endwhile; ?>

	</table>

</body>
</html>