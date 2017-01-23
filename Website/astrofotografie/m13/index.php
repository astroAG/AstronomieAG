<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">M13 - Aufnahmen mit der Webcam</div>

<div class="page-text">Diese Aufnahmen wurden am 7.10.06 im Taunus/Pechberg durch ein Celestron C5 gemacht. Die benutzte Kamera ist eine ToUCam Pro II nach der SC (Steve Chambers) Methode auf Langzeitbelichtung modifiziert. Das Seeing war schlecht: ein Fast-Vollmond knallte uns recht hoch vom Himmel, zum Glück war M13 genau im Westen, den Mond im Osten.
Hier unbearbeitete Einzelbilder mit 20 sec Belichtungszeit: 

<?php
    $pictures = array( "m13scharf.jpg", "m13zentral.jpg");
    include( "../../layout/insert_picture-table.php" );
?>

Die Bilder wurden mit Giotto und GIMP 2 etwas nachbearbeitet: <br/> 

<?php
    $pictures = array( "gemittelt.jpg", "extreem.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>

Jetzt sind mehrere Einzelbilder (sogar oft die gleichen, einfach kopiert :-) gemittelt oder addiert worden: 

<?php
    $pictures = array( "turbo.jpg", "top.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
Deutlich fallen die Fehlerpixel auf, durch spezielle Methoden (GIOTTO) bekommt man die auch noch weg. Aber alles in allem für ToUCam's First Light gar kein schlechtes Ergebnis! 

</div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
