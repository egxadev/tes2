<?php
// fixed var
$x = 8;

// loop row
for ($i = 1; $i <= $x; $i++) {
    // loop col
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    // if run via terminal
    echo "\n";

    // if run via browser
    // echo "<br>";
}
