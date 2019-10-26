<?php
session_start();
include_once "assets/include/db.php";
include"assets/include/login_valided.php";
	if(isset($_POST["sign"])){ 


		$username = $_POST['login'] ;
		$password = $_POST['password'];

		// Login valided

		$sql = "SELECT  * FROM user WHERE username='".$username."'limit 1";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		
		if ($resultcheck == 1){
				while($row = mysqli_fetch_assoc($result)){
				
					if (password_verify($password, $row['password'])) {
						session_start();
				
						$_SESSION['display_none'] = "d.none";
						$_SESSION['username'] = $row['username'];
						$_SESSION['id']= $row['id'];
						header('Location: index.php');
					} else {
						echo 'Le mot de passe est invalide.';
					}	
				}	
		} else {
			echo "password ou login et pas correct";
		} 
}	
	
?>

 
<?php include "assets/include/header.php"; ?>

<body>

	<form method="POST" action="">
		<div class="form-row">
			 <div class="col">
				<input type="text" name="login" class="form-control" placeholder="First name">
			</div>
			<div class="col">

				<input type="password" name="password"  class="form-control" placeholder="Last name">
			 </div>
		</div>
		<button type="submit" name="sign" class="btn btn-primary">Sign in</button>
	</form>
	<a href="register.php">register</a>
<?php include "assets/include/footer.php" ?>
