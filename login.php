
<?php
	session_start();
	
	if((isset($_SESSION['login']))&&($_SESSION['login']==true))
	{
		header('Location: /PWM/php/promap.html');
		exit();
	} 
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Stylizowanie formularzy</title>
	<meta name="keywords" content="css, odcinek" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
	<link rel="stylesheet" href="assets/css/login_style.css" type="text/css" />
	
</head>

<body>


	<div id="title">
	Pocket World Map
	
	<hr width="20%" />
	</div>

	<div id="container_login">
	
			<form action = "php/zaloguj.php" method = "post">
			
			
					<input type="text" placeholder="Login" name="login">
			
			
					<input type="password"  placeholder="Password" name="password">
			
	  <?php
  if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
  ?>
			
					<input type="submit"value="Sing In"> 
			
			
			
				</form>
		
		<form action="php/rejestracja.php" method="post">
		
				<input type="submit"value="Sing Up">
			
		</form>
		
		
	</div>
	
	
</body>
