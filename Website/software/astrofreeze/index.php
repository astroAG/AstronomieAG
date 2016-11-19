<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<div class="page-title">Astrofreeze</div>

<div class="page-text">Dies ist eine Bildbearbeitungssoftware zum Bearbeiten Astronomischer Aufnahmen, die ein extrem schwaches Kontrastverhältnis aufweisen. Mit einer Schwellenwertangabe, können Pixel ab einer bestimmten Helligkeit sehr verstärkt, und andere ab einer niedrigeren Helligkeit sehr verdunkelt werden. Desweiteren kann man Dunkelbilder abziehen und Hotpixelmasken erstellen.<br/>Optimal in Zusammenarbeit mit <a href="http://www.videoastronomy.org/giotto.htm" target="_blank">GIOTTO</a>, auch einem Pflicht-Programm der Astrofotografie!</div>

<?php
    $pictures = array( "astrofreeze.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

<div class="page-text" align="right">
<a href="ASTRO_FREEZE_2.0.zip">Download Version 2.0</a> <img src="../windows_flag_16x16.png" alt="Windows Version" border="0"/></div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>