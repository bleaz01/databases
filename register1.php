<?php 
	include"assets/include/db.php";
	include "assets/include/header.php";



$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$PasswordConf = $_POST['PasswordConf'];
$valid = 0;
if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_POST['signup'])){
		
			//username
			if(empty($username)){
			$erreur = "champ obligatoir";
			}
			else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($username))){
			$erreur = "name erro, caractére only pleas.";
			}
			else{
				$erreur = "user valid";
				$valid++;
			}

			//Email
			if(empty($email)){
				$email_err ="champ obligatoir";
			}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email_err ="erreur dans l 'email";
			}
			else{
				$email_err = "email valid";
				$valid++;
				}

			//password
			if(empty($password)){
				$password_err="champ obligatoir";
				}
			else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',htmlspecialchars($password))){

				$password_err="a password must be 9 characters including 1 uppercase letter
								, 1 special character and alphanumeric characters?";
			}
			else{
				$password_err = "password valid";
				$valid++;
				}

				//PasswordConf
			if(empty($PasswordConf)){
				$password_err="champ obligatoir";
				}
			else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',htmlspecialchars($PasswordConf))){

				$passwordConf_err="a password must be 9 characters including 1 uppercase letter, 
									1 special character and alphanumeric characters?";

			}
			else if($PasswordConf != $password){
				$PasswordConf_err="erreur password is not same";
			}
			else{
					$PasswordConf_err = "Password valid";
					$valid++;
				}
}
//validation tu fomulaire:
if($valid == 4){
	header("location: index.php");
	
		$_SESSION["key"] = $_POST;


		$sql = "INSERT INTO user(username, email, password)
		VALUES ('$username', '$email', '$password')";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}

?>

