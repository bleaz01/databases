<?php
session_start();
include_once "assets/include/db.php";
include"assets/include/login_valided.php";
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
