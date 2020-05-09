<?php  

function biodata($nama, $umur) {
	if (is_string($nama) & is_int($umur)) {
		$my_biodata = [
			"name" => $nama,
			"age" => $umur,
			"address" => "Jalan Borobudur Selatan",
			"hobbies" => ["futsal",	"coding", "gaming"],
			"is_married" => false,
			"list_school" => [
				"name" => "UNISSULA",
				"year_in" => 2015,
				"year_out" => 2019,
				"major" => "Teknik Elektro"
			],
			"skills" => [
				[
					"name" => "Web Programming",
					"level" => "Beginner"	
				],
				[
					"name" => "Robot Programming",
					"level" => "Advanced"	
				] 
			],
			"interest_in_coding" => true
		];
		
		$json = json_encode($my_biodata);
		file_put_contents("biodata.json", $json);
		return print $json;
	}
	
	else {
		echo "Input Nama atau Umur Salah!";
	}

}

biodata("Arinan Najah Putra", 23);

?>