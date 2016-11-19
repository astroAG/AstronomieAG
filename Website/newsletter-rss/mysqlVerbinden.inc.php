<?php
    $db = mysql_connect( "localhost", "astro", "y4wAuVWn" ) or die ( "Verbindung fehlgeschlagen!" );
    mysql_select_db( "astro", $db );
    $alleEmpfaenger = mysql_query( "SELECT * FROM newsletter" );
?>