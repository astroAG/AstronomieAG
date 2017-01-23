<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">Sunny Autosave</div>

<div class="page-text">
Sunny Autosave ist eine Erg�nzung zu <a href="http://www.pmdo.com/wdesire.htm" target="_blank">Steve Chamber's "Desire"</a>, mit dem man mit der <a href="http://www.avwd49.dsl.pipex.com/tcp2_mods.htm" target="_blank">modifizierten ToUCam</a> Astroaufnahmen machen kann. Leider wird bei "Desire" der Aufnahmespa� durch keine automatische Dateinamen�nderung getr�bt. Dies erledigt nun Sunny Autosave. Man macht ein Bild mit Desire, w�hlt dieses in Sunny AS aus, und dann arbeitet das Programm im Hintergrund: Sobald das ausgew�hlte Bild ge�ndert/�berschrieben wurde, speichert es Sunny AS in einem Wunschverzeichniss unter einem aussagekr�ftigen Dateinamen mit aktuellem Datum und automatisch erh�htem Index ab. 
<br/><br/>
In der aktuellen Version gibt es noch Funktionen zur zeitsparenden �nderung der Dateinamen ("Dunkelbild", "Testbild", "lange Belichtung", "Fokussierung",...). Damit kann man mit einem Klick die zu speichernden Bilder aussagekr�ftig benennen, das ist in einer Beobachtungsnacht sehr hilfreich.</div>

<?php
    $pictures = array( "sunnyautosave.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

<div class="page-text" align="right">
<a href="../software/Sunny_Autosave.zip">Download Version 1.0.0.0</a> <img src="../windows_flag_16x16.png" alt="Windows Version" border="0"/><br/>
<a href="../software/Sunny_Autosave_1.5.5.5.zip">Download Version 1.5.5.5</a> <img src="../windows_flag_16x16.png" alt="Windows Version" border="0"/></div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>