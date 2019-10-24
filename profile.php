<?php
	session_start();
	include "assets/include/db.php";
	include "assets/include/controle_form_modify.php";

	

?>
<?php include "assets/include/header.php" ?>
	<body>
		<header class="mb-5">
			<?php include "assets/include/nav.php" ?>
			<p>l²</p>
		</header>
		<main class="mt-5">
			<form>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Usernaman</label>
						<input type="text" name="username" class="form-control" id="inputEmail4" value="" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Email</label>
						<input type="email" name="email" class="form-control" id="inputPassword4" value="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Last_name</label>
					<input type="text" name="Last_name" class="form-control" id="inputAddress" value=""placeholder="">
				</div>
				<div class="form-group">
					<label for="inputAddress2">First_name</label>
					<input type="text" name="first_name" class="form-control" id="inputAddress2"value="" placeholder="">
				</div>

				<div class="form-group">
					<label for="inputAddress">Github</label>
					<input type="text"name="github" class="form-control" id="inputAddress" value=""placeholder="">
				</div>
				<div class="form-group">
					<label for="inputAddress2">Linkedin</label>
					<input type="text" name="linkedin" class="form-control" id="inputAddress2" placeholder="">
				</div>
				<button type="submit" class="btn btn-primary" name="modify" >Modify</button>
				<button type="submit" class="btn btn-primary" name="delete" >delete account</button>
			</form>




<?php include "assets/include/footer.php" ?>
