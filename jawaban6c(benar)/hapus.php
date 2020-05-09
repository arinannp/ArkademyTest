<?php  

$id = $_GET["id"];
$conn_database = mysqli_connect("localhost", "root", "", "caffearkademy");

function hapus($id) {
	global $conn_database;
	$querry = "DELETE FROM pesanan WHERE id = $id";
	mysqli_query($conn_database, $querry);

	return mysqli_affected_rows($conn_database);
}


if ( hapus($id) > 0 ) {
	print "
		<script>
			alert('Pesanan Berhasil Dihapus');
			document.location.href = 'tampilan.php';
		</script>
	";
} else {
	print "
		<script>
			alert('Pesanan Gagal Dihapus');
			document.location.href = 'tampilan.php';
		</script>
	";
}

?>