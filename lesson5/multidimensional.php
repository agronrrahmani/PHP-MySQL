<?php
    $dogs = array(
        array("chiuaha", "mexio", 20),
        array("husky", "siberia", 15),
        array("bulldog", "england", 10),
    );

    echo $dogs [0][0] . " Origin" . $dogs[0][1] . " Life span" . $dogs[0][2] . "<br>";
    echo $dogs [1][0] . " Origin" . $dogs[1][1] . " Life span" . $dogs[1][2] . "<br>";
    echo $dogs [2][0] . " Origin" . $dogs[2][0] . " Life span" . $dogs[2][2] . "<br>";

    for($row=0; $row<3; $row++) {
        echo "<p><b>Row number $row </b></p>";
        echo "<ul>";
        for($col=0; $col<3; $col++){
            echo "<li>" . $dogs[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
?>