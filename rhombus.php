<?php

$size = 7;
$mid = ceil($size/2);

for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= abs($mid-$i); $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $size - 2*abs($mid-$i); $k++) {
        echo "* ";
    }
    echo "<br/>";
}

?>
