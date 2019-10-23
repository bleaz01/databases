<?php
include "assets/include/header.php";
include_once "assets/include/db.php";

$valided ="";

	if(isset($_POST["sign"])){ 

		$username = $_POST['login'] ;
		$password = $_POST['password'];
		 
		$sql = "SELECT  * FROM user WHERE username='".$username."' AND password='".$password."'limit 1";

		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if ($resultcheck == 1){

			header("location: index.php");
			
		} else {
			echo "password ou login et pas correct";
			 } 
	}
	
 ?>
 

<body>
	<form method="POST">
		<div class="form-row">
			 <div class="col">
				<input type="text" name="login" class="form-control" placeholder="First name">
			</div>
			<div class="col">

				<input type="text" name="password"  class="form-control" placeholder="Last name">
			 </div>
		</div>
		<button type="submit" name="sign" class="btn btn-primary">Sign in</button>
	</form>
	<a href="register.php">register</a>
	<?= $sql ?>

<?php include "assets/include/footer.php" ?>
