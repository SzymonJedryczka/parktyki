<html>
  <head>
    <meta charset="utf-8">
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
  <?php
  if(isset($_POST["Rok"])){
	$Rok = $_POST["Rok"];  
	$Tytul = $_POST["Tytul"];  
	$Gatunek = $_POST["Gatunek"];  
	$Rezyser = $_POST["Rezyser"];  
	@$Rola_glowna = $_POST["Rola_glowna"]; 
    @$Premiera = $_POST["Premiera"];  

    if( empty( $Rok ) || empty( $Tytul ) || empty ( $Rezyser ) || empty ($Rola_glowna)
	) {
       echo "Wypełnij wszystkie pola";
	}	else {
       
	   $conn = new mysqli("localhost", "root", "", "bazafilmy");  
	   
	   $odp = $conn->query("INSERT INTO filmy (Rok, Tytul, Gatunek, Rezyser, Rola_glowna, Premiera) VALUES ('$Rok', '$Tytul', '$Gatunek', '$Rezyser', '$Rola_glowna', '$Premiera')");
	    
	   
	   if ($odp){
		  echo "Dodano film";
	   }  else{
		   echo "Nie udało się dodać filmu";
	   }   
	   
	   $conn->close();
	}   
  }  
  
  ?>
  <center>
  <div style="background-color: red; height: 80px;">
<h1 style="font-size: 47pt;"> Dodawanie Filmów </h1>
</div>
  <br>
  <br>
  <form method="POST" action="praktykidodawanie.php"> 
    <input name="Rok" type="number" placeholder="Wpisz rok produkcji/premiery" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
    <input name="Tytul" type="Text" placeholder="Wpisz tytuł" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
    <select name="Gatunek" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
      <option value="Wybierz"> Wybierz gatunek </option>
	  <option value="Dramat"> Dramat </option>
	  <option value="Komedia"> Komedia </option>	
	  <option value="Animowany"> Animowany </option>	
	  <option value="Horror"> Horror </option>
      <option value="Familijny"> Familijny </option>
      <option value="Akcja"> Akcja </option>
      <option value="Thriller"> Thriller </option>	  
    </select> <br><br>
    <input name="Rezyser" type="text" placeholder="Wpisz reżysera" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"><br><br>
	<input name="Rola_glowna" type="text" placeholder="W roli głównej" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"><br>
	<p style="border: 2px solid black; background-color: pink; width: 15%;">Czy to premiera?</p>
	<label>
	<p><input name="Premiera" type="radio" value="Tak"> Tak </p> 
    </label>
	<label>
	<p><input name="Premiera" type="radio" value="Nie"> Nie </p>
    </label>
	<input type="submit" value="dodaj" style="width: 15%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;">
  </form>
  <br>
  <a href="zalogowany.php" style="font-size: 15pt; border: 2px solid black;padding-left: 25px; padding-right: 25px; padding-top: 15px; padding-bottom: 15px; background-color: pink;"> Powrót </a>
</body>
</html>
