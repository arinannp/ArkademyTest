<?php  

$cashier1 = [
	"nama" => "Pevita Pearce",
	"product" => "Latte",
	"category" => "Drink",
	"price" => "10.000"
];
$cashier2 = [
	"nama" => "Raisa Andriana",
	"product" => "Cake",
	"category" => "Food",
	"price" => "20.000"
];
$cashier3 = [
	"nama" => "Arinan Najah Putra",
	"product" => "Pizza",
	"category" => "Food",
	"price" => "45.000"
];

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
			<td><form>
					<input type="text" name="keyword" class="cari" placeholder="Masukan Keyword Pencarian...">
					<button type="submit" name="submit" class="tombol"><a href="update.php">ADD</a></button>
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
		<tr>
			<td><?= "1"; ?></td>
			<td><?= "Pevita Pearce"; ?></td>
			<td><?= "Latte"; ?></td>
			<td><?= "Drink"; ?></td>
			<td><?= "10.000"; ?></td>
			<td><a 
				href="ubah.php?nama=<?=$cashier1["nama"];?>&product=<?=$cashier1["product"];?>&category=<?=$cashier1["category"];?>&price=<?=$cashier1["price"];?>"
				onclick="return confirm('Anda Yakin Akan Merubah Pesanan Ini?');">
				<img src="ubah.jpg"></a> 
				<a 
				href="tampilan.php"
				onclick="return alert('Anda Tidak Bisa Menghapus Pesanan Ini');">
				<img src="hapus.jpg"></td></a>
		</tr>
		<tr>
			<td><?= "2"; ?></td>
			<td><?= "Raisa Andriana"; ?></td>
			<td><?= "Cake"; ?></td>
			<td><?= "Food"; ?></td>
			<td><?= "20.000"; ?></td>
			<td><a 
				href="ubah.php?nama=<?=$cashier2["nama"];?>&product=<?=$cashier2["product"];?>&category=<?=$cashier2["category"];?>&price=<?=$cashier2["price"];?>"
				onclick="return confirm('Anda Yakin Akan Merubah Pesanan Ini?');">
				<img src="ubah.jpg"></a> 
				<a 
				href="tampilan.php"
				onclick="return alert('Anda Tidak Bisa Menghapus Pesanan Ini');">
				<img src="hapus.jpg"></td></a>
		</tr>
		<tr>
			<td><?= "3"; ?></td>
			<td><?= "Arinan Najah Putra"; ?></td>
			<td><?= "Pizza"; ?></td>
			<td><?= "Food"; ?></td>
			<td><?= "45.000"; ?></td>
			<td><a 
				href="ubah.php?nama=<?=$cashier3["nama"];?>&product=<?=$cashier3["product"];?>&category=<?=$cashier3["category"];?>&price=<?=$cashier3["price"];?>"
				onclick="return confirm('Anda Yakin Akan Merubah Pesanan Ini?');">
				<img src="ubah.jpg"></a> 
				<a 
				href="tampilan.php"
				onclick="return alert('Anda Tidak Bisa Menghapus Pesanan Ini');">
				<img src="hapus.jpg"></td></a>
		</tr>
	</table>

</body>
</html>