<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pesanan</title>
</head>
<body>
	<h1>Daftar Tambah Pesanan</h1>
	<form action="tampilan.php" method="post">
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
		<button type="submit" name="submit" onclick="return alert('Anda Tidak Bisa Menambah Pesanan Ini');">Tambah Pesanan</button>
	</form>
	<br><br>
	<a href="tampilan.php">Kembali</a>

</body>
</html>