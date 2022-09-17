<?php

  session_start();
  
  if(isset($_POST['Haslo1']))
  {
	 //Udana walidacja? Tak! 
	 $wszystko_OK=true;
	 
	 //Login
	 $Login = $_POST['Login'];
	 
	 //długość login
	 if((strlen($Login)<3)||(strlen($Login)>20))
	 {
		$wszystko_OK=false; 
		$_SESSION['e_Login']="Login musi posiadać od 3 do 20 znaków!";
     }
     
	 if(ctype_alnum($Login)==false)
	 {
		 $wszystko_OK=false;
		 $_SESSION['e_Login']="Login może zawierać tylko liczby i litery bez polskich znaków!";
		 
	 }
 
     //hasło
	 $Haslo1 = $_POST['Haslo1'];
	 $Haslo2 = $_POST['Haslo2'];
 
     if((strlen($Haslo1)<8) || (strlen($Haslo1)>20))
	 {
		 $wszystko_OK=false;
		 $_SESSION['e_Haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		 
	 }
 
     if ($Haslo1 != $Haslo2)
     {
		 $wszystko_OK=false;
		 $_SESSION['e_Haslo']="Hasła nie są takie same!";
		 
	 }
 
        $polaczenie = new mysqli("localhost", "root", "", "bazafilmy");
 
		
		mysqli_report(MYSQLI_REPORT_STRICT);
		try
		{
			
			$polaczenie = new mysqli("localhost", "root", "", "bazafilmy");
	      
		  if($polaczenie->connect_errno!=0)
			  {
				throw new Exception(mysqli_connect_errno());
			  }
				else
				{
				  	
					$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE Login='$Login'");
					
					if (!$rezultat) throw new Exception($polaczenie->error);
					
					$ilelogin = $rezultat->num_rows;
					if($ilelogin>0)
					{
						
						$wszystko_OK=false;
						$_SESSION['e_Login']="Podany login jest już zajęty!";
						
					}
					
					 if($wszystko_OK==true) 
						{
						
							if($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$Login', '$Haslo1')"))
							{
								
								$_SESSION['Udana']=true;
								header('Location: git.php');
								
							}
							else
							{
								
								throw new Exception($polaczenie->error);
								
							}
						
						}
					
					$polaczenie->close();
					
				}
		
		
		
		
		
		}
		catch(Exception $e)
		{
		  echo '<div class="error"> Błąd serwera! Przepraszamy za niedogodności i prosimy spróbować później. </div>';
		  //echo '<br> Informacja developerska: '.$e;
			
		}
 
	
  }
  
  
  
  
?>


<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title> Rejestracja </title>
 
  <style>
  .error{
	  color:red;
	  margin-top:10px;
	  margin-bottom:10px;
  }
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
 <h1 style="font-size: 47pt;"> Tworzenie konta </h1>
</div> <br><br><br>
 
 
   <form method="POST">
   
     <input type="text" name="Login" placeholder="Wpisz Login" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
	 <?php
	 
	 if(isset($_SESSION['e_Login']))
	 {
		 echo '<div class="error">'.$_SESSION['e_Login'].'</div>';
		 unset($_SESSION['e_Login']);
	 }
	 
	
	 ?>
	 <input type="password" name="Haslo1" placeholder="Wpisz hasło" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
	 
	 <input type="password" name="Haslo2" placeholder="Powtórz hasło" style="width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;"> <br><br>
     <?php
	 
	 if(isset($_SESSION['e_Haslo']))
	 {
		 echo '<div class="error">'.$_SESSION['e_Haslo'].'</div>';
		 unset($_SESSION['e_Haslo']);
	 }
	 
	
	 ?>
	 <input type="submit" value="Zarejestruj się" style="width: 15%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;  border: 2px solid black; background-color: pink;">
     <br>
	 <br>
	 <br>
	 <br>
	 <a href="praktykilogowanie.php" style="font-size: 15pt; border: 2px solid black;padding-left: 25px; padding-right: 25px; padding-top: 15px; padding-bottom: 15px; background-color: pink;"> Powrót </a>
   </form>
 
 
 
 
 
</body>
</head>
