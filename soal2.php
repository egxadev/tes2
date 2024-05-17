<?php
// fixed var
$x = 5;

// loop row
for ($i = 1; $i <= $x; $i++) {
    // loop col space
    for ($j = $x - $i; $j > 0; $j--) {
        // if run via terminal
        echo " ";

        // if run via browser
        // echo "&nbsp;";
    }
    // loop col star
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    // if run via terminal
    echo "\n";

    // if run via browser
    //   echo "<br>";
}
