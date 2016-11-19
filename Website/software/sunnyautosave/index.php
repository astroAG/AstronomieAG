<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<div class="page-title">Sunny Autosave</div>

<div class="page-text">
Sunny Autosave ist eine Ergänzung zu <a href="http://www.pmdo.com/wdesire.htm" target="_blank">Steve Chamber's "Desire"</a>, mit dem man mit der <a href="http://www.avwd49.dsl.pipex.com/tcp2_mods.htm" target="_blank">modifizierten ToUCam</a> Astroaufnahmen machen kann. Leider wird bei "Desire" der Aufnahmespaß durch keine automatische Dateinamenänderung getrübt. Dies erledigt nun Sunny Autosave. Man macht ein Bild mit Desire, wählt dieses in Sunny AS aus, und dann arbeitet das Programm im Hintergrund: Sobald das ausgewählte Bild geändert/überschrieben wurde, speichert es Sunny AS in einem Wunschverzeichniss unter einem aussagekräftigen Dateinamen mit aktuellem Datum und automatisch erhöhtem Index ab. 
<br/><br/>
In der aktuellen Version gibt es noch Funktionen zur zeitsparenden Änderung der Dateinamen ("Dunkelbild", "Testbild", "lange Belichtung", "Fokussierung",...). Damit kann man mit einem Klick die zu speichernden Bilder aussagekräftig benennen, das ist in einer Beobachtungsnacht sehr hilfreich.</div>

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