<?php
	session_start();
	
	if(!isset($_SESSION['udanarejestracja']))
	{
		
		header('Location: /PWM/php/index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	//usuwamy zmienne sluzace do zapamietnia wartosci
	if(isset($_SESSION['fr_nick']))unset($_SESSION['fr_nick']);
	if(isset($_SESSION['fr_email']))unset($_SESSION['fr_email']);
	if(isset($_SESSION['fr_password1']))unset($_SESSION['fr_password1']);
	if(isset($_SESSION['fr_password2']))unset($_SESSION['fr_password2']);
	if(isset($_SESSION['fr_regulamin']))unset($_SESSION['fr_regulamin']);
	
	//usuwanie bledow rejstracji
	if(isset($_SESSION['e_nick']))unset($_SESSION['e_nick']);
	if(isset($_SESSION['e_email']))unset($_SESSION['e_email']);
	if(isset($_SESSION['e_password']))unset($_SESSION['e_password']);
	if(isset($_SESSION['e_regulamin']))unset($_SESSION['e_regulamin']);
	if(isset($_SESSION['e_bot']))unset($_SESSION['e_bot']);
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="uft-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
</head>


<body>

	Now you can log in!

<form action="zaloguj.php" method="post">
 
  Login: <br /> <input type="text" name="login" /> <br />
  Password: <br /> <input type="password" name="password" /> <br /> <br />
  <input type="submit" value="Log In" />
  
  </form>
  
  <form action="rejestracja.php" method="post">
  <input type="submit" value="Sing Up"/>
  </form>
  
  
  <?php
  if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
  ?>
  
  </body>