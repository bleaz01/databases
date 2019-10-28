<?php
session_start();

// Models : link of the  database
	include "assets/model/insert.php";
	include "assets/model/select.php";
	include "assets/model/ubdate.php";

	if(isset($_POST["sign"])){ 


		$username = $_POST['login'] ;
		$password = $_POST['password'];

		if(valid($username) == TRUE AND password_valided($password) == TRUE){

			if(verify_login($username) == TRUE){

				session_start();

				$_SESSION['open'] = true;
				$_SESSION['email']= $row['email'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['last_name'] =$row['last_name'];
				$_SESSION['first_name'] = $row['first_name'];
				$_SESSION['github'] = $row['github'];
				$_SESSION['id']= $row['id'];; 	
				$_SESSION['logout'] = $logoutNone;
			}
		}
		else{
			include "assets/include/nav_logout.php";
			//require("./assets/views/indexView_sign_out.php");
		}
	
	}
	
//views nav_bar

	if($_SESSION['open'] == true){
		$nav_bar = 'include "assets/views/indexView_sign_in.php";';
	}
	else{
		$nav_bar = 'include "assets/views/indexView_sign_out.php";';
	}

// logout Session

	if(isset($_POST['Logout'])){
		$_SESSION = array();
		session_destroy();
		}

?>

<?php include "assets/include/header.php" ?>

	<body>
		<header>
			<?= $nav_bar ?>
		</header>
		<main>
			
		</main>
