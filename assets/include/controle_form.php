<?php 

	include"db.php";



$username = $_POST['username'];
$email = $_POST['email'];
$password = crypt($_POST['password']);
$passwordConf = $_POST['passwordConf'];
$valid = 0;
if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_POST['signup'])){
		
		//check  email and user if exist in databases

		$sql = "SELECT  * FROM user WHERE username='".$username."' OR email='".$email."'limit 1";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		
			if (!$resultcheck == 0){
				$erreur= "pleas change login";
				return;
			} else {
				$valid++;
			} 

		
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
			else{
				$password_err = "password valid";
				$valid++;
				}

				//PasswordConf
			if(empty($passwordConf)){
					$passwordConf_err="champ obligatoir";
			}
			else if($passwordConf != $password){
				$passwordConf_err="erreur password is not same";
			}
			else{
					$passwordConf_err = "Password valid";
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

