<?php
    $rootdir = "../";
    include("../inhalt/davor.inc.php");
?>

<script type="text/javascript">
	var d = document.getElementById("d2");
	d.className += " active";
</script>

<div class="page-title">Newsletter/RSS-Feed</div>

<div class="page-text">Hier bieten wir Ihnen zwei bequeme M�glichkeiten, sich automatisch �ber Neuigkeiten  um die AG und aus der AG benachrichtigen zu lassen. So erfahren Sie zum Beispiel alles �ber aktuelle und geplante Veranstaltungen oder Neuigkeiten auf der Webseite. Die Ausgaben/Aktualisierungen erscheinen (je nach Anlass) unregelm��ig.
<br/><br/></div>

<br/>
<div class="page-section">Newsletter <font size="0.7em" color="#808080">[empfohlen]</font></div>
<div class="page-text">Tragen Sie ihre E-Mail-Adresse ein und w�hlen Sie, ob Sie sich an- oder abmelden m�chten. (Hat sich Ihre Mailadresse ge�ndert, melden Sie sich bitte zuerst mit der Alten ab und anschlie�end mit der neuen Adresse an.)<br/>
<i>Ihre hinterlegten Daten werden ausschlie�lich f�r den Newsletterversand genutzt, nicht weitergegeben und sind weder f�r Spamroboter noch f�r die anderen Newsletterempf�nger sichtbar!</i><br/>

<form action="NewsletterBenutzer.php" method="post">
    <table class="formular">
        <tr><td>Ihre E-Mail-Adresse:<br/><input name="Mailadresse" type="text" size="40" maxlength="60" value="ihre@e-mail.de"></td></tr>	
        <tr><td><input type="radio" name="Konfiguration" value="Anmelden" checked>anmelden <input type="radio" name="Konfiguration" value="Abmelden">abmelden</td></tr>
        <tr><td><input type="submit" name="Submit"/></td></tr>
    </table>
</form>
<?php echo "<font color=\"red\">" . $_GET['status'] . "</font>" ?>
</div>

<div class="page-section">RSS-Feed</div>
<div class="page-text">Wenn Sie Neuigkeiten lieber nicht per E-Mail erhalten m�chten, dann k�nnen Sie auch den <a href="http://www.bsi-fuer-buerger.de/glossar/glo_qr.htm#rss" target="_blank">RSS</a>-Feed abonnieren.<br/>
<i>Beachten Sie bitte, dass nicht alle Eintr&auml;ge mit einer Webseite verlinkt sind und deswegen von manchen RSS-Readern eventuell gar nicht angezeigt werden!</i>
<br/><br/>
</a> <a href="../newsletter-rss/rss.xml"><img src="1243694295_badge_rss.png" alt="RSS" border="0"/>http://astro.junetz.de/newsletter-rss/rss.xml</a></div>

<?php
    $rootdir = "../";
    include("../inhalt/dahinter.inc.php");
?>