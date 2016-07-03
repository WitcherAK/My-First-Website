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
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script> <!--podpinamy Jquery e stron yjquerry--> 
	
	<script type="text/javascript" src="jezyki.js">  
		
	</script>
	
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
		
		<div class=rectangle>
			<div id=flaga1 >
				<a href="cvpl.php" class=tilelink2>
				<img src="photo/Flag_Poland.png" onmouseover="polski();" onmouseout="znikaniepl();"/> </br>
				</a>
				<div id=wynik1> </div> 
			</div>
			<div id=flaga2>
				<a href="cven.php" class=tilelink2>
				<img src="photo/Flag_UK.png" onmouseover="angielski();" onmouseout="znikanieang();" /> </br>
				</a>
				<div id=wynik2> </div> 
			</div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear:both;"></div>
		<div class='rectangle'>
			<?php echo date("Y");?>&copy; Roland Górnisiewicz Wszelkie prawa zastrzeżone</br>
			Zapraszam do współpracy <i class="icon-mail-alt"></i>roland.gornisiewicz@gmail.com
		</div>
		
 	</div>
	<script type="text/javascript" >  // musi byc po lini dotyczacej JS
	
	</script>
</body>
</html>