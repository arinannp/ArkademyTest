<?php  

//connect ke database
$conn_database = mysqli_connect("localhost", "root", "", "caffearkademy");

$id = $_GET["id"];

$query = "SELECT * FROM pesanan WHERE id = $id";
$pesanan1 = mysqli_query($conn_database, $query);
$pesanan2 = mysqli_fetch_assoc($pesanan1);


//cek data sudah di submit
if( isset($_POST["submit"]) ) {

	$cashier = $_POST["cashier"];
	$product = $_POST["product"];
	$category = $_POST["category"];
	$price = $_POST["price"];

	$querry = "UPDATE pesanan SET cashier = '$cashier', product = '$product', 
	          category = '$category', price = '$price' WHERE id = $id";
	mysqli_query($conn_database, $querry);


	if (mysqli_affected_rows($conn_database) > 0 ) {
		print "
			<script>
				alert('Pesanan Berhasil Diubah');
				document.location.href = 'tampilan.php';
			</script>
		";
	}  else {
		print "
			<script>
				alert('Pesanan Gagal Diubah');
				document.location.href = 'tampilan.php';
			</script>
		";
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah Pesanan</title>
</head>
<body>
	<h1>Daftar Ubah Pesanan</h1>
	<form method="post">
		<table>	
			<tr>
				<td><label for="cashier">Nama Cashier</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="cashier" id="cashier" required 
				value="<?= $pesanan2["cashier"]; ?>"></td>	
			</tr>
			<tr>
				<td><label for="product">Product</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="product" id="product" required 
				value="<?= $pesanan2["product"]; ?>"></td>	
			</tr>
			<tr>
				<td><label for="category">Category</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="category" id="category" required 
				value="<?= $pesanan2["category"]; ?>"></td>	
			</tr>
			<tr>
				<td><label for="price">Price</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="price" id="price" required 
				value="<?= $pesanan2["price"]; ?>"></td>	
			</tr>
		</table>
		<button type="submit" name="submit">Ubah Pesanan</button>
	</form>
	<br><br>
	<a href="tampilan.php">Kembali</a>

</body>
</html>