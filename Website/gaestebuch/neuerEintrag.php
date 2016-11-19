<?php
    include( "mysqlVerbinden.inc.php" );
    $titel = $_POST['Titel'];
    $datum = date( "Y-m-i H:i:s" );
    $name = $_POST['Name'];
    $mailadresse = $_POST['Mailadresse'];
    $webseite_check = $_POST['Webseite'];
      if( ($webseite_check!="http://") || ($webseite_check!="") ) { $webseite = $webseite_check; }
    $text = $_POST['Text'];
    $spamschutz = $_POST['Spamschutz'];

    if( (isset($_POST['Submit'])) && ($spamschutz=="Astronomie") && ($name!="") && ($titel!="") ) {
        $neuerEintrag = mysql_query( "INSERT INTO gaestebuch (Titel, Datum, Name, Mailadresse, Webseite, Text) VALUES ('$titel', '$datum', '$name', '$mailadresse', '$webseite', '$text')" );
        $recipient="astro@junetz.de";
        $subject="Neuer Gaestebuch Eintrag";
        $header="From: \"Astro-AG der Liebigschule Frankfurt am Main\" <astro@junetz.de>";
        $mail_body = $name . " schrieb:\n" . $text;	
        mail($recipient,$subject,$mail_body,$header);
    }

    Header("Location: ../gaestebuch");

    include( "mysqlTrennen.inc.php" );
?>