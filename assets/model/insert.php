<?php


function create_user(){

	$sql = "INSERT INTO user(username, email, password)
			VALUES ('$username', '$email', '$password')";

		if ($conn->query($sql) === TRUE) {
			return TRUE;
		}
		else {
			//"Error: " . $sql . "<br>" . $conn->error;
			return FALSE;
		}

}

