<?php
    include( "mysqlVerbinden.inc.php" );
    $header = $_POST['Header'];
    $inhalt = $_POST['Inhalt'];
    $footer = $_POST['Footer'];
    $gesamt = $header . $inhalt . $footer;
    
    $gesamt = ereg_replace("�","Ae",$gesamt);
    $gesamt = ereg_replace("�","ae",$gesamt);
    $gesamt = ereg_replace("�","Oe",$gesamt);
    $gesamt = ereg_replace("�","oe",$gesamt);
    $gesamt = ereg_replace("�","Ue",$gesamt);
    $gesamt = ereg_replace("�","ue",$gesamt);
    $gesamt = ereg_replace("�","ss",$gesamt);
    
    $gesamt = wordwrap($gesamt);
    
    $gesamt = stripcslashes($gesamt);


   if( isset($_POST['Submit']) ) {
   	echo "Newsletter ist versandfertig.<br /><br />";
   	$exemplar = 1;
        while( $empfaenger = mysql_fetch_array($alleEmpfaenger) ) {
            $recipient=$empfaenger['Mailadresse'];
            $subject="Newsletter";
            $header="From: \"Astro-AG der Liebigschule Frankfurt am Main\" <astro@junetz.de>";
            $mail_body = $gesamt;	
            mail($recipient,$subject,$mail_body,$header);
            echo "Newsletter " . $exemplar . " wurde verschickt.<br/>";
            $exemplar = $exemplar + 1;
        }
        $file = "newsletter-archiv/" . date( "Ymd" ) . ".txt";        
        $fp = fOpen( $file,"w" );
        fPuts($fp, $gesamt);
        fClose ($fp);
    }
    echo "<br />Alle Newsletter erfolgreich versendet.";

    include( "mysqlTrennen.inc.php" );
?>