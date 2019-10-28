<?php
	//connexion a ma DB
function dbconnect(){
	$servername = "database";
	$usernamedb = "root";
	$passworddb = "root";
	$dbname = "becode";

	$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);
// Check connection
	if (!$conn){
		return FALSE;
	}
	else {
		return TRUE;
	}


}


// check if user exist in databases


function user_if_exists($user, $user_mail){

		$conn = dbconnect();
		$sql = "SELECT  * FROM user WHERE username='".$user."' OR email='".$user_mail."'limit 1";
		$result =mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		
			if (!$resultcheck == 0){
				return TRUE;
			} 
			else {
				return FALSE;
			} 
}

//verify if user exist for connexions 

function verify_login($login){
		
		//$conn = dbconnect();
	$servername = "database";
	$usernamedb = "root";
	$passworddb = "root";
	$dbname = "becode";

	$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);

		$sql = "SELECT  * FROM user WHERE username='".$login."' limit 1";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if ($resultcheck == 1){
			if(password_verify($password, $row['password'])){ 
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		else {
			return FALSE;
		} 

}
