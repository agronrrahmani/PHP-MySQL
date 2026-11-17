<?php
    $Sport = array("Football", "basketball", "tennis", "voleyball");
    echo $Sport[0];
    $sport = ["Football", "basketball", "tennis", "voleyball"];
    echo end ($sport);
    echo count ($sport);

    for ($i=0 ; $i<4; $i++) {
        echo $sport[$i],"\n";
    }

    
?>