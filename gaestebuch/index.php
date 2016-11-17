<?php
    $rootdir = "../";
    include("../inhalt/davor.inc.php");
    include("mysqlVerbinden.inc.php");
?>
<div class="page-title">G&auml;stebuch</div>

<div class="page-section">Neuen Eintrag erstellen</div>
<div class="page-text">Mit diesem Formular können Sie sich selbst eintragen und so Ihre Meinung zu unserer Webseite, einer unserer Veranstaltungen oder einem anderen (passenden) Thema loswerden.
<form name="neuerEintrag" action="neuerEintrag.php" method="post">
    <table class="formular">
        <tr><td>Name:<br/><font size="0.7em" color="#808080">[Pflichtfeld]</font></td><td><input type="text" name="Name" maxlength="100" size="50"/></td></tr>
        <tr><td>Mailadresse:</td><td><input type="text" name="Mailadresse" maxlength="200" size="50"/></td></tr>
        <tr><td>Webseite:</td><td><input type="text" name="Webseite" maxlength="200" value="http://" size="50"/></td></tr>
        <tr><td>Titel:<br/><font size="0.7em" color="#808080">[Pflichtfeld]</font></td><td><input type="text" name="Titel" maxlength="150" size="50"/></td></tr>
        <tr><td>Nachricht:</td><td><textarea name="Text" cols="49" rows="5" maxlength="1000"></textarea></td></tr>
        <tr><td>Spamschutz:<br/><font size="0.7em" color="#808080">[Pflichtfeld]</font></td><td><i>Um <a href="http://www.bsi.bund.de/ContentBSI/Themen/Internet_Sicherheit/Gefaehrdungen/SPAM/gefahr_spam.html" target="_blank">Spam</a>-Einträge zu verhindern, müssen Sie sich als Mensch identifizieren, indem Sie die folgende Frage korrekt beantworten: Besch&auml;ftigen wir uns vorallem mit "Astronomie" oder mit "Aktenordnern"?</i><br/><input type="text" name="Spamschutz" size="50"/></td></tr>
        <tr><td colspan="2"><input type="submit" name="Submit" value="Eintrag veröffentlichen!"> <i>Alle eingegebenen Daten (inkl. E-Mail-Adresse) werden auf der Webseite veröffentlicht.</i></td></tr>
    </table>
</form>
</div>

<div class="page-section">Bisherige Eintr&auml;ge</div>
<div class="page-text">Sie sehen Eintrag 1 - <?php echo mysql_num_rows( $alleEintraege ); ?> von insgesamt <?php echo mysql_num_rows( $alleEintraege ); ?> gespeicherten Eintr&auml;gen.
<table class="formular">
<?php
    while( $eintrag = mysql_fetch_array($alleEintraege) ) {
        $text = ereg_replace("\n","<br/>",$eintrag['Text']);
        echo "<tr>
            <td><b>" . $eintrag['Titel'] . "</b> <font size=\"0.7em\" color=\"#808080\">" . date("j.n.y, H:i", strtotime($eintrag['Datum'])) . "</font><br/>
              " . $text . "</td>
            <td><font size=\"0.7em\">" . $eintrag['Name'];
        if( $eintrag['Mailadresse']!="" ) { echo "<br/><a href=\"mailto:" . $eintrag['Mailadresse'] . "\">" . $eintrag['Mailadresse'] . "</a>"; }
        if( $eintrag['Webseite']!="" ) { echo "<br/><a href=\"" . $eintrag['Webseite'] . "\" target=\"_blank\">" . $eintrag['Webseite'] . "</a>"; }
        echo "</font></td></tr><tr><td colspan=\"2\">&nbsp;</td></tr>";
    }
?>
</table>
</div>

<?php
    $rootdir = "../";
    include("mysqlTrennen.inc.php");
    include("../inhalt/dahinter.inc.php");
?>