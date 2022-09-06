<html>
<head>
<meta charset="utf-8">
<title> Premiery </title>
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
td{
	border: 2px solid black;
	background-color: pink;
	padding: 10px;
	text-align: center;
	font-size: 18pt;
}
tr{
	border: 2px solid black;
	
}
table{
	border: 2px solid black;
	background-color: red;
}
</style>
</head>
<body style="background-color: rgb(199, 188, 227)">
<center>
<div style="background-color: red; height: 80px;">
<h1 style="font-size: 47pt;"> Nadchodzące premiery </h1>
</div>
<br>
<br>
<br>
<br>
<?php

	$conn = new mysqli("localhost", "root", "", "bazafilmy") or die("Błąd");

	$wynik = $conn->query("SELECT Rok, Tytul, Gatunek, Rezyser, Rola_glowna FROM filmy WHERE Premiera='Tak'");
	
	if($wynik->num_rows > 0){
		echo "<center>";
		echo "<table>";
		echo "<tr>";
		echo "<td> Rok </td>";
		echo "<td> Tytuł </td>";
		echo "<td> Gatunek </td>";
		echo "<td> Reżyser </td>";
		echo "<td> Rola główna </td>";
		
		echo"</td>";
		while( $wiersz = $wynik->fetch_assoc() ){
	    echo "<tr>";
		echo "<td> " . $wiersz["Rok"]. "</td>";
		echo "<td> " . $wiersz["Tytul"]. "</td>";
		echo "<td> " . $wiersz["Gatunek"]. "</td>";
		echo "<td> " . $wiersz["Rezyser"]. "</td>";
		echo "<td> " . $wiersz["Rola_glowna"]. "</td>";
		echo "</tr>";	
		}
		echo "</table>";
	}else{
		
		echo "Nie ma nic w bazie danych";
	
	}

	$conn->close();
?>
<br>
<br>
<br>
<br>
<a href="zalogowany.php" style="font-size: 15pt; border: 2px solid black;padding-left: 25px; padding-right: 25px; padding-top: 15px; padding-bottom: 15px; background-color: pink;"> Powrót </a>
</body>
</html>
