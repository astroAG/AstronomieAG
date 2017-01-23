<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">M13 - Zweite Aufnahme</div>

<div class="page-text">Diese Aufnahmen sind am 9.10.06 mit einem 10 Zoll Meade LX200 auf Altazimut-Montierung gemacht. Als Kamera kam wieder die ToUcam Pro II (SC) zur Verwendung. Wir beobachteten in Praunheim/Frankfurt auf den Feldern. Mit viel Geduld wurde der Fokus optimiert und die Objekte per "Guiding"-Geschwindigkeit von dem Meade Teleskop auf dem CCD-Chip zentriert. Als Software wurde "Desire" und später "GIOTTO" benutzt. Die Beobachtung wurde unter schlechtesten Bedingungen durchgeführt: Wolkenschleier, Fast-Vollmond, Kaelte, Mitten in Frankfurt,....
<br/><br/>
Hier ist wieder der berühmte Kugelsternhaufen M13 zu sehen, jeweils 15-20 s Belichtungszeit, einige Bilder gemittelt oder addiert (GIOTTO). 
<?php
    $pictures = array( "m13_gem_meade.jpg" , "m13_kum_meade.jpg", "m13_addiert_meade.jpg");
    include( "../../layout/insert_picture-table.php" );
?>

Und hier schliesslich das beste Bild (man beachte die Schaerfe(!), im Vergleich zu den <a href="../m13">ersten M13 Bildern)</a><br/> 

<?php
    $pictures = array( "bestesm13_meade.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

</div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
