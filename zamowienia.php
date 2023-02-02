<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}

	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
				<meta charset="utf-8"/>
				<title> Tytuł </title>
				<meta name="descripton" content="opis"/>
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<link rel="stylesheet" href="main.css" type="text/css">
				<link rel="stylesheet" href="css/fontello.css" type="text/css">
				<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> -->
				<link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Merienda+One&display=swap" rel="stylesheet">
				<link rel="stylesheet" type="text/css" href="print.css" media="print" />
				<style type="text/css"><?php include './main.css'; ?></style>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
				<script src="js/jquery.min.js"></script>
				<script src="js/jsPDF/dist/jspdf.min.js"></script>

</head>
<body>
					
			<div id="container">
					<header>
					
							<div class="head">
							
									<h1> Podlasie Partner</h1>
									<h2> Asystent handlowca </h2>
								
							</div>		
								
					
					<nav>
					
							<center>
								<div class="navv">
							
									<ul class="menu">
											<li><a href="zaloguj-sie-do-serwisu"> Logowanie </a></li>
											<li><a href="pomoc-dla-nowych-uzytkownikow">Pomoc</a></li>
											<li><a href="kontakt-administrator-strony">Kontakt</a></li>			
									</ul>
							</center>
							</div>
					
					</nav>
					
					<header>
					
			
					<?php

					echo "<p>Witaj " .$_SESSION['user'].'! [<a href="logout.php"> Wyloguj się </a>]';
					?>
					<table width="1000" align="center" border="1" bordercolor="#000"  cellpadding="3" cellspacing="2">
						<div class="new" >
						<?php
					ini_set("display_errors", 0);
					require_once ("conn.php");
					$conect = @new mysqli($host, $db_user, $db_password, $db_name);	
					mysqli_query($conect, "SET CHARSET utf8");
					mysqli_query($conect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
					mysqli_select_db($conect, $db_name);
					$zapytanietxt = file_get_contents("question.txt");
					$rez = mysqli_query($conect, $zapytanietxt);
					$ile = mysqli_num_rows($rez);
				
if ($ile>=1) 
{
echo<<<END
<td width="50" align="center" bgcolor="c4c4c4">idklienta</td>
<td width="100" align="center" bgcolor="c4c4c4">data</td>
<td width="100" align="center" bgcolor="c4c4c4">nazwisko</td>
<td width="100" align="center" bgcolor="c4c4c4">hurtownia</td>
<td width="50" align="center" bgcolor="c4c4c4">sklep</td>
<td width="100" align="center" bgcolor="c4c4c4">Musztarda chrzanowa 12x265g</td>
<td width="100" align="center" bgcolor="c4c4c4">TROPI dla psa 3kg</td>
<td width="100" align="center" bgcolor="c4c4c4">PRIMAVERA 6l</td>
<td width="100" align="center" bgcolor="c4c4c4">Ananas MK kostka 24x565g </td>
</tr><tr>
END;
}
					
					for ($i = 1; $i <= $ile; $i++) 
	{
		
		$row = mysqli_fetch_assoc($rez);
		$a1 = $row['ID'];
		$a2 = $row['data'];
		$a3 = $row['nazwisko'];
		$a4 = $row['hurtownia'];
		$a5 = $row['sklep'];
		$a6 = $row['Musztarda chrzanowa 12x265g'];
		$a7 = $row['TROPI dla psa 3kg'];
		$a8 = $row['PRIMAVERA 6l'];
		$a9 = $row['Ananas MK kostka 24x565g'];
			
		
echo<<<END
</br>	<td width="50" align="center">$a1</td>
<td width="100" align="center">$a2</td>
<td width="100" align="center">$a3</td>
<td width="100" align="center">$a4</td>
<td width="100" align="center">$a5</td>
<td width="100" align="center">$a6</td>
<td width="100" align="center">$a7</td>
<td width="100" align="center">$a8</td>
<td width="100" align="center">$a9</td>
</tr><tr>
END;
			
	}
					
					
					
					
					?>
		</table>			</br>	
						</div>
					
					
					
					
					</header>

						<footer>
								<div class="rectangle">
										<div class="navigation">
											<ul class="footermenu">		
											 <h4>Szybki dostęp:</h4>
											<li><a href="zaloguj-sie-do-serwisu"> <i class="icon-ok-circled"></i>Logowanie</a></li>
											<li><a href="pomoc-dla-nowych-uzytkownikow"><i class="icon-help-circled-alt"></i>Pomoc</a></li>
											<li><a href="kontakt-administrator-strony"><i class="icon-phone-circled"></i>Kontakt</a></li>	
											<li><a href="http://www.podlasie-partner.pl/" target="_blank"><i class="icon-globe"></i>Podlasie Partner - strona główna</a></li>	
											
									</ul>
										
										</div>
										
										<div class="information">
											
											<h4> Problemy ze stroną? </br> Skontaktuj się z administratorem: </h4> <i class="icon-user"></i>Jakub Anchimowicz </br> <a href="tel:+48796105966" ><i class="icon-phone-circled"></i>796-105-966</a> </br> <i class="icon-mail-alt"></i>jakub.anchimowicz@gmail.com
										
										
										</div>
										
										<div class="footercontact">
										<h4>Kontakt:</h4>
										<i class="icon-user"></i>Tadeusz Stopnicki </br> <a href="tel:+48726304100"><i class="icon-phone-circled"></i>726-304-100 </a> </br> <i class="icon-mail-alt" ></i>tadeusz.stopnicki@podlasie-partner.pl</br><i class="icon-user"></i>Jakub Anchimowicz </br> <a href="tel:+48796105966" ><i class="icon-phone-circled"></i>796-105-966</a> </br> <i class="icon-mail-alt"></i> jakub.anchimowicz@gmail.com
										
										
										
										</div>
										<div class="author">Stronę wykonał Jakub Anchimowicz. Wszelkie prawa zastrzeżone.</div>
								</div>
								
						</footer>
					</header>
					
			</div>
</body>
</html>
