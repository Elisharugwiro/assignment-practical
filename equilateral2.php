<?php

function equilateralTriangle($n) {

    for ($i = 0; $i < $n; $i++) {
        for ($j = $n-$i; $j > 1; $j--) {
            echo "&nbsp;";
        }
        for ($j = 0; $j <= $i; $j++ ) {
            echo "*&nbsp;";
        }
        echo "<br>";
    }
}

// Call the function with a parameter to specify the number of rows
equilateralTriangle(5);

?>
