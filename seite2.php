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
echo "Die Rosen (Rosa) sind die namensgebende Pflanzengattung der Familie der Rosengew�chse (Rosaceae). 
Die Gattung umfasst je nach Auffassung zwischen 100 und 250 Arten. 
Diese bilden durch ihre typischen Merkmale Stacheln, Hagebutten und unpaarig gefiederte Bl�tter eine sehr gut abgegrenzte Gattung.
Es sind Str�ucher mit meist auff�lligen, f�nfz�hligen Bl�ten.
Die meisten Arten sind nur in der Holarktis verbreitet und wachsen bevorzugt auf kalkhaltigen B�den.
Die Wissenschaft von den Rosen wird als Rhodologie bezeichnet.
G�rtnerisch wird zwischen Wildrosen und Kulturrosen unterschieden.
Die Rose wird seit der griechischen Antike als \"K�nigin der Blumen\" bezeichnet.
Rosen werden seit mehr als 2000 Jahren als Zierpflanzen gez�chtet.
Das aus den Kronbl�ttern gewonnene Rosen�l ist ein wichtiger Grundstoff der Parfumindustrie.";
}
else
{
echo "Such lieber nach Kamille oder Rose!";
}

?>