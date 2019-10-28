<?php

	// Modify info from user 

function modify_user() {

// "UPDATE table SET * columbs which  id";

	$sql = "UPDATE user SET username ='".$username."', email='".$email."',
			last_name='".$last_name."', first_name='".$first_name."' ,
			github='".$github."', linkedin='".$linkedin."' WHERE id='".$_SESSION['id']."'";


			if (mysqli_query($conn, $sql)) {
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['first_name'] = $first_name;
				$_SESSION['last_name'] = $last_name; 
				$_SESSION['linkedin'] = $linkedin;
				$_SESSION['github'] = $github; 
				
				return(true);
			} 
			else{
				return(false);
			}
}

