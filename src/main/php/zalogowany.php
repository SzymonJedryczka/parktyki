<?php

  session_start();
  
  if(!isset($_SESSION['zalogowany']))
  {
	  header('Location: praktykigłówna.html');
	  exit();
  }	  

?>

<html>
<head>
<meta charset="Utf-8">
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
<body style="background-color: rgb(199, 188, 227)" >
<center>
<div style="background-color: red; height: 80px;">
<h1 style="font-size: 47pt;"> FILMOWO.PL </h1>
</div>
</center>
<div style="position: absolute; top: 100px; right: 60px; border: 2px solid black; background-color: pink;">
<a href="wyloguj.php" style="padding: 40px; "> Wyloguj się! </a>
</div>
<center>

<div style="margin-top: 200px;">
<a href="http://localhost/praktykidodawanie.php" style="font-size: 25pt; border: 2px solid black;padding-left: 200px; padding-right: 200px; padding-top: 30px; padding-bottom: 30px; background-color: pink;"> Dodaj Film </a>
</div>
<div style="margin-top: 140px;">
<a href="baza.php" style="font-size: 25pt; border: 2px solid black;padding-left: 190px; padding-right: 190px; padding-top: 30px; padding-bottom: 30px; background-color: pink;"> Baza Filmów </a>
</div>
<div style="margin-top: 140px;">
<a href="premiera.php" style="font-size: 25pt; border: 2px solid black;padding-left: 125px; padding-right: 125px; padding-top: 30px; padding-bottom: 30px; background-color: pink;"> Nadchodzące Premiery </a>
</div>
</body>
</html>
