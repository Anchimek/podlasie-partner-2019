<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	if($_SESSION['user'] == "Joanna")
	{header('Location: zamowienia.php');}
	
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
					<article>
						<form action="ready.php" method="post">
						<div class="blank" id="invoice">
						<div class="top"> 
								
							<ul>Nazwa hurtowni:</br> <input type="text" name="nazwa" required> </br></ul>
							<ul>Data zamówienia:</br> <input type="date" name="data" required> </br></ul>
							<ul>Data dostawy:</br> <input type="date"> </br></ul>
							<ul>Nazwa sklepu:</br> <input type="text" name="skl" required> </br></ul>
							<ul>Nazwisko przedstawiciela:</br> <input type="text" value='<?php echo $_SESSION['secname']?>' name="nazw" required> </ul>
								
						</div>
						
						
						<div class="second">
											<h1>MISPOL:</h1>
							<ul>Musztarda chrzanowa </br>12x265g:</br> <input type="number" min="1" name="musz"> </br></ul>
							<ul>Musztarda sarepska</br> 12x190g:</br> <input type="number"min="1"> </br></ul>
							<ul>Majonez wyborowy</br> 12x260g:</br> <input type="number"min="1"> </br></ul>
							<ul>Pasztet z drobiem </br>12x290g:</br> <input type="number"min="1" > </ul>
							<ul>Konserwa Tyrolska </br>12x300g:</br> <input type="number"min="1"> </br></ul>
							<ul>Gulasz Angielski</br> 12x300g:</br> <input type="number"min="1"> </br></ul>
							<ul>Szynka drobiowa mielona </br>30x110g:</br> <input type="number"min="1"> </br></ul>
							<ul>Szynka wieprzowa mielona </br>30x100g:</br> <input type="number" min="1"> </ul>
						</div>
						<div class="third">
											<h1>MISPOL TROPI:</h1>
							<ul>TROPI dla psa </br>3kg:</br> <input type="number" min="1" name="tro"> </br></ul>
							<ul>TROPI dla kota</br> 2kg:</br> <input type="number"min="1"> </br></ul>
							<ul>TROPI karma mokra dla psa</br>10x415g:</br> <input type="number"min="1"> </br></ul>
							<ul>TROPI karma mokra dla kota </br>10x415g:</br> <input type="number"min="1" > </ul>
							<ul>TROPI DUO mok. d/p </br>10x415g:</br> <input type="number"min="1"> </br></ul>
							<ul>TROPI kiełbasa d/psa</br> 8x850g:</br> <input type="number"min="1"> </br></ul>
							<ul>TROPI pasztet d/psa </br>8x300g:</br> <input type="number"min="1"> </br></ul>
							<ul>Saszetki mix dla psa </br>10+2:</br> <input type="number" min="1"> </ul>
						</div>
						<div class="fourth">
											<h1>PRIMAVERA:</h1>
							<ul>PRIMAVERA 6l: </br> <input type="number" min="1" name="prim"> </br></ul>
							<ul>PRIMAVERA gaz</br> 24x0.5l</br> <input type="number"min="1" > </br></ul>
							<ul>PRIMAVERA gaz</br>6x1l</br> <input type="number"min="1"> </br></ul>
							<ul>PRIMAVERA gaz </br>6x1.5l:</br> <input type="number"min="1" > </ul>
							<ul>PRIMAVERA n/gaz </br>24x0.5l</br> <input type="number"min="1"> </br></ul>
							<ul>PRIMAVERA n/gaz</br> 6x1l:</br> <input type="number"min="1"> </br></ul>
							<ul>PRIMAVERA n/gaz </br>6x1.5l:</br> <input type="number"min="1"> </br></ul>
						</div>
						<div class="five">
											<h1>KONSHURT:</h1>
							<ul>Ananas MK kostka</br>24x565g:</br> <input type="number" min="1" name="anan"> </br></ul>
							<ul>Ananas MK plastry</br> 24x565g:</br> <input type="number"min="1"> </br></ul>
							<ul>Fasola Czerwona MK</br>24x565g:</br> <input type="number"min="1"> </br></ul>
							<ul>Koktajl owocowy </br>10x415g:</br> <input type="number"min="1" > </ul>
							<ul>Pasta z łososia łagodna </br>10x415g:</br> <input type="number"min="1"> </br></ul>
							<ul>Pasta z łososia ostra</br> 8x850g:</br> <input type="number"min="1"> </br></ul>
							<ul>Olej kokosowy</br>8x300g:</br> <input type="number"min="1"> </br></ul>
							<ul>Oliwa z oliwek </br>14x250g:</br> <input type="number" min="1"> </ul>
						</div>
						<div class="six">
											<h1>KROS:</h1>
							<ul>Bułka tarta</br>10x500g:</br> <input type="number" min="1"> </br></ul>
							<ul>Fasola drobna</br> 12x400g:</br> <input type="number"min="1"> </br></ul>
							<ul>Groch cały</br>12x440g:</br> <input type="number"min="1"> </br></ul>
							<ul>Groch łuskany </br>12x440g:</br> <input type="number"min="1" > </ul>			
						</div>
							<div class="seven">
											<h1>PZZ:</h1>
							<ul>Mąka tortowa</br>10x500g:</br> <input type="number" min="1"> </br></ul>
							<ul>Kasza jęczmienna</br> 12x400g:</br> <input type="number"min="1"> </br></ul>
							<ul>Ryż biały</br>12x440g:</br> <input type="number"min="1"> </br></ul>
							<ul>Mąka ziemniaczana </br>12x500g:</br> <input type="number"min="1" > </ul>			
						</div>
							<button type="submit"> Wyślij formularz </button>
						</form action="ready.php" method="post">
					
						
						<div class="sum">
						
						<a href="javascript:window.print();">Wydrukuj</a>&nbsp;&nbsp;&nbsp;&nbsp;		
						
						
						

						 
						</div>
						
						</div>
						
					</article>
					
					
					
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
