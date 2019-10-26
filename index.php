<?php
	session_start();
	include "assets/include/db.php";
	$logoutNone='d-none';
	if(isset($_POST['Logout'])){
		$_SESSION = array();
		session_destroy();
		$logoutNone = "d-none";
		}
	
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
					
						$logoutNone="";
						
						
						session_start();
						$_SESSION['open'] = true;
						$_SESSION['email']= $row['email'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['last_name'] =$row['last_name'];
						$_SESSION['first_name'] = $row['first_name'];
						$_SESSION['github'] = $row['github'];
						$_SESSION['id']= $row['id'];; 	
						$_SESSION['logout'] = $logoutNone;
						
					} else {
						header('Location: index.php');
						$text ="text-danger ";
					}	
				}	
		} else {
			$text ="text-danger ";
		} 
}	

?>
<?php	include "assets/include/header.php"; ?>
<body>
	<header>
		<?php
			if($_SESSION['open'] == true){
				include "assets/include/nav_in.php";
			}
			else{
				include "assets/include/nav.php";
				}
		?>
	</header>
	<?php include "assets/include/footer.php";?>
