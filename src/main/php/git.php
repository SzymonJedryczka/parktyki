<?php

  session_start();

  if(!isset($_SESSION['Udana']))
  {
	  
	header('Location: praktykilogowanie.php');
	exit();
  }
  else
  {
	  
	unset($_SESSION['Udana']);
  
  }
?>
<html>
	<head>
		<meta charset="utf-8">
		<title> Udana rejestracja </title>
		<style>
						
					a:link {
			  color: black;
			  text-decoration: none;
			}

			a:visited {
			  color: black;
			  text-decoration: none;
			}

			a:hover {
			  color: black;
			  text-decoration: underline;
			}

			a:active {
			  color: black;
			  text-decoration: underline;
			}
		
		</style>
	</head>
	<body style="background-color: rgb(199, 188, 227)">
		
		<center>
			<div style="background-color: red; height: 80px;">
				 <h1 style="font-size: 47pt;"> Dziękujemy za utworzenie konta! </h1>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<a href="praktykilogowanie.php" style="font-size: 15pt; border: 2px solid black;padding-left: 25px; padding-right: 25px; padding-top: 15px; padding-bottom: 15px; background-color: pink;"> Zaloguj się! </a>
		
		
		
		
	</body>
</html>
