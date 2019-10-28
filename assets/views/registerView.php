	<body>
	<form method="POST" action="">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" name="username" id="Username" aria-describedby="usernameHelp"value="<?=$username?>">
			<small id="UsernameError" class="form-text text-muted"><?php valid($username) ?></small>

		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$email?>">
			<small id="emailHelp" class="form-text text-muted"><?php echo valid_email($email)?></small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="password" id="exampleInputPassword1" value="<?=$passwor?>" >
			<small id="passHelp" class="form-text text-muted"><?php echo password_valided($password) ?><body>
	<form method="POST" action="">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" name="username" id="Username" aria-describedby="usernameHelp"value="<?=$username?>">
			<small id="UsernameError" class="form-text text-muted"><?php valid($username) ?></small>
		</div>
		
			<button type="submit" name="signup" class="btn btn-primary">Submit</button>
	</form>
	<a href="login.php">login</a>

