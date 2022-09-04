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
<h1 style="font-size: 47pt;"> Baza Filmów </h1>
</div>
<br>
<br>
<br>
<br>
<a href="zalogowany.php" style="font-size: 15pt; border: 2px solid black;padding-left: 25px; padding-right: 25px; padding-top: 15px; padding-bottom: 15px; background-color: pink;"> Powrót </a> <br> <br>
       <form method="GET">
	   <input name="Rok" type="number" placeholder="Wpisz rok produkcji/premiery" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
    <select name="Gatunek" placeholder="Wybierz gatunek" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
      <option value="Wybierz"> Wybierz gatunek </option>
	  <option value="Dramat"> Dramat </option>
	  <option value="Komedia"> Komedia </option>	
	  <option value="Animowany"> Animowany </option>	
	  <option value="Horror"> Horror </option>
      <option value="Familijny"> Familijny </option>
      <option value="Akcja"> Akcja </option>
      <option value="Thriller"> Thriller </option>	  
    </select> <br><br>
    <input name="Tytul" type="text" placeholder="Wpisz tytuł" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"><br><br>

	  <input type="submit" value="Szukaj" style="width: 15%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;">
	  </form>




<?php
    if(isset($_GET["Rok"])){
    $Rok = $_GET["Rok"];  
	$Tytul = $_GET["Tytul"];  
	$Gatunek = $_GET["Gatunek"];  
	
    if (empty($Rok) || empty($Gatunek)){
	
		echo "Wpisz coś w pole Rok albo Gatunek!";
		
    }
	
	$conn = new mysqli("localhost", "root", "", "bazafilmy"); 
	$wynik = $conn->query("SELECT Rok, Tytul, Gatunek, Rezyser, Rola_glowna FROM filmy WHERE Tytul LIKE '%$Tytul%' AND Rok='$Rok' OR Gatunek='$Gatunek' ORDER BY Tytul");
	

	
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

	$conn->close();
	}
	}
?>


</body>
</html>
