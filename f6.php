<?php

function celsiusAFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}
echo "25 grados Celsius son: " . celsiusAFahrenheit(25) . " grados Fahrenheit.<br>";

?>