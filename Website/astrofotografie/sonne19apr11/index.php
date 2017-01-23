<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">Sonne am 19. April 2011</div>

<div class="page-text">Am 19. April hat eines unserer Mitglieder eine Reihe von Fotos gemacht, die stets den selben Ausschnitt der Sonne zeigen. Die Fotos wurden mit einer Casio QV4000 (Brennweite 7,1 mm; 1/30 sec. Belichtungszeit) zwischen 16:04 Uhr und 18:44 Uhr aufgenommen.

<?php
    $pictures = array( "Protuberanz.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>

Weiterhin wurde durch Zufall ein Sonnenfleck entdeckt. Die Parameter sind weitgehend dieselben, nur die Brennweite wurde auf 20,7 mm erh&ouml;ht.<br/> 

<?php
    $pictures = array( "Sonnenfleck.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

<br/><br/> S&auml;mtliche Fotos wurden von Patrick Hemberger in Kierspe (Nordrhein-Westfahlen) gemacht.</div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
