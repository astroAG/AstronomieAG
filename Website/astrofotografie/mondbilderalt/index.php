<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>


<div class="page-title">Mondbilder</div>

<div class="page-text">
<?php
    $pictures = array( "mond.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
Dieses Mondbild wurde mit der Webcam ToUcam Pro II aufgenommen. Es besteht aus vielen Einzelbildern, auf denen jeweils nur ein Teil der Mondoberfläche zu sehen ist. In einem Bildbearbeitungsprogramm wurde dann aus vielen kleinen ein großes Bild.<br/> 
Autor: Moritz Grreif, geschossen im Juni 2006
<br/><br/><br/>
Dieses Bild ist ein Teilbild aus dem obigen. Jedes Teilbild besteht wiederum aus 10 gemittelten Aufnahmen. Die Farbsättigung wurde auf 0 gesetzt um farbfehler zu eliminieren. Schön kann man die Schatten der Kraterränder erkennen.
<?php
    $pictures = array( "mond1.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

<br/> Hier ein neueres Bild (29.Maerz 2007), bei dem mit dem Programm iMerge gearbeitet wurde, leider sind nicht alle Partien abgedeckt :-(</div>

<?php
    $pictures = array( "29.maerz_tou.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
