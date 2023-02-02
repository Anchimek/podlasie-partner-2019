<?php

	session_start();
	require ("connecttwo.php");
	$data = $_POST['data'];
	$hurt = $_POST['nazwa'];
	$nazwisko = $_POST['nazw'];
	$sklep = $_POST['skl'];
	$muszt = $_POST['musz'];
	$tropi = $_POST['tro'];
	$prim = $_POST['prim'];
	$ananas = $_POST['anan'];
	$sqll = "INSERT INTO `formularze`(`data`, `nazwisko`, `hurtownia`, `sklep`, `Musztarda chrzanowa 12x265g`, `TROPI dla psa 3kg`, `PRIMAVERA 6l`, `Ananas MK kostka 24x565g`) VALUES ('$data','$nazwisko','$hurt','$sklep','$muszt','$tropi','$prim','$ananas')";
	
	$result2 = $conn2->query($sqll);
	
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
					
					
					<div class="log">
						</br></br></br>
					<center><h1> Zamówienie zostało wysłane</h1></center>
					
					</div>
			
					
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
