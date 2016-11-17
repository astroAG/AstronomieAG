<?php
    include( "mysqlVerbinden.inc.php" );
    $mailadresse = $_POST['Mailadresse'];
    $konfiguration = $_POST['Konfiguration'];
    
    $mailadresse = ereg_replace("A","a",$mailadresse);
    $mailadresse = ereg_replace("B","b",$mailadresse);
    $mailadresse = ereg_replace("C","c",$mailadresse);
    $mailadresse = ereg_replace("D","d",$mailadresse);
    $mailadresse = ereg_replace("E","e",$mailadresse);
    $mailadresse = ereg_replace("F","f",$mailadresse);
    $mailadresse = ereg_replace("G","g",$mailadresse);
    $mailadresse = ereg_replace("H","h",$mailadresse);
    $mailadresse = ereg_replace("I","i",$mailadresse);
    $mailadresse = ereg_replace("J","j",$mailadresse);
    $mailadresse = ereg_replace("K","k",$mailadresse);
    $mailadresse = ereg_replace("L","l",$mailadresse);
    $mailadresse = ereg_replace("M","m",$mailadresse);
    $mailadresse = ereg_replace("N","n",$mailadresse);
    $mailadresse = ereg_replace("O","o",$mailadresse);
    $mailadresse = ereg_replace("P","p",$mailadresse);
    $mailadresse = ereg_replace("Q","q",$mailadresse);
    $mailadresse = ereg_replace("R","r",$mailadresse);
    $mailadresse = ereg_replace("S","s",$mailadresse);
    $mailadresse = ereg_replace("T","t",$mailadresse);
    $mailadresse = ereg_replace("U","u",$mailadresse);
    $mailadresse = ereg_replace("V","v",$mailadresse);
    $mailadresse = ereg_replace("W","w",$mailadresse);
    $mailadresse = ereg_replace("X","x",$mailadresse);
    $mailadresse = ereg_replace("Y","y",$mailadresse);
    $mailadresse = ereg_replace("Z","z",$mailadresse);

    if( (isset($_POST['Submit'])) && ($konfiguration=="Anmelden") ) {
        $BenutzerAnmelden = mysql_query( "INSERT INTO newsletter (Mailadresse) VALUES ('$mailadresse')" );
        
        $recipientON="astro@junetz.de";
        $subjectON="Newsletter Anmeldung";
        $headerON="From: \"Astro-AG der Liebigschule Frankfurt am Main\" <astro@junetz.de>";
        $mail_bodyON = $mailadresse;
        mail($recipientON,$subjectON,$mail_bodyON,$headerON);
        
        $recipientON=$mailadresse;
        $mail_bodyON = "Sie haben Sich mit der Mailadresse \"" . $mailadresse . "\" erfolgreich fuer den Newsletter der Astro-AG der Liebigschule Frankfurt am Main angemeldet.\n\nSie koennen Sich unter http://astro.junetz.de/newsletter-rss/ jederzeit wieder abmelden.\n\n\n---\nAstro-AG der Liebigschule Frankfurt am Main\nhttp://astro.junetz.de/\nastro@junetz.de";
        mail($recipientON,$subjectON,$mail_bodyON,$headerON);
        
    } else if( (isset($_POST['Submit'])) && ($konfiguration=="Abmelden") ) {
        $BenutzerAbmelden = mysql_query( "DELETE FROM newsletter WHERE Mailadresse=\"$mailadresse\"" );
        
        $recipientOFF="astro@junetz.de";
        $subjectOFF="Newsletter Abmeldung";
        $headerOFF="From: \"Astro-AG der Liebigschule Frankfurt am Main\" <astro@junetz.de>";
        $mail_bodyOFF=$mailadresse;	
        mail($recipientOFF,$subjectOFF,$mail_bodyOFF,$headerOFF);
         
        $recipientOFF=$mailadresse;
        $mail_bodyOFF = "Sie haben Sich mit der Mailadresse \"" . $mailadresse . "\" erfolgreich von dem Newsletter der Astro-AG der Liebigschule Frankfurt am Main abgemeldet.\n\nSie koennen Sich unter http://astro.junetz.de/newsletter-rss/ jederzeit wieder anmelden.\n\n\n---\nAstro-AG der Liebigschule Frankfurt am Main\nhttp://astro.junetz.de/\nastro@junetz.de";
        mail($recipientOFF,$subjectOFF,$mail_bodyOFF,$headerOFF);
    }

    include( "mysqlTrennen.inc.php" );

    if( $BenutzerAnmelden == 1 ) {
        $status = $mailadresse . " wurde erfolgreich in den Verteiler aufgenommen!";
    } else if( $BenutzerAbmelden == 1 ) {
        $status = $mailadresse . " wurde erfolgreich aus dem Verteiler entfernt!";
    }

    Header("Location: ../newsletter/?status=" . $status);
?>