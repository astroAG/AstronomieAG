<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>


<div class="page-title">Orionnebel M42/M43</div>

<div class="page-text">mit Canon EOS 300D (ohne IF-Sperrfilter), durch Vixen Refraktor auf GPD-Montierung mit GoTo
aus Praunheim/Frankfurt vom 14.1.07, Aufnahme-Software "DSLR-Fokus", Bearbeitung mit "iris".
<br/><br/>
Daten zum Orionnebel:
<br/><br/>
 Entfernung - 1700 Lichtjahre<br/>
Helligkeit - 4.0 mag<br/>
Durchmesser - 25 Lj<br/>
Besonderheit - aktive Sternentstehungsregion<br/>
<?php
    $pictures = array( "orionhell.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
Die Aufnahme oben ist ein gemitteltes Bild aus 2 qualitativ schon hochwertigen Aufnahmen. Jeder Aufnahme wurde ein Dunkelbild abgezogen, die Bilder ausgerichtet und dann gemittelt. Es wurde nachträglich etwas aufgehellt, um die Randgebiete besser rauszubringen. Unten ein Ausschnitt des 6 Mega-Pixel Bildes.<br/> 

<?php
    $pictures = array( "orion_center1.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

</div>



<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
