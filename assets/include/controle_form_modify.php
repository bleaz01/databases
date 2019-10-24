<?php
session_start();
	include"db.php";
	


if(isset($_POST['modify'])){

	$update = $_POST['modify'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = crypt($_POST['password']);
	$passwordConf = $_POST['passwordConf'];
	$last_name = $_POST['Last_name'];
	$first_name =$_POST['First_name'];
	$github = $_POST['Github'];
	$linkedin = $_POST['Linkedin'];

			//last_name:
			if(empty($last_name)){
			$last_name_err = "champ obligatoir";
			}
			else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($username))){
			$last_name_err = "last_name incorrecte";
			}
			else{
				$valid;
			}

			//first_name
			if(empty($first_name)){
			$first_name_err= "champ obligatoir";
			}
			else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($username))){
			$first_name_err = "first_name incorrecte";
			}
			else{
				$valid++;
			}

			//Lien github:

			if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($username))){
			$git_err =" bhin ! bravos" ;
			}
			else{
				$valid++;
			}

	

			//Lien linkedin

			if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($username))){
			$link_err = "ok tu es serieux" ;
			}
			else{
				$valid++;
			}



			//username
			if(empty($username)){
			$user_err = "champ obligatoir";
			}
			else if(!preg_match('`^[a-zA-Z \'\-\.]+$`', htmlspecialchars($username))){
			$user_err = "username incorrecte";
			}
			else{
				$valid++;
			}

			//Email
			if(empty($email)){
				$email_err = "champ obligatoir";
			}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email_err = "email incorrecte";
			}
			else{
				$valid++;
				}
	}

//modify form:

if($valid == 6){
	
		//$sql = "SELECT  * FROM user WHERE username='".$username."' OR email='".$email."'limit 1";
		
		$resul	= mysql_query($conn, "select * from user where id='5'");


		//$result = mysqli_query($conn, $sql);
		//$resultcheck = mysqli_num_rows($result);
	

	
		


}
?>
