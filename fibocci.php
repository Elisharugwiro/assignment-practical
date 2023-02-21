<?php

function fibo($v)
{
    if ($v == 0) {
        return 0;
    } elseif ($v == 1) {
        return 1;
    } else {
        return fibo($v - 1) + fibo($v - 2);
    }
}

for ($i = 0; $i < 10; $i++) {
    echo fibo($i) . " ";
}

?>
