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