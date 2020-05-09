<?php  

//connect ke database
$conn_database = mysqli_connect("localhost", "root", "", "caffearkademy");

//cek data sudah di submit
if( isset($_POST["submit"]) ) {

	$cashier = $_POST["cashier"];
	$product = $_POST["product"];
	$category = $_POST["category"];
	$price = $_POST["price"];

	$querry = "INSERT INTO pesanan VALUES ('', '$cashier', '$product', '$category', '$price')";
	mysqli_query($conn_database, $querry);

	if (mysqli_affected_rows($conn_database) > 0 ) {
		print "
			<script>
				alert('Pesanan Berhasil Ditambahkan');
				document.location.href = 'tampilan.php';
			</script>
		";
	}  else {
		print "
			<script>
				alert('Pesanan Gagal Ditambahkan');
				document.location.href = 'ubah.php';
			</script>
		";
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pesanan</title>
</head>
<body>
	<h1>Daftar Tambah Pesanan</h1>
	<form method="post">
		<table>	
			<tr>
				<td><label for="cashier">Nama Cashier</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="cashier" id="cashier" required></td>	
			</tr>
			<tr>
				<td><label for="product">Product</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="product" id="product" required></td>	
			</tr>
			<tr>
				<td><label for="category">Category</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="category" id="category" required></td>	
			</tr>
			<tr>
				<td><label for="price">Price</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="price" id="price" required></td>	
			</tr>
		</table>
		<button type="submit" name="submit">Tambah Pesanan</button>
	</form>
	<br><br>
	<a href="tampilan.php">Kembali</a>

</body>
</html>