<?php
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
