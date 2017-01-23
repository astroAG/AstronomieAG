<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d1");
	d.className += " active";
</script>

<div class="page-title">Meade Lightbridge 12"</div>

<div class="page-text">Dank einer sehr großzügigen <a href="../../berichte/unsereneuen">Spende der Deutschen Bank</a> schaffte sich die Astro-AG Ende 2007 ein sehr lichtstarkes, neues Teleskop an.<br/>
Es handelt sich um ein Dobson-Teleskop; eine Teleskop-Bauweise, die vollständig auf elektronische Bedienungshilfen, wie Nachführung oder automatische Positionierung verzichtet, dafür aber extrem Lichtstark und zudem noch sehr leicht zu transportieren ist.</div>

<?php
    $pictures = array( "lightbridge.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>