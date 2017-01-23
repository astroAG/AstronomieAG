<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>


<div class="page-title">Saturn mit der ToUCam Pro II</div>

<div class="page-text">Alle Bilder sind mit einem fünf Zoll Celestron Spiegelteleskop mit 2x Barlowlinse auf parallaktischer Montierung vom 11.1.07 aus Praunheim, Frankfurt  gemacht. Kamera war eine Philips ToU Cam Pro II die mittels GIOTTO angesteuert wurde. Die Belichtungszeit betrug etwa 1/25 s.  Nachbearbeitet wurden die Bilder mit GIOTTO und REGISTAX.
<br/><br/>
von Moritz Greif
<?php
    $pictures = array( "giotto_1.jpg", "giotto_gescharft.jpg", "Saturn_webcam.jpg" );
    include( "../../layout/insert_picture-table.php" );
?>
<br/>
...und hier das beste Bild, man erkennt Wolkenstrukturen, und mit Phantasie den Hauch eines Schimmers der Cassini-Teilung.....Das Bild ist aus 56 Bildern gemittelt und dann etwas geschärft ::<br/> 

<?php
    $pictures = array( "gio_gesch_2.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>
For all pictures: copyright 2007 by Moritz Greif/Astro-AG Liebigschule
</div>
<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
