<?php
  
   session_start();
   
   if ((!isset($_POST['Login'])) || (!isset($_POST['Haslo'])))
   {   
  
      header('Location: praktykigłówna.html');
	  exit();
  
   }  
  $polaczenie = new mysqli("localhost", "root", "", "bazafilmy");
  
  if($polaczenie->connect_errno!=0)
  {
	echo "Nie działa";
  }
  else
  {
	  $Login = $_POST['Login'];
	  $Haslo = $_POST['Haslo'];
	  
	  $sql = "SELECT * FROM uzytkownicy WHERE Login='$Login' AND Haslo='$Haslo'"; 
	  
	  if ($rezultat = $polaczenie->query($sql))
	  {
		$ilu_userow = $rezultat->num_rows;
		if($ilu_userow>0)
		{
			
			$_SESSION['zalogowany'] = true;
			
			
			$wiersz = $rezultat->fetch_assoc();
			$_SESSION['id'] = $wiersz['Id'];
			$_SESSION['user'] = $wiersz['Login'];
			
			unset($_SESSION['blad']);
			
			$rezultat->free_result();
			
			header('Location: zalogowany.php');
			
			
			
			
			
		}else{
			
			$_SESSION['blad']='<span style="color:red">Niepoprawny login lub hasło! </span>';
			header('Location: praktykilogowanie.php');
			
		}
	  }	  
	  $_SESSION['chlop']=$Login;
	  $polaczenie->close();
  }
  
  
  
 
?>
