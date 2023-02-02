<?php
	
	session_start();	
	if((!isset($_POST['login'])) || (!isset($_POST['password'])))
	{
		header('Location: index.php');
		exit();
	}
	require_once "connect.php";
	$connect = @new mysqli($host, $db_user, $db_password, $db_name);	
	if ($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno;
	}
	else
	{
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	$password = htmlentities($password, ENT_QUOTES, "UTF-8");
	
	if ($result = @$connect->query(
	sprintf("SELECT * FROM Uzytkownicy WHERE email='%s' AND haslo ='%s'",
	mysqli_real_escape_string($connect,$login),
	mysqli_real_escape_string($connect,$password))))
	{
		$users = $result->num_rows;
		if($users>0)
		{
			$_SESSION['zalogowany'] = true;
			$_SESSION['id'] = $row['id'];
			$row = $result->fetch_assoc();
			$_SESSION['user'] = $row['imie'];
			$_SESSION['secname'] = $row['nazwisko'];
			
			
			
			unset($_SESSION['blad']);	
			$result->close();
			header('Location: formularz.php');
			
		} else {
			
		$_SESSION['blad'] = '<span style="color:red" >Nieprawidłowy login lub hasło!</span>';
		header('Location: index.php');
			
		}
	}
	
	$connect->close();
	
	}

	
	
	

?>
