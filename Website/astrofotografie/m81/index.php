<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>


<div class="page-title">Galaxiengruppe M81</div>

<div class="page-text">Der Galaxienhaufen M81 besteht aus zahlreichen Zwerggalaxien und drei relativ grossen Vertretern: M81, M82 und NGC3077.
<br/>
M81 ist eine Spiralgalaxie (6,9mag, Typ Sb, 20' x 12')
<br/>
M82 ist eine Starburstgalaxie (8,6mag, Typ I0, 11,2' x 4,3')
<br/>
NGC3077 ist eine elliptische Galaxie (10mag, Typ I0,5,4' × 4,5')
<br/>
Mit ca. 11 Millionen Lichtjahren Entfernung ist er einer der uns am nächsten Galaxienhaufen.
<br/>
Auf dieser tollen Aufnahme sind alle drei zu sehen:
<?php
    $pictures = array( "m81.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
Das Bild ist ein Stack aus 2x 10 min Belichtung mit Dunkelbildabzug. Konfiguration ähnlich wie bei den anderen Deep-Sky Objekten.
<br/>
Hier noch ein anderes Bild von M82:<br/> 

<?php
    $pictures = array( "m82deluxe.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>
Bilder von Klaus & Daniel Veltum
</div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
