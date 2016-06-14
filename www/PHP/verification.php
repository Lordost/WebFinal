<?php

	session_start();

	require_once('mysql_connect.php'); // ger $dbc

	$username = $_POST['Username'];
	$pass = $_POST['Password'];
	
	$query = 'SELECT * FROM users WHERE userName="' . $username . '";';

	$result = mysqli_query($dbc,$query);

	if($username = mysqli_fetch_array($result)['userName']){
		$query = 'SELECT * FROM users WHERE 
				  userName = "'.$username.'"
				  AND password=PASSWORD("'.$pass.'");';

		$result = mysqli_query($dbc,$query);
		
		if(mysqli_fetch_array($result)){
			// Resultat finns => L�senord och mail �r r�tt
			$_SESSION['login'] = TRUE;
			$_SESSION['time'] = time();
			$_SESSION['customer'] = $username;
			header('Location: ../index.php');
		}
		else{
			// Resultat finns INTE => L�senord och username �r FEL
			session_destroy(); // F�rst�r sessionen
			header('Location: ../login.php'); //Skickas till login
		}
	}
	else{
		//Username finns inte i databasen
		session_destroy(); // F�rst�r sessionen
		header('Location: ../login.php'); //Skickas till login
	}
?>