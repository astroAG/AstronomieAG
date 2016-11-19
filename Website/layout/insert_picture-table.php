<?php
    echo "<table><tr>";

    $rows = 1;
    $col = 0;
    foreach( $pictures as $name ) {
        if( $rows <= 3-$col ) {
            echo "<td><div class=\"bild_mit_beschriftung\"><a href=\"";
            echo $name;
            echo "\" target=\"_blank\"><img src=\"";
            echo $name;
            echo "\" width=\"180\" height=\"130\" border=\"0\"/><span>Bild vergr&ouml;&szlig;ern</span></a></div></td>";
            ++$rows;
        } else {
            echo "</tr><tr>";
            echo "<td><div class=\"bild_mit_beschriftung\"><a href=\"";
            echo $name;
            echo "\" target=\"_blank\"><img src=\"";
            echo $name;
            echo "\" width=\"180\" height=\"130\" border=\"0\"/><span>Bild vergr&ouml;&szlig;ern</span></a></div></td>";
            $rows = 1;
            ++$col;
        }
    }
    
    echo "</tr></table>";
?>