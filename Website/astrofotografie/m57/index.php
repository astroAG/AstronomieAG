<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>


<div class="page-title">M57</div>

<div class="page-text">Diese Aufnahmen sind mit einem 10 Zoll Meade LX200 auf Altazimut-Montierung gemacht. Als Kamera 
kam wieder die ToUcam Pro II (SC) zur Verwendung. Wir beobachteten in Praunheim auf den Feldern. Mit viel Geduld wurde 
der Fokus optimiert und die Objekte per "Guiding"-Geschwindigkeit von dem Meade Teleskop auf dem CCD-Chip zentriert. Als 
Software wurde "Desire" und später "GIOTTO" benutzt. Auch eine selbstgeschriebene Software wurde verwendet: ASTROFREEZE (siehe <a href="../../software">Software</a>). 
Die Beobachtung wurde unter schlechtesten Bedingungen durchgeführt: Wolkenschleier, Fast-Vollmond, Kaelte, Mitten in Frankfurt,....
Hier unbearbeitete Einzelbilder mit 20 sec Belichtungszeit: 
<?php
    $pictures = array( "m57_1.jpeg", "m57_2.jpeg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
Die Bilder wurden mit Giotto und GIMP 2 etwas nachbearbeitet: <br/> 

<?php
    $pictures = array( "m57addiert.JPG", "m57kumuliert.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>

<br/> Jetzt wurde der Kontrast verbessert, und das Bild gegl&auml;ttet, das ist schon ein ganz ansehnliches Ergebnis:

<?php
    $pictures = array( "m57kontrast.JPG" , "m57.jpg");
    include( "../../layout/insert_picture-table.php" );
?>

<br/>Mit einem selbstgeschrieben Algorithmus (Delphi) (siehe <a href="../../software">Software</a>) kann man unter Anderem folgendes Ergebnis erzielen: 

<?php
    $pictures = array( "m57nachastrofreeze.JPEG" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
Dabei wird einfach ab einem bestimmten Helligkeitswert pro Pixel, der Pixel erhellt oder verdunkelt, dadurch kommen schwache Erhellungen besser zum Vorschein. Mit etwas Geschick kann man so aus schwachen Bilder mehr Informationen erhalten.
</div>
 
<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
