<?php
     $Sport = array("Football", "basketball", "tennis", "voleyball");
    $output1 = array_slice($Sport, 2);
    $output2 = array_slice($Sport, -2, 1);
    $output3 = array_slice($Sport, 0, 3);
    var_dump($output1,$output2,$output3);
?>