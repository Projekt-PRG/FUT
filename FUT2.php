


	<head>
	     <title> FLOWER  WORLD</title>
		<meta name="Abdu,Koriat und Nedim">
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="FUT-CSS.css"/>
		<title>Result</title>
	</head>

	<body>
	
		<div id="header">
	
		<h2><li1> FLOWER  WORLD</li1></h2>
		
				<ul>
					<li>Home</li>
					<li>Blumen </li>
					<li>Bäume</li>
					<li>Contact</li>	
					
				</ul>
				
				

		</div>
		
		<nav></nav>
		
		<div id="left">
		
<?php

$blume = $_POST["blume"];

if($blume=="Kamille")
{
echo "Die Echte Kamille (Matricaria chamomilla L.) ist eine Pflanzenart innerhalb der Familie der Korbbluetler (Asteraceae). 
Die urspruenglich in Sued- und Osteuropa verbreitete Art ist heute praktisch in ganz Europa heimisch. 
Sie ist eine alte Heilpflanze, die vor allem bei Magen- und Darmbeschwerden sowie bei Entzuendungen Verwendung findet.
Die Echte Kamille wurde vom Verband Deutscher Drogisten (VDD) im Jahre 1987 zur ersten Arzneipflanze des Jahres gekuert. 
Ausserdem waehlte man sie zur Heilpflanze des Jahres 2002.";
}
else if($blume=="Rosen")
{
echo "Die Rosen (Rosa) sind die namensgebende Pflanzengattung der Familie der Rosengewächse (Rosaceae). 
Die Gattung umfasst je nach Auffassung zwischen 100 und 250 Arten. 
Diese bilden durch ihre typischen Merkmale Stacheln, Hagebutten und unpaarig gefiederte Blätter eine sehr gut abgegrenzte Gattung.
Es sind Sträucher mit meist auffälligen, fünfzähligen Blüten.
Die meisten Arten sind nur in der Holarktis verbreitet und wachsen bevorzugt auf kalkhaltigen Böden.
Die Wissenschaft von den Rosen wird als Rhodologie bezeichnet.
Gärtnerisch wird zwischen Wildrosen und Kulturrosen unterschieden.
Die Rose wird seit der griechischen Antike als \"Königin der Blumen\" bezeichnet.
Rosen werden seit mehr als 2000 Jahren als Zierpflanzen gezüchtet.
Das aus den Kronblättern gewonnene Rosenöl ist ein wichtiger Grundstoff der Parfumindustrie.";
}
else
{
echo "Such lieber nach Kamille oder Rose!";
}

?>

		
			
		</div>
		<div id="right">
		<table>
			<th colspan="3">My Bros</th>
			<tr>
				<td><img src="http://www.blumen-salzmann.de/images/index/blumen-salzmann.jpg"/></td>

			</tr>
			<tr>
				<td><img src="http://www.gbsun.de/gb-pics/Blumen/56762.jpg"/></td>
	
			</tr>
			<tr>
				<td><img id="http://www.gbheld.com/upload/blumen-11c.jpg"/></td>

			</tr>
		</table>
		</div>
		<div id="footer">
			<div id="button">
				<p>Send me an <a href="file:///C:/Users/abdua/Desktop/Studium/Projekt%201/Projekt%201%20FUT/FUT-Seite[1].html"><span class="bold">e-mail</a></span>!</p>
			</div>
		</div>
	</body>

