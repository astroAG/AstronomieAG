<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">Ausflug nach Freiburg 11 und 12 Juli 2016</div>

<div class="page-text">Test
<br/><br/>

<!-- Hier Text -->

<br/><br/>
</div>

<?php
    $pictures = array( "Landschaft.jpg", "Wald.jpg", "Turm.jpg", "Bestshitever.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
