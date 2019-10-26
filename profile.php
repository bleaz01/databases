<?php
	session_start();
	include "assets/include/db.php";
	include "assets/include/controle_form_modify.php";


		$logoutNone='d-none';
	if(isset($_POST['Logout'])){
		$_SESSION = array();
		session_destroy();
		$logoutNone = "d-none";
		header('Location: index.php');
		}


?>
<?php include "assets/include/header.php" ?>
	<body>
		<header class="mb-5">
			<?php include "assets/include/nav.php" ?>
		
		</header>
		<main class="mt-5">
			<form method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Usernaman</label>
						<input type="text" name="username" class="form-control" id="inputEmail4" value="<?= $_SESSION['username'] ?>" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Email</label>
					<input type="email" name="email" class="form-control" id="inputPassword4" value="<?= $_SESSION['email'] ?>" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Last_name</label>
					<input type="text" name="last_name" class="form-control" id="inputAddress" value="<?= $_SESSION['last_name'] ?>"placeholder="">
				</div>
				<div class="form-group">
					<label for="inputAddress2">First_name</label>
					<input type="text" name="first_name" class="form-control" id="inputAddress2"value="<?= $_SESSION['first_name'] ?>" placeholder="">
				</div>

				<div class="form-group">
					<label for="inputAddress">Github</label>
					<input type="text"name="github" class="form-control" id="inputAddress" value="<?= $_SESSION['github'] ?>"placeholder="">
				</div>
				<div class="form-group">
					<label for="inputAddress2">Linkedin</label>
					<input type="text" name="linkedin" class="form-control" id="inputAddress2" value="<?= $_SESSION['linkedin'] ?>" placeholder="">
				</div>

				<button type="submit" class="btn btn-primary" name="modify" >Modify</button>
				<button type="submit" class="btn btn-primary" name="delete" >delete account</button>
			</form>


			<?php var_dump($_SESSION) ?>

<?php include "assets/include/footer.php" ?>
