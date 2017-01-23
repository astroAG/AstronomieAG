<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>


<div class="page-title">Orionnebel</div>

<div class="page-text">Mit der mod. TouCam Pro II und dem C5. Am 23.12.06 in Frankfurt/M. Die Fokussierung hat sich als extrem schwierig erwiesen, weshalb die Software "ForMe_Focus.exe" entstanden ist (siehe <a href="../../software">Software</a>). Voraussetzung für eine amtliche Fokussierung ist tatsächlich die exakteste Nachführung. Demnächst werden diese Aufnahmen mit dem 10" Meade LX200 wiederholt. Man darf gespannt sein.

<?php
    $pictures = array( "orion_web (1).jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
Hier mit dem Programm "Astrofreeze_2.0.exe" bearbeitet:<br/> 

<?php
    $pictures = array( "orion_web (2).JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

<br/> Hier die Rohbilder mit GIOTTO addiert:</div>

<?php
    $pictures = array( "orion_web.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
