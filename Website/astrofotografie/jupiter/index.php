<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<br/>
<div class="page-title">Der größte Planet: Jupiter</div>

<div class="page-text">
<br/>
<?php
    $pictures = array( "jup1.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
Dieses Bild zeigt den fünften Planet des Sonnensystems, Jupiter. Jupiter ist ein Gasplanet. Sehr schön kann man Wolkenstreifen erkennen.
<br/>
<br/>
Dieses Bild wurde wiederum mit der ToUCam geschossen, unmodifiziert. Es ist ein gemitteltes Bild aus ca. 100 selektierten Einzelaufnahmen. Die Aufnahme sowie Weiterverarbeitung wurden mit dem Programm "GIOTTO" vorgenommen. Als Teleskop wurde ein C5 benutzt (1250mm Brennweite).<br/> 

<?php
    $pictures = array( "jupiter_reg.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

Dieses Bild wurde mit "REGISTAX" gestackt, und mit dem Wavelet - Filter geschärft. Man kann ganz links am oberen dunklen Wolkenstreifen wahrscheinlich den Grossen Roten Fleck sehen. Auch zwei Monde sind auf dem Bild:</div>


<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
