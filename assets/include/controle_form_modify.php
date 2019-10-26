<?php
session_start();
	include"db.php";
	


if(isset($_POST['modify'])){

	$update = $_POST['modify'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = crypt($_POST['password']);
	$passwordConf = $_POST['passwordConf'];
	$last_name = $_POST['last_name'];
	$first_name =$_POST['first_name'];
	$github = $_POST['github'];
	$linkedin = $_POST['linkedin'];

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

if($valid > 0){
	
			$sql = "UPDATE user SET username ='".$username."', email='".$email."',
				last_name='".$last_name."', first_name='".$first_name."' ,
				github='".$github."', linkedin='".$linkedin."' WHERE id='".$_SESSION['id']."'";

		

// "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

			if (mysqli_query($conn, $sql)) {
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['first_name'] = $first_name;
				$_SESSION['last_name'] = $last_name; 
				$_SESSION['linkedin'] = $linkedin;
				$_SESSION['github'] = $github; 
				
				header('Location: index.php');

			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}
		//$result = mysqli_query($conn, $sql);
		//$resultcheck = mysqli_num_rows($result);
	

	
		


}
?>
