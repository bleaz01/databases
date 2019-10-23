<?php 

include "assets/include/header.php";
include "assets/include/controle_form.php";


?>
	<body>
	<form method="POST" action="">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" name="username" id="Username" aria-describedby="usernameHelp">
			<small id="UsernameError" class="form-text text-muted"><?= $erreur ?></small>

		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted"><?=$email_err ?></small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
			<small id="passHelp" class="form-text text-muted"><?=$password_err ?></small>

		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">PasswordConf</label>
			<input type="password" class="form-control" name="PasswordConf" id="exampleInputPassword1" placeholder="Password">
			<small id="pass2Help" class="form-text text-muted"><?=$PasswordConf_err ?></small>
		</div>

			<button type="submit" name="signup" class="btn btn-primary">Submit</button>
	</form>
	<a href="login.php">login</a>
<?php

include "assets/include/footer.php";

?>
