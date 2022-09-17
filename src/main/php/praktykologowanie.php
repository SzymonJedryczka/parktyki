<?php

  session_start();

  if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
  {
	  
	header('Location: zalogowany.php');
	exit();
  }
?>


<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title> logowanie </title>
  <style>
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
  
  </style>
</head>
<body style="background-color: rgb(199, 188, 227)">
<center>
<div style="background-color: red; height: 80px;">
 <h1 style="font-size: 47pt;"> Logowanie </h1>
</div> <br><br><br>
 <form action="kierownica.php" method="POST">
 
  <input type="text" name="Login" placeholder="Wpisz login" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
  <input type="password" name="Haslo" placeholder="Wpisz hasło" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
  <input type="submit" value="Zaloguj się" style="width: 15%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;">
  <br>
  <br>
 <?php
   if(isset($_SESSION['blad']))  echo $_SESSION['blad'];
?>
 </form>
 <br>
 <br>
 <a href="praktykirejestracja.php" style="font-size: 15pt; border: 2px solid black;padding-left: 25px; padding-right: 25px; padding-top: 15px; padding-bottom: 15px; background-color: pink;"> Nowe konto </a>
 
 <br>
 <br>
 <br>
 <br>
 <a href="praktykigłówna.html" style="font-size: 15pt; border: 2px solid black;padding-left: 25px; padding-right: 25px; padding-top: 15px; padding-bottom: 15px; background-color: pink;"> Powrót </a>
</body>
</head>
</html>
