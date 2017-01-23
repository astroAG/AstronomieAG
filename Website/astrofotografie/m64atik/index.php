<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>


<div class="page-title">M64 mit neuer ATIK-16HR der Familie Veltum</div>

<div class="page-text">[1.4 Megapixel CCD camera, with 16 bit and high efficiency cooling]
<br/><br/>
Das Bild wurde von den Veltums am 22.4.07 im Odenwald bei hellem Halbmond aufgenommen:

<?php
    $pictures = array( "m64-lrgb-master-ha-farbbalance-kompremiert.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
Teleskop war ein 800mm APO-Refraktor von Vixen, mit einer Meade LPI an einem ETX90 Tubus autogeguided. Das Bild (LRGB Komposit) entstand aus insg.12  Rohbildern à 5 Minuten , d.h. 3 x 5min Rot, 3x 5min Blau, 3x5min Grün, 3x5min Luminanz (nur IF-Sperrfilter), zusätzlich wurde ein gemitteltes Dunkelbild abgezogen. Bearbeitet wurde das Bild mit Astroart 4.0.
<br>
Hier ebenfalls eine  HD Version:
<?php
    $pictures = array( "m64_gross.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
</div>
<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
