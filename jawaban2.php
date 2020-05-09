<?php  

function usernamecheck($username) {
	$check = preg_match("/^[a-z]{1}[a-z0-9._]{7,11}$/", $username);

	if ($check) {
		echo "Username True";
		echo "<br>";
	} else {
		echo "Username False";
		echo "<br>";
	}

	return $check;
}

function passwordcheck($password) {
	$check0 = preg_match("/[\d]/", $password);
	$check1 = preg_match("/[\W]/", $password);
	$check2 = preg_match("/[a-z0-9\W]{9,9}/i", $password);

	if ($check0 & $check1 & $check2) {
		echo "Password True";
		echo "<br>";
	} else {
		echo "Password False";
		echo "<br>";
	}

	return $password;
}

usernamecheck("john.smith");
usernamecheck("johnsmith26");
usernamecheck("JOHNSmith");
passwordcheck("j0hn5m!th");
passwordcheck("j0hn5mith");
passwordcheck("johnsm!th");

?>