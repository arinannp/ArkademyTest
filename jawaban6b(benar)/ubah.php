<?php  

$nama = $_GET["nama"];
$product = $_GET["product"];
$category = $_GET["category"];
$price = $_GET["price"];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah Pesanan</title>
</head>
<body>
	<h1>Daftar Ubah Pesanan</h1>
	<form action="tampilan.php" method="post">
		<table>	
			<tr>
				<td><label for="cashier">Nama Cashier</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="cashier" id="cashier" required 
				value="<?= $nama; ?>"></td>	
			</tr>
			<tr>
				<td><label for="product">Product</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="product" id="product" required 
				value="<?= $product; ?>"></td>	
			</tr>
			<tr>
				<td><label for="category">Category</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="category" id="category" required 
				value="<?= $category; ?>"></td>	
			</tr>
			<tr>
				<td><label for="price">Price</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="price" id="price" required 
				value="<?= $price; ?>"></td>	
			</tr>
		</table>
		<button type="submit" name="submit" onclick="return alert('Anda Tidak Bisa Merubah Pesanan Ini');">Ubah Pesanan</button>
	</form>
	<br><br>
	<a href="tampilan.php">Kembali</a>

</body>
</html>