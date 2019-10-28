<?php
//}
	//connexion a ma DB local
	$servername = "kcpgm0ka8vudfq76.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
	$usernamedb = "fn4qm3o7tq7c2l02";
	$passworddb = "q60o6jw3iu5e28xv";
	$dbname = "dmxqwftfp5uln1zt";

	$conn =   mysqli_connect($servername, $usernamedb, $passworddb, $dbname);
// Check connection
	

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection was successfully established!";

?>
