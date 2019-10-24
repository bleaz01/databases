<?php
	session_start();
	if(session_destroy() == true){;

		header('Localhost: index.php');
	}


?>
