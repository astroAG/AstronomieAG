<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">Krebsnebel M1</div>

<div class="page-text">Der 6300 Lichtjahre entfernte Supernovaüberrest M1 (Crab Nebula) mit der schwachen Helligkeit von 8,4 mag wurde in der gleichen Beobachtungsnacht 
wie M42/M43 mit der Canon EOS 300D aus Praunheim/Frankfurt aufgenommen.

<?php
    $pictures = array( "m1-120s-3stack.jpg", "crab360s.jpg");
    include( "../../layout/insert_picture-table.php" );
?>

Hier ein aktuelles Bild mit 360 s Belichtungszeit, ISO1600, Canon 300D mit Astro-Filter (IF-Filter ausgebaut), und Nebelfilter für Stadtlicht-Sperrung, an Vixen Refraktor mit 2x Barlow, Autogeguided mit Meade LPI, Aufnahmesoftware DSLR Focus. 
Von Frankfurt aus am 11.3.07, aufgenommen von Klaus & Daniel Veltum.
Hier nochmal Bilder aus einer anderen Beobachtungsnacht, diesmal mit Nebel-Filter:

<?php 
	$pictures = array("M1deluxe.jpg");
    include( "../../layout/insert_picture-table.php" );
?>

</div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
