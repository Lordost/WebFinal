<?php
//Registrerings funktionen och sånt
session_start();

require_once('mysql_connect.php');

	$username = $_POST['Username'];
	$pass = $_POST['Password'];
	$email = $_POST['Email'];

$query = 'SELECT * FROM users WHERE userName=("' . $_POST['Username'] . '");';

$result = mysqli_query($dbc,$query);

$row = mysqli_fetch_array($result);
//kollar ifall det finns något konto som använder samma email som den som har skrivits in
if(isset($row)){
	header('Location: ../register.php');
}
//ifall emailen inte har använts förut så skapas kontot
else{
	$query = 'INSERT INTO users(email,userName,password) VALUES("' . $_POST['Email'] . '","' . $_POST['Username'] . '",PASSWORD("' . $_POST['Password'] . '"));';

	mysqli_query($dbc,$query);

	$query = 'SELECT userName FROM users WHERE email=("' . $_POST['Email'] . '");';

	$result = mysqli_query($dbc,$query);

	$email = mysqli_fetch_array($result);

	mysqli_query($dbc,$query);
	
	header('Location: ../login.php');
}

?>