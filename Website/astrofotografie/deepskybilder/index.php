<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">Deep Sky Fotografie mit der digitalen Spiegelreflex</div>

<div class="page-text">Hier sieht man M13 im Herkules (Sommer 2006). Das Bild wurde mit einer Langzeitbelichtung
 von mehreren Minuten mit einer digitalen Spiegelreflex-Kamera (CANON EOS 300)  und Teleobjektiv auf einem nachgeführten,
 computergesteuerten Stativ aufgenommen (deutsche Montierung). M13 gehört zu den größten Kugelsternhaufen am Nordsternhim
mel (5,3 mag). Das Bild wurde von Klaus & Daniel Veltum aufgenommen. Daneben befindet sich ein Ausschnitt
<br/>

<?php
    $pictures = array(" m13.jpg", "m13_2.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>

Hier ist etwas versteckt der Ringnebel in der Leier M57 zu sehen. Wer findet ihn?
Es handelt sich um die gleiche Aufnahmetechnik wie bei M13.
(aufgenommen von Klaus & Daniel Veltum)
<br/>

<?php
    $pictures = array("m57.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>

Dies ist eine sensationelle Aufnahme von M57. Bei diesem Bild wurde von der Familie Veltum zum ersten Mal eine Nachführungsmethode ausprobiert, 
die mit Hilfe eines zusätzlichen Tubus (ETX 90) am Hauptteleskop (Vixen Refraktor) über eine Software am PC einen Leitstern benutzt, um damit  
so exakt nachzuführen, das auch sehr lange Belichtungen ohne Verwischungen möglich sind. Das Bild wurde in Praunheim mit einer Canon EOS 300D aufgenommen. 
<br/>

<?php
    $pictures = array("ausschnittm57veltum.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
</div>


<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
