<?php
    $rootdir = "../../";
    include("../../inhalt/davor.inc.php");
?>

<div class="page-title">Newsletter Administration</div>

<div class="page-section">Neuen Newsletter erstellen</div>
<div class="page-text">
<form action="NewsletterAbsenden.php" method="POST">
    <table>
        <tr><td>Header:</td><td><textarea name="Header" cols="60" rows="2" maxlength="1000" readonly><?php echo"Astro-AG der Liebigschule Frankfurt am Main\n____N_E_W_S_L_E_T_T_E_R____\n\n\n"; ?></textarea></td></tr>	
        <tr><td>Inhalt:</td><td><textarea name="Inhalt" cols="60" rows="10" maxlength="1000"><?php echo"I. Wie gestalte ich den Newsletter?\n\nDie Leerzeilen zwischen Header und Inhalt und Footer werden automatisch eingef&uuml;gt.\n\n\n* * *\n\n\nII. weiterer Punkt\n\nDas w&auml;re als Beispiel ein weiteres Thema."; ?></textarea></td></tr>
        <tr><td>Footer:</td><td><textarea name="Footer" cols="60" rows="2" maxlength="1000" readonly><?php echo "\n\n\n\n* * *\n\n\nImpressum\n\nDas ist der Newsletter der Astro-AG der Liebigschule Frankfurt am Main.\n\nSie finden uns unter der Adresse http://astro.junetz.de/ und erreichen uns per Mail an astro@junetz.de (weitere Informationen unter http://astro.junetz.de/impressum/).\n\nFalls Sie den Newsletter nicht mehr bekommen moechten, koennen Sie ihre Mailadresse unter http://astro.junetz.de/newsletter-rss/ vom Verteiler entfernen. Interessierte koennen sich unter der gleichen Adresse fuer den Newsletter anmelden."; ?></textarea></td></tr>
        <tr><td colspan="2"><input type="submit" name="Submit" value="Alles nochmal kontrolliert? Dann ab damit!"/></td></tr>
    </table>
</form>
</div>

<div class="page-section">Archiv</div>
<div class="page-text">
<?php
    if($handle = opendir("newsletter-archiv/"))
    {
      while(($file = readdir($handle)) !== false)
      {
        if($file != "." && $file != ".." && $file != "Thumbs.db"/*pesky windows, images..*/)
        {
          echo '<a target="_blank" href="newsletter-archiv/'.$file.'">'.$file.'</a>, '."\n";
        }
      }
      closedir($handle);
    }
?><br/><br/>
</div>

<?php
include("mysqlVerbinden.inc.php");
?>
<div class="page-section">Abonennten (derzeit <?php echo mysql_num_rows( $alleEmpfaenger ); ?>)</div>
<div class="page-text">
<?php while( $empfaenger = mysql_fetch_array($alleEmpfaenger) ) { echo "_____" . substr($empfaenger['Mailadresse'], 5) /*substr($empfaenger['Mailadresse'], 0, strpos($empfaenger['Mailadresse'], '@', 0))*/ . ", "; } 

include("mysqlTrennen.inc.php");
?>
</div>

<?php
    $rootdir = "../../";
    include("../../inhalt/dahinter.inc.php");
?>
