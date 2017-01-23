<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">Sombrerogalaxie M104, M81 und M51</div>

<div class="page-text">Alle Bilder wurden von der Familie Veltum mit der Atik aufgenommen, jeweils 60 Minuten Belichtungszeit (3 x 5 Minuten rot, 3 x 5 Minuten grün, 3 x 5 Minuten blau, 3 x 5 Minuten Luminanz). Mit Astroart wurden diverse Bearbeitungen durchgeführt, wie Dunkelbilder abgezogen, etc.
<?php
    $pictures = array( "m51-fertig-1mit-ha-kompremiert.jpg", "M81_deluxe.jpg", "sombrero_deluxe.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>

</div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
