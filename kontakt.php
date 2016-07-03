<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8"/>
	<title>Roland Górnisiewicz</title>
	<meta name="description" content='Witam serdecznie na mojej stronie'/>
	<meta name="keywords" content="Roland Górnisiewicz AGH Akademia Górniczo Hutnicza Webmaster Python C++ C HTML CSS JS Kraków Krakow automatyka i robotyka informatyka" >  <!--   tutaj jakby szukali w google to po jakich slowach -->
	<meta http-equiv="X-UA-Compatible" content = "IE"=edge,chrome=1 >

	<link rel='stylesheet' href='css/style.css' type="text/css"/>
	<link rel='stylesheet' href='css/fontello.css' type="text/css"/>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="timer.js"></script>
</head>


<body onload="odliczanie();"> <!-- wylowuje funkcje odluczanie w timer.js -->
<!-- boczny panel -->
	<div id='boczna'>
		<div id='user2'>
			<a href="kimjestem.php" class=tilelink2>
				<i class="icon-user2"></i> 
			</a>
		</div>
		<div id='laptop2'>
		<a href="laptop.php" class=tilelink2>
			<i class="icon-laptop2"></i> 
			</a>
		</div>
		<div id='cv2'>
		<a href="wybor.php" class=tilelink2>
			<i class="icon-graduation-cap2"></i> 
			</a>
		</div>
		<div id='kontakt2'>
		<a href="kontakt.php" class=tilelink2>
			<i class="icon-mail2"></i> 
			</a>
		</div>
		<div id='linkedin2'>
		<a href="https://www.linkedin.com/in/roland-g%C3%B3rnisiewicz-93214810b?trk=hp-identity-photo" class=tilelink2 target="_blank">
			<i class="icon-linkedin2"></i> 
			</a>
		</div>
		<div id='fb2'>
		<a href="https://www.facebook.com/roland.gornisiewicz" class=tilelink2 target="_blank">
			<i class="icon-facebook-squared2"></i> 
			</a>
		</div>
	</div>
	
	<!-- główny tekst--> 
	<div id='container'> 
		<div class="rectangle">
			<div id='logo'>
				<a href="index.php" class=tilelink2>
				Roland Górnisiewicz
				</a>
			</div>
			<div id='clock'>
				
			</div>
			<div style="clear:both;"></div>
		</div>
		<div class="square">
			<div class=title1>
				<a href="kimjestem.php" class=tilelink>
				<i class="icon-user"></i> </br>
				Kim jestem?
				</a>
			</div>
			<div class=title1ipol>
				<a href="laptop.php" class=tilelink>
				<i class="icon-laptop"></i> </br>
				Freestyle mode
				</a>
			</div>
			<div style="clear:both"></div>
			<div class=title2>
				<a href="wybor.php" class=tilelink>
				<i class="icon-graduation-cap"></i> </br>
				Curriculum Vitae
				</a>
			</div>
			<div class=title3>
				<a href="kontakt.php" class=tilelink>
				<i class="icon-mail"></i> </br>
				Kontakt
				</a>
			</div>
			<div style="clear:both"></div>
			<div class=title4>
				<i>"Najlepszym sposobem, by wpaść na dobry pomysł jest... </br> mieć wiele pomysłów.   " </i>
    ~ Linus Pauling
			</div>			
		</div>
		<div class='square'>
			<div class='title5'>
			<b>email:</b> roland.gornisiewicz@gmail.com </br>
			<b>email2:</b>  rolcii@gmail.com </br>
			<b>tel:</b>  503760560 </br></br>

			
			</div>
			<div class='fb'>
				<a href="https://www.facebook.com/roland.gorniewicz" class=tilelink target="_blank">
				<i class="icon-facebook-squared"></i>
				</a>
			</div>
			<div class='linkedin'>
				<a href="https://www.linkedin.com/in/roland-g%C3%B3rnisiewicz-93214810b?trk=hp-identity-photo" class=tilelink target="_blank">
				<i class="icon-linkedin"></i>
				</a>
			</div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear:both;"></div>
		<div class='rectangle'>
			<?php echo date("Y");?> &copy; Roland Górnisiewicz Wszelkie prawa zastrzeżone</br>
			Zapraszam do współpracy <i class="icon-mail-alt"></i>roland.gornisiewicz@gmail.com
		</div>
		
		
 	</div>
</body>
</html>