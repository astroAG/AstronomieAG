<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d3");
	d.className += " active";
</script>

<div class="page-title">ForMe Focus</div>

<div class="page-text">ForMe Focus ist ein Tool, um die Schärfe von Webcamaufnahmen zu beurteilen. Optimal in Zusammenarbeit mit  <a href="http://www.pmdo.com/wdesire.htm" target="_blank">Desire von Steve Chambers</a>, um mit einer modifizierten Webcam zu fokussieren. Das Tool kann .bmp - Dateien öffnen, Helligkeitsschwerpunkte suchen, den maximalen Peak-Wert anzeigen, sowie ein Intesity-Diagramm des Himmelsobjektes generieren. Dabei kann ForMe Focus per Timer eine Datei in Echtzeit auf Aktualisierung testen, und ein neues Bild anzeigen. Im Diagramm wird dann das Bild mit einer anderen Farbe analysiert (Version 1), sodass man sofort sehen kann, ob sich der Focus verbessert oder verschlechtert hat. In der Version 2 wird das alte und das neue Bild in zwei Tabs angezeigt, zwischen denen man besser vergleichen kann.</div>

<?php
    $pictures = array( "formefocus.JPG" );
    include( "../../layout/insert_picture-table.php" );
?>

<div class="page-text" align="right">
<a href="ForMe_Focus.zip">Download Version 1.0</a> <img src="../windows_flag_16x16.png" alt="Windows Version" border="0"/><br/>
<a href="ForMe_Focus_2.zip">Download Version 2.0</a> <img src="../windows_flag_16x16.png" alt="Windows Version" border="0"/></div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>